<?php

use App\Http\Controllers\FormationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.welcome');
});

Route::get('/formations', [FormationController::class, ('index')]);
