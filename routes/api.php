<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\PointEchantillonageController;
use App\Http\Controllers\AnalyseController;
use App\Http\Controllers\ProportionController;
use App\Http\Controllers\PhaseGachageController;
use App\Http\Controllers\PhaseTempsPriseController;
use App\Http\Controllers\ResultatAnalysePhysiqueController;
use App\Http\Controllers\AnalyseChimiqueController;
use App\Http\Controllers\XrfController;

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
Route::get('/matiere/{id}', [MatiereController::class, 'matiereFilter']);
Route::get('/matiere/user/{id}', [MatiereController::class, 'userMatiereFilter']);
Route::post('/matiere', [MatiereController::class, 'store']);
Route::post('/matiere/{id}', [MatiereController::class, 'edit']);
Route::delete('/matiere/{id}', [MatiereController::class, 'destroy']);
Route::patch('/matiere/{id}', [MatiereController::class, 'restore']);




Route::get('/destination', [DestinationController::class, 'index']);
Route::post('/destination', [DestinationController::class, 'store']);
Route::post('/destination/{id}', [DestinationController::class, 'edit']);
Route::delete('/destination/{id}', [DestinationController::class, 'destroy']);
Route::patch('/destination/{id}', [DestinationController::class, 'restore']);




Route::get('/point_echantillonage', [PointEchantillonageController::class, 'index']);
Route::post('/point_echantillonage', [PointEchantillonageController::class, 'store']);
Route::post('/point_echantillonage/{id}', [PointEchantillonageController::class, 'edit']);
Route::delete('/point_echantillonage/{id}', [PointEchantillonageController::class, 'destroy']);
Route::patch('/point_echantillonage/{id}', [PointEchantillonageController::class, 'restore']);




Route::get('/analyse', [AnalyseController::class, 'index']);
Route::post('/analyse', [AnalyseController::class, 'store']);
Route::post('/analyse/{id}', [AnalyseController::class, 'edit']);
Route::delete('/analyse/{id}', [AnalyseController::class, 'destroy']);
Route::patch('/analyse/{id}', [AnalyseController::class, 'restore']);




Route::get('/proportion', [ProportionController::class, 'index']);
Route::post('/proportion', [ProportionController::class, 'store']);
Route::post('/proportion/{id}', [ProportionController::class, 'edit']);
Route::delete('/proportion/{id}', [ProportionController::class, 'destroy']);
Route::patch('/proportion/{id}', [ProportionController::class, 'restore']);




Route::get('/phase_gachage', [PhaseGachageController::class, 'index']);
Route::post('/phase_gachage', [PhaseGachageController::class, 'store']);
Route::post('/phase_gachage/{id}', [PhaseGachageController::class, 'edit']);
Route::delete('/phase_gachage/{id}', [PhaseGachageController::class, 'destroy']);
Route::patch('/phase_gachage/{id}', [PhaseGachageController::class, 'restore']);




Route::get('/phase_temps_prise', [PhaseTempsPriseController::class, 'index']);
Route::post('/phase_temps_prise', [PhaseTempsPriseController::class, 'store']);
Route::post('/phase_temps_prise/{id}', [PhaseTempsPriseController::class, 'edit']);
Route::delete('/phase_temps_prise/{id}', [PhaseTempsPriseController::class, 'destroy']);
Route::patch('/phase_temps_prise/{id}', [PhaseTempsPriseController::class, 'restore']);




Route::get('/resultat_analyse_physique', [ResultatAnalysePhysiqueController::class, 'index']);
Route::post('/resultat_analyse_physique', [ResultatAnalysePhysiqueController::class, 'store']);
Route::post('/resultat_analyse_physique/{id}', [ResultatAnalysePhysiqueController::class, 'edit']);
Route::delete('/resultat_analyse_physique/{id}', [ResultatAnalysePhysiqueController::class, 'destroy']);
Route::patch('/resultat_analyse_physique/{id}', [ResultatAnalysePhysiqueController::class, 'restore']);




Route::get('/analyse_chmique', [AnalyseChimiqueController::class, 'index']);
Route::post('/analyse_chmique', [AnalyseChimiqueController::class, 'store']);
Route::post('/analyse_chmique/{id}', [AnalyseChimiqueController::class, 'edit']);
Route::delete('/analyse_chmique/{id}', [AnalyseChimiqueController::class, 'destroy']);
Route::patch('/analyse_chmique/{id}', [AnalyseChimiqueController::class, 'restore']);




Route::get('/xrf', [XrfController::class, 'index']);
Route::post('/xrf', [XrfController::class, 'store']);
Route::post('/xrf/{id}', [XrfController::class, 'edit']);
Route::delete('/xrf/{id}', [XrfController::class, 'destroy']);
Route::patch('/xrf/{id}', [XrfController::class, 'restore']);
