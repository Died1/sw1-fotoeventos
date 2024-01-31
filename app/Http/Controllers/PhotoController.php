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
}
