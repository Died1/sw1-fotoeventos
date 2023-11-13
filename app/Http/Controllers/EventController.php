<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Photographer;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use App\Traits\ReKognitionTrait;
use Illuminate\Support\Facades\Storage;
use Aws\Rekognition\RekognitionClient;

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Label\LabelAlignment;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;

class EventController extends Controller
{
    use ReKognitionTrait;




    public function get()
    {
        return Event::with('photos', 'photographer', 'organizer')->get();
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
        $validatedData = $request->validated();

        return Event::create($validatedData);
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

    public function qr()
    {

        $result = Builder::create()
            ->writer(new PngWriter())
            ->writerOptions([])
            ->data('Custom QR code contents')
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(ErrorCorrectionLevel::High)
            ->size(300)
            ->margin(10)
            ->roundBlockSizeMode(RoundBlockSizeMode::Margin)


            ->labelText('This is the label')
            ->labelFont(new NotoSans(20))
            ->labelAlignment(LabelAlignment::Center)
            ->validateResult(false)
            ->build();

        // Guardar el código QR como un archivo PNG
        $filename = 'qr_code.png';
        $result->saveToFile($filename);

        // Mostrar el código QR en una página web
        echo '<img src="' . asset('qr_code.png') . ' " alt="QR Code">';
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
}
