<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\MediaController;
use Illuminate\Http\Request;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PhotographerController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\AuthController;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/events', [EventController::class, 'get']);
});


Route::get('/events/qr', [EventController::class, 'qr']);

Route::get('/events/{id}', [EventController::class, 'find']);
Route::post('/events', [EventController::class, 'save']);
Route::put('/events/{id}', [EventController::class, 'update']);
Route::post('/events/addPhoto/{eventId}/{photographerId}', [EventController::class, 'addPhoto']);
Route::post('/compare-faces', [EventController::class, 'compareWithCollection']);

Route::get('/photographers', [PhotographerController::class, 'get']);
Route::get('/photographers/{id}', [PhotographerController::class, 'find']);
Route::put('/photographers/{id}', [PhotographerController::class, 'update']);

Route::get('/purchases', [PurchaseController::class, 'get']);
Route::get('/purchases/{id}', [PurchaseController::class, 'find']);
Route::post('/purchases', [PurchaseController::class, 'save']);
Route::put('/purchases/{id}', [PurchaseController::class, 'update']);

Route::get('/media/{id}', [MediaController::class, 'download']);
Route::post('/media', [MediaController::class, 'upload']);

Route::post('/auth/register', [AuthController::class, 'createUser']);
Route::post('/auth/login', [AuthController::class, 'loginUser']);
