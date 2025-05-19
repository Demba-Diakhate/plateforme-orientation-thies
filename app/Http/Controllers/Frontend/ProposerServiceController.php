<?php

namespace App\Http\Controllers\Frontend;

use App\Models\ProfilCoach;
use Illuminate\Http\Request;
use App\Models\ProfilFreelance;
use App\Models\ProfilEntreprise;
use App\Http\Controllers\Controller;
use App\Models\ProfilEcoleFormation;
use Illuminate\Support\Facades\Auth;

class ProposerServiceController extends Controller
{

     public function createEcoleFormation()
     {
          return view('frontend.inscription.ecole_formation');
     }



     public function createFreelance()
     {
          return view('frontend.inscription.freelance');
     }



     public function createCoach()
     {
          return view('frontend.inscription.coach');
     }


     public function createEntreprise()
     {
          return view('frontend.inscription.entreprise');
     }

     

}
