<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProfilEntreprise;
use App\Models\ProfilCoach;
use App\Models\ProfilFreelance;
use App\Models\ProfilEcoleFormation;

class ServicesController extends Controller
{
    public function entreprises()
    {
        $entreprises = ProfilEntreprise::latest()->paginate(20);
        return view('backoffice.admin.services.entreprises', compact('entreprises'));
    }

    public function coaches()
    {
        $coaches = ProfilCoach::latest()->paginate(20);
        return view('backoffice.admin.services.coaches', compact('coaches'));
    }

    public function freelances()
    {
        $freelances = ProfilFreelance::latest()->paginate(20);
        return view('backoffice.admin.services.freelances', compact('freelances'));
    }

    public function ecoles()
    {
        $ecoles = ProfilEcoleFormation::latest()->paginate(20);
        return view('backoffice.admin.services.ecoles', compact('ecoles'));
    }
}
