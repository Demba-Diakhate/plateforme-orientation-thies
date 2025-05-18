<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Annuaire;

class AnnuaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $annuaires = Annuaire::all();
        return view('backoffice.admin.annuaires.index', compact('annuaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $statuts = ['Entreprise', 'Centre de formation', 'ONG', 'Autre'];
        return view('backoffice.admin.annuaires.create', compact('statuts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'adresse' => 'required|string|max:255',
            'logo' => 'nullable|image|max:2048',
            'site_web' => 'nullable|url',
            'statut' => 'required|string',
            'secteur_activite' => 'required|string|max:255',
        ]);

        $data = $request->all();

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Annuaire::create($data);

        return redirect()->route('admin.annuaires.index')->with('success', 'Annuaire ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $annuaire = Annuaire::findOrFail($id);
        return view('backoffice.admin.annuaires.show', compact('annuaire'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $annuaire = Annuaire::findOrFail($id);
        $statuts = ['Entreprise', 'Centre de formation', 'ONG', 'Autre'];
        return view('backoffice.admin.annuaires.edit', compact('annuaire', 'statuts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $annuaire = Annuaire::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'adresse' => 'required|string|max:255',
            'logo' => 'nullable|image|max:2048',
            'site_web' => 'nullable|url',
            'statut' => 'required|string',
            'secteur_activite' => 'required|string|max:255',
        ]);

        $data = $request->all();

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        } else {
            unset($data['logo']);
        }

        $annuaire->update($data);

        return redirect()->route('admin.annuaires.index')->with('success', 'Annuaire modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $annuaire = Annuaire::findOrFail($id);
        $annuaire->delete();

        return redirect()->route('admin.annuaires.index')->with('success', 'Annuaire supprimé avec succès.');
    }
}
