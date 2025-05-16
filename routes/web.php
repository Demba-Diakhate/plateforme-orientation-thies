<?php

use App\Http\Controllers\Admin\AnnuairController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


/*Route admin */

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('index');

    Route::resource('/annuaires', AnnuairController::class);

    Route::resource('/users', UserController::class);


});