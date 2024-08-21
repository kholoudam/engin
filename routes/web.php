<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EnginController;
use App\Http\Controllers\EnginsController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\DemandeurController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssistantController;
use App\Http\Controllers\TechnicienController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EnginsAssistanteController;
use App\Http\Controllers\AffectationController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ConfirmerController;
use App\Http\Controllers\EntreController;
use App\Http\Controllers\ReparationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('welcome');});
//authentification
Route::get('/login', [LoginController::class,'show'])->name('login.show');
Route::post('/login', [LoginController::class,'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
//profile
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show')->middleware('auth');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');
//partie admin
Route::resource('admin', AdminController::class);
Route::resource('GestionEngins', EnginsController::class);
Route::resource('Utilisateurs', UtilisateurController::class);
//partie demandeur
Route::middleware(['auth'])->group(function () {
    Route::resource('demandeur', DemandeurController::class);
    Route::resource('engins', EnginController::class);
    Route::resource('demandes', DemandeController::class);
});
//partie assistante technique
Route::resource('assistant', AssistantController::class);
Route::resource('engin', EnginsAssistanteController::class);
Route::resource('panne', DetailController::class);
Route::resource('entre', EntreController::class);
Route::get('affectation', [AffectationController::class, 'index'])->name('affectation.index');
Route::get('affectation/create/{demande_id}', [AffectationController::class, 'create'])->name('affectation.create');
Route::post('affectation', [AffectationController::class, 'store'])->name('affectation.store');
Route::get('/affectation/{id}', [AffectationController::class, 'show'])->name('affectation.show');
Route::get('sortie', [ConfirmerController::class, 'index'])->name('sortie.index');
Route::get('sortie/confirmer/{id}', [ConfirmerController::class, 'create'])->name('sortie.create');
Route::post('sortie', [ConfirmerController::class, 'store'])->name('sortie.store');
//partie technicien
Route::resource('technicien', TechnicienController::class);
// Route::resource('Reparation_panne', ReparationController::class);
Route::get('/Reparation_panne', [ReparationController::class, 'index'])->name('Reparation_panne.index');
Route::get('/Reparation_panne/create/{id}', [ReparationController::class, 'create'])->name('Reparation_panne.create');
Route::post('/Reparation_panne/{id}', [ReparationController::class, 'store'])->name('Reparation_panne.store');
Route::get('/Reparation_panne/{id}', [ReparationController::class, 'show'])->name('Reparation_panne.show');