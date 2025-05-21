<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function acceuil() {
    return view('frontend.welcome');
}
}
