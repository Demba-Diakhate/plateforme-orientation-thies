<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AnnuaireController;
use App\Http\Controllers\Admin\DashboardController;

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