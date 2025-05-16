<?php

use App\Http\Controllers\Admin\AnnuairController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.welcome');
});

/*Route redirection profil*/

Route::get('/profil', [HomeController::class, 'profil'])->name('profil.index');

/*Route admin */

Route::middleware(['auth', 'can:access-admin'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('index');

    Route::resource('/annuaires', AnnuairController::class);

    Route::resource('/users', UserController::class);


});