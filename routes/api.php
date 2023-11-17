<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PhotographerController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth:sanctum'])->group(function () {
    #Eventos
    Route::get('/events', [EventController::class, 'get']);
    Route::get('/events/qr', [EventController::class, 'qr']);
    Route::get('/events/{id}', [EventController::class, 'find']);
    Route::post('/events', [EventController::class, 'save']);
    Route::put('/events/{id}', [EventController::class, 'update']);
    Route::post('/events/addPhoto/{eventId}/{photographerId}', [EventController::class, 'addPhoto']);
    Route::post('/compare-faces', [EventController::class, 'compareWithCollection']);
    #compras
    Route::get('/purchases', [PurchaseController::class, 'get']);
    Route::get('/purchases/{id}', [PurchaseController::class, 'find']);
    Route::post('/purchases', [PurchaseController::class, 'save']);
    Route::put('/purchases/{id}', [PurchaseController::class, 'update']);
    #archivos
    Route::get('/media/{id}', [MediaController::class, 'download']);
    Route::post('/media', [MediaController::class, 'upload']);

    Route::post('/tokenFCM', [UserController::class, 'tokenFCM']);
});
#publicas
Route::get('/photographers', [PhotographerController::class, 'get']);
Route::get('/photographers/{id}', [PhotographerController::class, 'find']);
Route::put('/photographers/{id}', [PhotographerController::class, 'update']);

Route::post('/auth/register', [AuthController::class, 'createUser']);
Route::post('/auth/login', [AuthController::class, 'loginUser']);
Route::get('/profile/{id}', [UserController::class, 'find']);
Route::put('/profile', [UserController::class, 'update']);


Route::get('/notification', [EventController::class, 'notification']);

