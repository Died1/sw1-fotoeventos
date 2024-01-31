<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Google\Cloud\Storage\StorageClient;

class UserController extends Controller
{

    public function find()
    {
    }

    public function update(UserRequest $request)
    {
        try {
            $foto = $request->file('image') ?? null;
            if($foto){
                /*$rutaFoto =  $foto->store('public/users/avatar', 'public');
                $urlFoto = Storage::url($rutaFoto); */
                $image_path = Storage::disk('s3')->put('users/avatar', $foto);
                $path_avatar = env('AWS_BUCKET_URL').$image_path;

                $user = Auth::user();
                $user->update([
                    'avatar_url' => $path_avatar,
                ]);
                return response()->json([
                    'status' => true,
                    'message' => 'successfully.',
                ], 200);
            }
            return response()->json([
                'status' => false,
                'message' => 'Error Al Actualizar',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error: ' . $e->getMessage(),
            ], 500);
        }
    }



    public function tokenFCM(Request $request, $id)
    {
        try {
            $user = Auth::user();
            if (!$user) {
                return response()->json([
                    'status' => false,
                    'message' => 'Usuario No authenticado',
                ], 401);
            }
            $user->update([
                'fcm_token' => $request->token,
            ]);
            return response()->json([
                'status' => true,
                'message' => $user,

            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
