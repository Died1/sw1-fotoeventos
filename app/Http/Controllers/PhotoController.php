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
                // Ruta temporal donde se guardará la imagen redimensionada antes de subirla a S3
                $tempImagePath = public_path('temp/image.jpg');
                // Guarda la imagen temporalmente y redimensiona
                Image::make($file)->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio(); // Mantener la proporción de aspecto
                })->save($tempImagePath);

                // Sube la imagen redimensionada a S3
                $imagePath = "events/{$eventID}/photos/" . uniqid() . '.jpg';
                Storage::disk('s3')->put($imagePath, file_get_contents($tempImagePath));

                // Elimina la imagen temporal
                unlink($tempImagePath);

                // Obtén la URL de la imagen en S3
                $path_cover = Storage::disk('s3')->url($imagePath);

                /* $path =  $file->store('events/photos', 'public');
                $urlFoto = Storage::url($path); */

                /* // Redimensionar la imagen a 300x250
                $image = Image::make(storage_path('app/public/' . $path));
                $image->fit(250, 200);

                // Añadir marca de agua
                $watermark = Image::make(storage_path('app/public/watermark.png'));
                $image->insert($watermark, 'bottom-right', 10, 10);

                $image->save();*/

                $photo = new Photo();
                $photo->url_preview = $path_cover;
                $photo->event_id = $eventID;
                $photo->save();
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
