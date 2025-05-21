<?php
use App\Http\Controllers\Admin\AnnuairController;
use App\Http\Controllers\MentoratController;
use App\Http\Controllers\WelcomeController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AnnuaireController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AnnuaireController as ControllersAnnuaireController;
use App\Http\Controllers\AnnuaireEntreprise;
use App\Http\Controllers\AnnuaireFormation;
use App\Http\Controllers\AnnuaireONGController;
use App\Http\Controllers\Frontend\ProposerServiceController;
use GuzzleHttp\Middleware;

// Route page d'acceuil
Route::get('/', [WelcomeController::class, 'acceuil'])->name('acceuil');
Route::get('/acceuil', [WelcomeController::class, 'acceuil'])->name('acceuil');

// Route page mentorat
Route::get('/mentorat', [MentoratController::class, 'mentorat'])->name('mentorat');

// Route page annuaire ONG
Route::get('/annuaire-ong', [AnnuaireONGController::class, 'index'])->name('annuaire-ong');

// Route page annuaire Entreprise
Route::get('/annuaire-entreprise', [AnnuaireEntreprise::class, 'index'])->name('annuaire-entreprise');

// Route page annuaire Centre de formation
Route::get('/annuaire-formation', [AnnuaireFormation::class, 'index'])->name('annuaire-formation');

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

/**
 * Routes pour services pages (frontend)
 */

Route::middleware(['auth'])->prefix('service')->name('service.')->controller(ProposerServiceController::class)->group(function () {
    Route::get('entreprise', 'createEntreprise')->name('entreprise.create');
    Route::get('ecole-formation', 'createEcoleFormation')->name('ecole_formation.create');
    Route::get('freelance', 'createFreelance')->name('freelance.create');
    Route::get('coach', 'createCoach')->name('coach.create');
});



/**
 * Route pour l'panel entreprise
 */

Route::prefix('entreprise')->name('entreprise.')->middleware(['auth'])->group(function () {
    Route::resource('emplois', \App\Http\Controllers\Entreprise\EmploieController::class);
});
