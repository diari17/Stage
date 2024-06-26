<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ConnexionController;

Route::get('/', function () {
    return view('welcome');
})->name('accueil'); // Nommer la route d'accueil

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/inscription', [InscriptionController::class, 'showInscriptionForm'])->name('inscription'); // Nommer la route d'inscription

Route::post('/traitement_inscription', [InscriptionController::class, 'traiterInscription'])->name('traitement_inscription');

Route::get('/connexion', function () {
    return view('connexion');
})->name('connexion');

Route::post('/connexion', [ConnexionController::class, 'traiterConnexion'])->name('traitement_connexion');
