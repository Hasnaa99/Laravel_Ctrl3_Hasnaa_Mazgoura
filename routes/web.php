<?php

use App\Http\Controllers\AuteurController;
use App\Http\Controllers\FormateurController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StagiaireController;
use App\Http\Controllers\VoitureController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/acceuil', function (Request $request) {
        $request->session()->put('user',Auth::user()->name);
        $name=$request->session()->get('user');
        return view('acceuil',compact('name'));
})->middleware(['auth', 'verified'])->name('acceuil');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//stagiaire
Route::resource('stagiaires',StagiaireController::class)->middleware('auth');
Route::resource('formateurs',FormateurController::class);
Route::resource('livres',LivreController::class);

//Voiture
Route::middleware('auth')->group(function(){
    Route::get('/voitures', [VoitureController::class, 'index'])->name('voitures.index');
    Route::get('/voitures/create', [VoitureController::class, 'create'])->name('voitures.create');
    Route::post('/voitures', [VoitureController::class, 'store'])->name('voitures.store');
    Route::get('/voitures/{voiture}', [VoitureController::class, 'show'])->name('voitures.show');
    Route::get('/voitures/{voiture}/edit', [VoitureController::class, 'edit'])->name('voitures.edit');
    Route::put('/voitures/{voiture}', [VoitureController::class, 'update'])->name('voitures.update');
    Route::delete('/voitures/{voiture}', [VoitureController::class, 'destroy'])->name('voitures.destroy');
});

//Demande email
Route::get('/attestation', [VoitureController::class, 'formDemande'])->name('demandeAttestaion');
Route::post('/sendAttestation', [VoitureController::class, 'sendEmail'])->name('attestation');

//auteur

Route::get('/auteurs', [AuteurController::class, 'index'])->name('auteurs.index');
Route::get('/auteurs/create', [AuteurController::class, 'create'])->name('auteurs.create');
Route::post('/auteurs', [AuteurController::class, 'store'])->name('auteurs.store');
Route::get('/auteurs/{auteur}', [AuteurController::class, 'show'])->name('auteurs.show');
Route::get('/auteurs/{auteur}/edit', [AuteurController::class, 'edit'])->name('auteurs.edit');
Route::put('/auteurs/{auteur}', [AuteurController::class, 'update'])->name('auteurs.update');
Route::delete('/auteurs/{auteur}', [AuteurController::class, 'destroy'])->name('auteurs.destroy');

//event

Route::get('/createEvenet',[AuteurController::class,'createEvent'])->name('createEvent');
Route::post('/sendNotificationEvent',[AuteurController::class,'storeEvent'])->name('sendNotifEvent');
require __DIR__.'/auth.php';
