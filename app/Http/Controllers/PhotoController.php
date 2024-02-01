<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Traits\NotificationTrait;
use App\Traits\RekognitionTrait;
use App\Models\User;


class PhotoController extends Controller
{
    use ReKognitionTrait;
    use NotificationTrait;

    public function store(Request $request, $eventID)
    {
        try {
            $file = $request->file('image') ?? null;
            if ($file) {

                $image_path = Storage::disk('s3')->put("events/$eventID/photos", $file);
                $urlFotoOriginal = env('AWS_BUCKET_URL') . $image_path;

                // Redimensionar la foto a 250x200 manteniendo la proporción
                $image = Image::make($file);
                $image->fit(250, 200);

                //marca de agua desde S3
                $watermarkPath = 'utils/watermark.png';
                $watermark = Image::make(Storage::disk('s3')->get($watermarkPath));

                // Agregar la marca de agua a la imagen redimensionada
                $image->insert($watermark, 'bottom-right', 10, 10);

                // Guardar la foto redimensionada en S3
                $urlFotoRedimensionada = "events/{$eventID}/photos/" . uniqid() . '.jpg';
                Storage::disk('s3')->put($urlFotoRedimensionada, $image->stream()->__toString());
                $urlFotoRedimensionada = env('AWS_BUCKET_URL') . $urlFotoRedimensionada;

                // Guardar la URL de ambas fotos en la base de datos
                $photoOriginal = new Photo();
                $photoOriginal->url_fullsize = $urlFotoOriginal;
                $photoOriginal->url_preview = $urlFotoRedimensionada;
                $photoOriginal->event_id = $eventID;
                $photoOriginal->save();

                $this->procesarImagen($urlFotoOriginal);

                return response()->json([
                    'status' => true,
                    'message' => 'File received successfully.',
                ], 200);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function getAlternatives($id)
    {
        $photo = Photo::with('alternatives')->find($id);
        return $photo->alternatives ? $photo->alternatives : [];
    }

    private function procesarImagen($urlImageUploaded){

        $users = User::whereNotNull('avatar_url')->whereNotNull('fcm_token')->get();

        try {

            foreach ($users as $user) {

                $token = $user->fcm_token;
                $urlImageAvatar = $user->avatar_url;

                $isSimilar = $this->comparar($urlImageUploaded, $urlImageAvatar);

                if($isSimilar){
                    $titulo = "hola $user->username";
                    $cuerpo = 'Una Foto subia recientemente coincide contigo. verifica si eres tu';
                    $icono = 'https://salgadoeventos.com/wp-content/uploads/2021/04/MG_4393-1536x1024.jpg.webp';
                    $enlace = 'https://www.events.com/2/details';
                    $this->sendNotification($token, $titulo, $cuerpo, $icono, $enlace);
                }

            }
        } catch (\Exception $e) {

        }

    }

}
