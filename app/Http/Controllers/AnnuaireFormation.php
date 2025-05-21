<?php

namespace App\Http\Controllers;

use App\Models\Annuaire;
use Illuminate\Http\Request;

class AnnuaireFormation extends Controller
{
     public function index(Request $request)
    {
         $query = $request->input('query');
        $secteur = $request->input('secteur');
        $statut = $request->input('statut');

    // $entreprises = Annuaire::query();
    $entreprises = Annuaire::where('statut', 'Centre de formation');


    if ($query) {
        $entreprises->where('title', 'like', "%{$query}%");
    }

    if ($secteur) {
        $entreprises->where('secteur_activite', $secteur);
    }


    $entreprises = $entreprises->paginate(10);


         // Récupérer les secteurs d'activité UNIQUEMENT pour les Centre de formation
    $secteursDisponibles = Annuaire::where('statut', 'Centre de formation')
        ->select('secteur_activite')
        ->distinct()
        ->pluck('secteur_activite');

    return view('frontend.annuaireFormation', compact('entreprises', 'secteursDisponibles'));
    }
}
