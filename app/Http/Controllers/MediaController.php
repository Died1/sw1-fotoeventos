<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Photo;
use App\Traits\ReKognitionTrait;

class MediaController extends Controller
{
    use ReKognitionTrait;

    public function download($id)
    {
        $result = Photo::find($id);
        if ($result) {
            return $result;
        } else {
        }
    }
    public function upload(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');

            // Guarda la foto original en la carpeta de almacenamiento
            $originalPath = $file->store('photos/original', 'public');

            // Crea las versiones de la imagen
            $this->createImageVersions($file, $originalPath);
            $img1 = 'https://esx.bigo.sg/na_live/3a3/27OWI8.jpg';
            $img2 = 'https://media.licdn.com/dms/image/C4E03AQHioQdzD1A8Ng/profile-displayphoto-shrink_400_400/0/1642784831254?e=1704931200&v=beta&t=Dam5rQnuUZzlgyzyckUHeT6tgtVuqV5hQVYosYgjIj8';

            $resultado = $this->comparar($img1, $img2);

            return response()->json(['path' => $originalPath, 'compara' => $resultado]);
        }

        return response()->json(['error' => 'No se recibió ningún archivo.'], 400);
    }

    private function createImageVersions($file, $originalPath)
    {
        // Crea versión de avatar
        $avatar = Image::make($file)->fit(100, 100)->encode('jpg');
        $avatarPath = str_replace('original', 'avatar', $originalPath);
        //Storage::disk('s3')->put($avatarPath, $avatar);
        Storage::disk('s3')->put($avatarPath, $avatar->getEncoded(), 'private');

        /* // Crea versión normal
        $normal = Image::make($file)->resize(300, 300)->encode('jpg');
        $normalPath = str_replace('original', 'normal', $originalPath);
        Storage::disk('local')->put($normalPath, $normal);

        // Guarda la versión original (sin cambios)
        Storage::disk('local')->put($originalPath, $file); */
    }
}
