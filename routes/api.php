<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\PointEchantillonageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
    Route::post('/logout', 'logout');
});

Route::get('/matiere', [MatiereController::class, 'index']);
Route::post('/matiere', [MatiereController::class, 'store']);
Route::post('/matiere/{id}', [MatiereController::class, 'edit']);
Route::delete('/matiere/{id}', [MatiereController::class, 'destroy']);
Route::patch('/matiere/{id}', [MatiereController::class, 'restore']);




Route::get('/destination', [DestinationController::class, 'index']);
Route::post('/destination', [DestinationController::class, 'store']);
Route::post('/destination/{id}', [DestinationController::class, 'update']);
Route::delete('/destination/{id}', [DestinationController::class, 'destroy']);
Route::patch('/destination/{id}', [DestinationController::class, 'restore']);




Route::get('/point_echantillonage', [PointEchantillonageController::class, 'index']);
Route::post('/point_echantillonage', [PointEchantillonageController::class, 'store']);
Route::post('/point_echantillonage/{id}', [PointEchantillonageController::class, 'update']);
Route::delete('/point_echantillonage/{id}', [PointEchantillonageController::class, 'destroy']);
Route::patch('/point_echantillonage/{id}', [PointEchantillonageController::class, 'restore']);
