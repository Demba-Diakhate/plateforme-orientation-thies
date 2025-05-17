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

     public function storeCoach(Request $request)
     {
          $request->validate([
               'prenom' => 'required|string|max:100',
               'nom' => 'required|string|max:100',
               'email' => 'required|email|unique:profil_coaches,email',
               'telephone' => 'nullable|string|max:30',
               'adresse' => 'nullable|string',
               'date_naissance' => 'nullable|date',
               'sexe' => 'nullable|in:Homme,Femme,Autre',
               'photo' => 'nullable|image|max:2048',
               'specialite' => 'nullable|string|max:100',
               'biographie' => 'nullable|string',
               'linkedin' => 'nullable|url',
               'site_web' => 'nullable|url',
          ]);

          $data = $request->all();
          $data['user_id'] = Auth::user()->id;

          if ($request->hasFile('photo')) {
               $data['photo'] = $request->file('photo')->store('photos', 'public');
          }

          ProfilCoach::create($data);

          return redirect()->route('frontend.accueil')->with('success', 'Inscription coach réussie !');
     }


     public function createEntreprise()
     {
          return view('frontend.inscription.entreprise');
     }

     

}
