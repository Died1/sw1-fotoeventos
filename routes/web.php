<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;



Route::get('/{any}', function () {

   /*  $Http = new Client();
    $response = $Http->post('https://fcm.googleapis.com/fcm/send', [
        'headers' => [
            'Authorization' => 'key=' . env('FIREBASE_API_KEY'),
            'Content-Type' => 'application/json',
        ],
        'json' =>  [
            'to' => 'dAKE9-FhtdY6SfkG74V6bc:APA91bEgLmwi7lH_quW3yn3bnxQrm0KEv4_dQ_4eWIdDaHdUYnjUe_vdU-DDATH-iXM_duXF6QHxaAxNysVxw6-QiB9W63nMGz1tis-6f0S4KY5m08fzf6LXDVeK7smZcy_8COlQ5pQa',
            'notification' => [
                'title' => 'Hola',
                'body' => 'Eddy',
                'icon' => null,
                'click_action' => '/eddy/ki.jpg'
            ],
        ],
    ]);
    return $response->getBody()->getContents(); */
    return view('app');

})->where('any', '.*');


/*
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/', [InicioController::class, 'inicio']);
    Route::get('/dashboard', [InicioController::class, 'inicio']);
    //Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/evento', [EventoController::class, 'mostrar']);
    Route::get('/evento/prueba', [EventoController::class, 'prueba']);
    Route::get('/evento/crear', [EventoController::class, 'crearEvento'])->name('crearEvento');
    Route::post('/evento/guardar', [EventoController::class, 'guardarEvento']);
    Route::get('/evento/ver/{id}', [EventoController::class, 'verEvento']);
    Route::delete('evento/{id}', [EventoController::class, 'destroy']);
    Route::get('/evento/cargarFotos/{id}', [EventoController::class, 'cargarFotos']);
    Route::post('/evento/guardarFotos', [EventoController::class, 'guardarFotos']);
    Route::get('/fotografo', [PersonaController::class, 'mostrar']);
    Route::get('/fotografo/crear', [PersonaController::class, 'crearFotografo'])->name('crearFotografo');
    Route::post('/fotografo/guardar', [PersonaController::class, 'guardarFotografo']);

    Route::post('/foto',  [FotoController::class, 'upload']);
    Route::get('/perfil', [UsuarioController::class, 'perfil'])->name('perfil');
    Route::get('/ayuda', function () {
        return view('ayuda');
    })->name('ayuda');

    Route::post('/token', function () {
        return response()->json(['xd' => 'jhjgj']);
    })->name('token');

}); */
