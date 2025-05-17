<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function profil(){
        $user = Auth::user();

        if ($user->roles->contains('name', 'Administrateur')) {
            return redirect()->route('admin.index');
        } elseif ($user->roles->contains('name', 'Entreprise')) {
            dd('entreprise');
            // return redirect()->route('entreprise.dashboard');
        } elseif ($user->roles->contains('name', 'Coach')) {
            // return redirect()->route('coach.dashboard');
            dd('coach');
        } elseif ($user->roles->contains('name', 'Freelance')) {
            // return redirect()->route('freelance.dashboard');
            dd('freelance');
        } elseif ($user->roles->contains('name', 'École de formation')) {
            // return redirect()->route('ecole.dashboard');
            dd('ecole formation');
        } else {
            // return redirect()->route('profil.index');
            dd('ecole formation');
        }
    }
}
