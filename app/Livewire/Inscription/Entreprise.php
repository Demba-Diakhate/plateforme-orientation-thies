<?php

namespace App\Livewire\Inscription;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ProfilEntreprise;
use Illuminate\Support\Facades\Auth;

class Entreprise extends Component
{
    use WithFileUploads;

    public $nom, $email, $telephone, $site_web, $logo, $description, $secteur_activite, $adresse, $ville, $pays, $taille, $responsable, $linkedin;


    protected $rules = [
        'nom' => 'required|string|max:255',
        'email' => 'required|email|unique:profil_entreprises,email',
        'telephone' => 'nullable|string|max:30',
        'site_web' => 'nullable|url',
        'logo' => 'nullable|image|max:2048',
        'description' => 'nullable|string',
        'secteur_activite' => 'nullable|string|max:255',
        'adresse' => 'nullable|string|max:255',
        'ville' => 'nullable|string|max:100',
        'pays' => 'nullable|string|max:100',
        'taille' => 'nullable|integer',
        'responsable' => 'nullable|string|max:255',
        'linkedin' => 'nullable|url',
    ];

    public function submit()
    {
        $this->validate();

        $data = $this->only([
            'nom',
            'email',
            'telephone',
            'site_web',
            'description',
            'secteur_activite',
            'adresse',
            'ville',
            'pays',
            'taille',
            'responsable',
            'linkedin'
        ]);
        $data['user_id'] = Auth::user()->id;

        if ($this->logo) {
            $data['logo'] = $this->logo->store('logos', 'public');
        }

        ProfilEntreprise::create($data);

        $this->dispatch('swal:success', [
            'title' => 'Succès',
            'text' => 'Inscription entreprise réussie !',
            'icon' => 'success'
        ]);

        $this->reset();
    }


    public function render()
    {
        return view('livewire.inscription.entreprise');
    }
}
