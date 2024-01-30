<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Photographer;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use App\Models\User;
use App\Traits\NotificationTrait;
use App\Traits\RekognitionTrait;
use App\Traits\S3Trait;
use Illuminate\Support\Facades\Storage;
use Aws\Rekognition\RekognitionClient;

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Label\LabelAlignment;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;
use Illuminate\Support\Facades\Auth;


class EventController extends Controller
{
    use ReKognitionTrait;
    use NotificationTrait;
    use S3Trait;



    public function get()
    {
        return Event::with('photos', 'photographer', 'organizer')->get();
    }

    public function search(Request $request)
    {
        // Captura el parámetro de búsqueda "kw" de la solicitud
        $search = $request->input('kw');

        // Ahora puedes usar la variable $search en tu lógica para filtrar los eventos, por ejemplo:
        return Event::with('photos', 'photographer', 'organizer')
            ->where('title', 'like', '%' . $search . '%')
            ->get();
    }

    public function getCreatedEvents()
    {

        $creator = Auth::user();
        return Event::with('photos', 'photographer', 'organizer')
            ->where('creator_id', $creator->id)
            ->get();
    }
    public function getAssigneds()
    {
        $user = Auth::user();
        return Event::with('photos', 'photographer', 'organizer')
            ->where('photographer_id', $user->id)
            ->get();
    }



    public function find($id)
    {
        $event = Event::with('photos', 'photographer', 'organizer')->find($id);
        if ($event) {
            return $event;
        } else {
        }
    }


    public function save(EventRequest $request)
    {
        // Guardar la foto en el disco "public"
        try {
            //code...
            $foto = $request->file('cover');
            $image_path = Storage::disk('s3')->put('events/cover', $foto);
            $path_cover = env('AWS_BUCKET_URL').$image_path;

            //$rutaFoto = $foto->store('events/cover', 'public');
            //$path_cover = Storage::url($rutaFoto);


            $creator = Auth::user();
            $validatedData = $request->validated();
            $validatedData['creator_id'] = $creator->id;

            $token = $creator->fcm_token;

            $this->sendNotification($token, 'Probanndo la notificacion desde APp fotos', 'este es una prueba ants de subir a produccion');

            $event = Event::create($validatedData);
            $event->qr_url = $this->generateQR($event);
            $event->cover_url = $path_cover;
            $event->update();
            return $event;
        } catch (\Exception $e) {
            //throw $th;
            return response()->json(['message' => $e->getMessage()], 404);
        }
    }

    public function update(EventRequest $request, $id)
    {
        $validatedData = $request->validated();

        $event = Event::find($id);

        if (!$event) return response()->json(['message' => 'Evento no encontrado'], 404);

        $event->update($validatedData);

        return $event;
    }

    public function addPhoto(Request $request, $eventId, $photographerId)
    {
        $eventId = $photographerId = 1;
        $event = Event::findOrFail($eventId);
        if (!$event) {
            return response()->json(['message' => 'No coincide con ningun evnto']);
        }
        if ($event->photographer_id !== $photographerId) {
            return response()->json(['message' => 'No tiene permiso para agregar fotos']);
        }
        if (!$request->hasFile('file')) {
            return response()->json(['message' => 'No se ha proporcionado un archivo válido.']);
        }
        $file = $request->file('file');
        $fileName = 'photos/original/' . $file->hashName();
        Storage::disk('s3')->put($fileName, file_get_contents($file));

        $photo = new Photo();
        $photo->name = $fileName;  // Almacena la clave del archivo en el modelo
        $event->photos()->save($photo);
        /* $img1 = 'https://esx.bigo.sg/na_live/3a3/27OWI8.jpg';
        $img2 = 'https://media.licdn.com/dms/image/C4E03AQHioQdzD1A8Ng/profile-displayphoto-shrink_400_400/0/1642784831254?e=1704931200&v=beta&t=Dam5rQnuUZzlgyzyckUHeT6tgtVuqV5hQVYosYgjIj8';
        $resultado = $this->comparar($img1, $img2); */
        return response()->json(['path' => 'https://sw1-fotos.s3.us-east-2.amazonaws.com/' . $photo->name, 'compara' => $resultado]);
    }

    public function generateQR($event)
    {
        $result = Builder::create()
            ->writer(new PngWriter())
            ->writerOptions([])
            ->data($event->id)
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(ErrorCorrectionLevel::High)
            ->size(300)
            ->margin(10)
            ->roundBlockSizeMode(RoundBlockSizeMode::Margin)
            ->labelText($event->title)
            ->labelFont(new NotoSans(20))
            ->labelAlignment(LabelAlignment::Center)
            ->validateResult(false)
            ->build();

        $path = "events/qr_img/$event->id.png";
        // Guardar el archivo en el disco "public"
        Storage::disk('public')->put($path, $result->getString());
        $urlArchivo = Storage::url($path);

        return $urlArchivo;
    }


    public function compareWithCollection(Request $request)
    {
        $photo = $request->file('file');
        $collectionId = 'e2xiw29guja8sjibt1o5';  // Reemplaza con tu ID de colección en Rekognition

        // Indexa la cara en la colección

        $rekognition = new RekognitionClient([
            'region' => 'us-east-2',
            'version' => 'latest',
        ]);


        $indexResult = $rekognition->indexFaces([
            'CollectionId' => $collectionId,
            'Image' => [
                'Bytes' => file_get_contents($photo->getPathname()),
            ],
        ]);

        /*  // ID de la cara indexada
        $faceId = $indexResult['FaceRecords'][0]['Face']['FaceId'];

        // Busca caras similares en la colección
        $searchResult = $rekognition->searchFaces([
            'CollectionId' => $collectionId,
            'FaceId' => $faceId,
        ]);

        if (!empty($searchResult['FaceMatches'])) {
            // Coincidencia encontrada, haz algo con la información de coincidencia
            return response()->json(['message' => 'Coincidencia encontrada', 'matches' => $searchResult['FaceMatches']]);
        } */

        // No se encontraron coincidencias
        return response()->json(['message' => 'No se encontraron coincidencias', $indexResult]);
    }

    public function notification()
    {
        $users = User::all();
        foreach ($users as $user) {
            $titulo = 'Título de la notificación';
            $cuerpo = 'Tienes nueva foto del evento al que asististe';
            $icono = 'https://salgadoeventos.com/wp-content/uploads/2021/04/MG_4393-1536x1024.jpg.webp';
            $enlace = 'https://www.events.com/2/details';
            $respuesta = $this->sendNotification($user->fcm_token, "hola $user->username", $cuerpo, $icono, $enlace);
        }
    }
    public function getPhotos($id)
    {
        $event = Event::with('photos')->find($id);

        return $event ? $event->photos : [];
    }
}
