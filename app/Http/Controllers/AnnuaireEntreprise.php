<?php

namespace App\Http\Controllers;

use App\Models\Annuaire;
use Illuminate\Http\Request;

class AnnuaireEntreprise extends Controller
{
     public function index(Request $request)
    {
         $query = $request->input('query');
        $secteur = $request->input('secteur');
        $statut = $request->input('statut');

    // $entreprises = Annuaire::query();
    $entreprises = Annuaire::where('statut', 'Entreprise');


    if ($query) {
        $entreprises->where('title', 'like', "%{$query}%");
    }

    if ($secteur) {
        $entreprises->where('secteur_activite', $secteur);
    }


    $entreprises = $entreprises->paginate(10);


         // Récupérer les secteurs d'activité UNIQUEMENT pour les Entreprises
    $secteursDisponibles = Annuaire::where('statut', 'Entreprise')
        ->select('secteur_activite')
        ->distinct()
        ->pluck('secteur_activite');

    return view('frontend.annuaireEntreprise', compact('entreprises', 'secteursDisponibles'));
    }
}
