<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{

    public function store(Request $request, $eventID)
    {
        try {
            $file = $request->file('image') ?? null;
            if ($file) {
                $path =  $file->store('events/photos', 'public');
                $urlFoto = Storage::url($path);
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
}
