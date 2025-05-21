<?php

namespace App\Http\Controllers;

use App\Models\Annuaire;
use Illuminate\Http\Request;

class AnnuaireONGController extends Controller
{
    public function index(Request $request)
    {
         $query = $request->input('query');
        $secteur = $request->input('secteur');
        $statut = $request->input('statut');

    // $entreprises = Annuaire::query();
    $entreprises = Annuaire::where('statut', 'ONG');


    if ($query) {
        $entreprises->where('title', 'like', "%{$query}%");
    }

    if ($secteur) {
        $entreprises->where('secteur_activite', $secteur);
    }


    $entreprises = $entreprises->paginate(10);


         // Récupérer les secteurs d'activité UNIQUEMENT pour les ONG
    $secteursDisponibles = Annuaire::where('statut', 'ONG')
        ->select('secteur_activite')
        ->distinct()
        ->pluck('secteur_activite');

    return view('frontend.annuaireONG', compact('entreprises', 'secteursDisponibles'));
    }
}
