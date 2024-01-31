<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PhotoController extends Controller
{

    public function store(Request $request, $eventID)
    {
        try {
            $file = $request->file('image') ?? null;
            if ($file) {

                $image_path = Storage::disk('s3')->put("events/$eventID/photos", $file);
                $urlFotoOriginal = env('AWS_BUCKET_URL') . $image_path;

                $image = Image::make($file);
                $image->fit(250, 200); // Redimensionar la foto a 250x200 manteniendo la proporción

                 // Añadir marca de agua
                 $watermark = Image::make(storage_path('app/public/watermark.png'));
                 $image->insert($watermark, 'bottom-right', 10, 10);


                // Guardar la foto redimensionada en S3
                $imagePathRedimensionada = "events/{$eventID}/photos/" . uniqid() . '.jpg';
                Storage::disk('s3')->put($imagePathRedimensionada, $image->stream()->__toString());
                $urlFotoRedimensionada = env('AWS_BUCKET_URL') . $imagePathRedimensionada;

                // Guardar la URL de ambas fotos en la base de datos
                $photoOriginal = new Photo();
                $photoOriginal->url_preview = $urlFotoOriginal;
                $photoOriginal->event_id = $eventID;
                $photoOriginal->save();

                $photoRedimensionada = new Photo();
                $photoRedimensionada->url_preview = $urlFotoRedimensionada;
                $photoRedimensionada->event_id = $eventID;
                $photoRedimensionada->save();

                /* // Redimensionar la imagen a 300x250
                $image = Image::make(storage_path('app/public/' . $path));
                $image->fit(250, 200);


                $image->save();*/

                /* $photo = new Photo();
                $photo->url_preview = $urlFoto;
                $photo->event_id = $eventID;
                $photo->save(); */
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
        return $photo->alternatives ? $photo->alternatives: [];
    }
}
