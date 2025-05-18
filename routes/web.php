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


    Route::controller(\App\Http\Controllers\Admin\ServicesController::class)->prefix('services')->name('services.')->group(function () {
        Route::get('entreprises', 'entreprises')->name('entreprises');
        Route::get('coachs', 'coaches')->name('coaches');
        Route::get('freelances', 'freelances')->name('freelances');
        Route::get('ecoles', 'ecoles')->name('ecoles');
    });
    
});

Route::prefix('service')->name('service.')->controller(ProposerServiceController::class)->group(function () {
    Route::get('entreprise', 'createEntreprise')->name('entreprise.create');
    Route::get('ecole-formation', 'createEcoleFormation')->name('ecole_formation.create');
    Route::get('freelance', 'createFreelance')->name('freelance.create');
    Route::get('coach', 'createCoach')->name('coach.create');
});