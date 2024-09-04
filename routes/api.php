<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\PointEchantillonageController;
use App\Http\Controllers\AnalyseController;
use App\Http\Controllers\ProportionController;
use App\Http\Controllers\PhaseGachageController;
use App\Http\Controllers\PhaseTempsPriseController;
use App\Http\Controllers\ResulatPhysiqueLpeeController;
use App\Http\Controllers\ResultatAnalysePhysiqueController;
use App\Http\Controllers\AnalyseChimiqueController;
use App\Http\Controllers\XrfController;
use App\Http\Controllers\XrdController;
use App\Http\Controllers\LpeeController;
use App\Http\Controllers\PDFController;

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
Route::get('/role', [RoleController::class, 'index']);

Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
    Route::post('/logout', 'logout');
});

Route::get('/pdfs', [PDFController::class, 'index']);
Route::post('/pdfs', [PDFController::class, 'store']);
Route::delete('/pdfs/{id}', [PDFController::class, 'destroy']);


Route::controller(UserController::class)->group(function () {
    Route::get('/user', 'index');
    Route::post('/user', 'store');
    Route::post('/reset/{id}', 'reset');
    Route::post('/user/{id}', 'edit');
    Route::delete('/user/{id}', 'destroy');
});

Route::controller(MatiereController::class)->group(function () {

    Route::get('/matiere', 'index');
    Route::get('/matiere/{id}', 'matiereFilter');
    Route::get('/matiere/user/{id}', 'userMatiereFilter');
    Route::post('/matiere', 'store');
    Route::post('/matiere/{id}', 'edit');
    Route::delete('/matiere/{id}', 'destroy');
    Route::patch('/matiere/{id}', 'restore');

});





Route::controller(DestinationController::class)->group(function () {

    Route::get('/destination', 'index');
    Route::post('/destination', 'store');
    Route::post('/destination/{id}', 'edit');
    Route::delete('/destination/{id}', 'destroy');
    Route::patch('/destination/{id}', 'restore');

});



Route::controller(PointEchantillonageController::class)->group(function () {

    Route::get('/point_echantillonage', 'index');
    Route::post('/point_echantillonage', 'store');
    Route::post('/point_echantillonage/{id}', 'edit');
    Route::delete('/point_echantillonage/{id}', 'destroy');
    Route::patch('/point_echantillonage/{id}', 'restore');

});



Route::controller(AnalyseController::class)->group(function () {

    Route::get('/analyse', 'index');
    Route::post('/analyse', 'store');
    Route::post('/analyse/{id}', 'edit');
    Route::delete('/analyse/{id}', 'destroy');
    Route::patch('/analyse/{id}', 'restore');

});


Route::controller(ProportionController::class)->group(function () {

    Route::get('/proportion', 'index');
    Route::post('/proportion', 'store');
    Route::post('/proportion/{id}', 'edit');
    Route::delete('/proportion/{id}', 'destroy');
    Route::patch('/proportion/{id}', 'restore');

});


Route::controller(PhaseGachageController::class)->group(function () {

    Route::get('/phase_gachage', 'index');
    Route::post('/phase_gachage', 'store');
    Route::post('/phase_gachage/{id}', 'edit');
    Route::delete('/phase_gachage/{id}', 'destroy');
    Route::patch('/phase_gachage/{id}', 'restore');

});


Route::controller(PhaseTempsPriseController::class)->group(function () {

    Route::get('/phase_temps_prise', 'index');
    Route::post('/phase_temps_prise', 'store');
    Route::post('/phase_temps_prise/{id}', 'edit');
    Route::delete('/phase_temps_prise/{id}', 'destroy');
    Route::patch('/phase_temps_prise/{id}', 'restore');

});


Route::controller(LpeeController::class)->group(function () {

    Route::get('/lpee', 'index');
    Route::post('/lpee', 'store');
    Route::post('/lpee/{id}', 'edit');
    Route::delete('/lpee/{id}', 'destroy');
    Route::patch('/lpee/{id}', 'restore');

});


Route::controller(ResulatPhysiqueLpeeController::class)->group(function () {

    Route::get('/resultat_physique_lpee', 'index');
    Route::post('/resultat_physique_lpee', 'store');
    Route::post('/resultat_physique_lpee/{id}', 'edit');
    Route::delete('/resultat_physique_lpee/{id}', 'destroy');
    Route::patch('/resultat_physique_lpee/{id}', 'restore');

});

Route::controller(ResultatAnalysePhysiqueController::class)->group(function () {

    Route::get('/resultat_analyse_physique', 'index');
    Route::post('/resultat_analyse_physique', 'store');
    Route::post('/resultat_analyse_physique/{id}', 'edit');
    Route::delete('/resultat_analyse_physique/{id}', 'destroy');
    Route::patch('/resultat_analyse_physique/{id}', 'restore');

});


Route::controller(AnalyseChimiqueController::class)->group(function () {

    Route::get('/analyse_chimique', 'index');
    Route::post('/analyse_chimique', 'store');
    Route::post('/analyse_chimique/{id}', 'edit');
    Route::delete('/analyse_chimique/{id}', 'destroy');
    Route::patch('/analyse_chimique/{id}', 'restore');

});


Route::controller(XrfController::class)->group(function () {

    Route::get('/xrf', 'index');
    Route::post('/xrf', 'store');
    Route::post('/xrf/{id}', 'edit');
    Route::delete('/xrf/{id}', 'destroy');
    Route::patch('/xrf/{id}', 'restore');

});


Route::controller(XrdController::class)->group(function () {

    Route::get('/xrd', 'index');
    Route::post('/xrd', 'store');
    Route::post('/xrd/{id}', 'edit');
    Route::delete('/xrd/{id}', 'destroy');
    Route::patch('/xrd/{id}', 'restore');

});




// ->middleware('can:user')