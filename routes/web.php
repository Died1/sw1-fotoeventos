<?php


use Illuminate\Support\Facades\Route;

Route::get('/{any}', function () {
    return view('app'); // Donde 'index' es la vista principal de tu aplicación Vue.js
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
