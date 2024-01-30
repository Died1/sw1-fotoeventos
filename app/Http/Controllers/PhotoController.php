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
                $path =  $file->store('events/photos', 'public');
                $urlFoto = Storage::url($path);

                // Redimensionar la imagen a 300x250
                $image = Image::make(storage_path('app/public/' . $path));
                $image->fit(250, 200);

                // Añadir marca de agua
                $watermark = Image::make(storage_path('app/public/watermark.png'));
                $image->insert($watermark, 'bottom-right', 10, 10);

                $image->save();

                $photo = new Photo();
                $photo->url_preview = $urlFoto;
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
        return $photo->alternatives ? $photo->alternatives: [];
    }
}
