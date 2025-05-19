<?php

namespace App\Http\Controllers\Entreprise;

use App\Models\Emploi;
use Illuminate\Http\Request;
use App\Models\ProfilEntreprise;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EmploieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entreprise = ProfilEntreprise::where('user_id', Auth::id())->firstOrFail();
        $emplois = Emploi::where('profil_entreprise_id', $entreprise->id)->latest()->paginate(20);
        return view('backoffice.entreprise.emplois.index', compact('emplois'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.entreprise.emplois.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $entreprise = ProfilEntreprise::where('user_id', Auth::id())->firstOrFail();

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'lieu' => 'nullable|string|max:255',
            'secteur_activite' => 'required|string|max:255',
            'type_contrat' => 'required|string|max:50',
            'niveau_experience' => 'nullable|string|max:100',
            'niveau_etude' => 'nullable|string|max:100',
            'date_debut' => 'nullable|date',
            'date_fin' => 'required|date',
            'fiche_poste' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'active' => 'boolean',
        ]);

        if ($request->hasFile('fiche_poste')) {
            $validated['fiche_poste'] = $request->file('fiche_poste')->store('fiches_poste', 'public');
        }

        $validated['profil_entreprise_id'] = $entreprise->id;

        Emploi::create($validated);

        return redirect()->route('entreprise.emplois.index')->with('success', 'Emploi créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Emploi $emploi)
    {
        $entreprise = ProfilEntreprise::where('user_id', Auth::id())->firstOrFail();
        if ($emploi->profil_entreprise_id !== $entreprise->id) {
            abort(403);
        }

        return view('backoffice.entreprise.emplois.show', compact('emploi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Emploi $emploi)
    {
        return view('backoffice.entreprise.emplois.edit', compact('emploi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Emploi $emploi)
    {

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'lieu' => 'nullable|string|max:255',
            'secteur_activite' => 'required|string|max:255',
            'type_contrat' => 'required|string|max:50',
            'niveau_experience' => 'nullable|string|max:100',
            'niveau_etude' => 'nullable|string|max:100',
            'date_debut' => 'nullable|date',
            'date_fin' => 'required|date',
            'fiche_poste' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'active' => 'boolean',
        ]);

        if ($request->hasFile('fiche_poste')) {
            $validated['fiche_poste'] = $request->file('fiche_poste')->store('fiches_poste', 'public');
        }

        $emploi->update($validated);

        return redirect()->route('entreprise.emplois.index')->with('success', 'Emploi modifié avec succès.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Emploi $emploi)
    {
        $emploi->delete();
        return redirect()->route('entreprise.emplois.index')->with('success', 'Emploi supprimé.');
    }
}
