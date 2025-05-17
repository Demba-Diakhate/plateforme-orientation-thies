<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AnnuaireController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\ProposerServiceController;

Route::get('/', function () {
    return view('frontend.welcome');
});

/*Route redirection profil*/

Route::get('/profil', [HomeController::class, 'profil'])->name('profil.index');

/*Route admin */

Route::middleware(['auth', 'can:access-admin'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('index');

    Route::resource('/annuaires', AnnuaireController::class);

    Route::resource('/users', UserController::class);
});

Route::prefix('service')->name('service.')->controller(ProposerServiceController::class)->group(function () {

    Route::get('entreprise', 'createEntreprise')->name('entreprise.create');
    Route::post('entreprise', 'storeEntreprise')->name('entreprise.store');

    Route::get('ecole-formation', 'createEcoleFormation')->name('ecole_formation.create');

    Route::get('freelance', 'createFreelance')->name('freelance.create');
    Route::post('freelance', 'storeFreelance')->name('freelance.store');

    Route::get('coach', 'createCoach')->name('coach.create');
    Route::post('coach', 'storeCoach')->name('coach.store');
});