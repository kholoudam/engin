<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemandeurController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TechnicienController;
use App\Http\Controllers\AssistantController;

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
//index demandeure
Route::get('/demandes/sum', [DemandeurController::class, 'getSumDemandes']);
Route::get('/demandes/latest', [DemandeurController::class, 'getLatestDemandes']);
//index admin
Route::get('/sum-utilisateurs', [AdminController::class, 'getSumUtilisateur']);
Route::get('/sum-engins', [AdminController::class, 'getSumEngin']);
//index technicien
Route::get('/sum-pannes', [TechnicienController::class, 'getSumPannes']);
//index Assistant
Route::get('/sum-pannes', [AssistantController::class, 'getSumPannes']);
Route::get('/sum-engins', [AssistantController::class, 'getSumEngin']);
Route::get('/sum-affectations', [AssistantController::class, 'getSumAffectation']);
Route::get('/latestA', [AssistantController::class, 'getLatestAffectations']);
Route::get('/latestP', [AssistantController::class, 'getLatestPannes']);