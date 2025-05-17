<?php

namespace App\Livewire\Inscription;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ProfilFreelance;
use Illuminate\Support\Facades\Auth;

class Freelance extends Component
{
    use WithFileUploads;

    public $prenom, $nom, $email, $telephone, $adresse, $date_naissance, $sexe, $photo, $biographie, $metier, $portfolio, $linkedin, $github, $site_web, $tjm;

    protected $rules = [
        'prenom' => 'required|string|max:100',
        'nom' => 'required|string|max:100',
        'email' => 'required|email|unique:profil_freelances,email',
        'telephone' => 'nullable|string|max:30',
        'adresse' => 'nullable|string',
        'date_naissance' => 'nullable|date',
        'sexe' => 'nullable|in:Homme,Femme,Autre',
        'photo' => 'nullable|image|max:2048',
        'biographie' => 'nullable|string',
        'metier' => 'nullable|string|max:100',
        'portfolio' => 'nullable|string',
        'linkedin' => 'nullable|url',
        'github' => 'nullable|url',
        'site_web' => 'nullable|url',
        'tjm' => 'nullable|numeric',
    ];

    public function submit()
    {
        $this->validate();

        $data = $this->only([
            'prenom',
            'nom',
            'email',
            'telephone',
            'adresse',
            'date_naissance',
            'sexe',
            'biographie',
            'metier',
            'portfolio',
            'linkedin',
            'github',
            'site_web',
            'tjm'
        ]);
        $data['user_id'] = Auth::user()->id;

        if ($this->photo) {
            $data['photo'] = $this->photo->store('photos', 'public');
        }

        ProfilFreelance::create($data);

        $this->dispatch('swal:success', [
            'title' => 'Succès',
            'text' => 'Inscription freelance réussie !',
            'icon' => 'success'
        ]);

        $this->reset();
    }
    
    public function render()
    {
        return view('livewire.inscription.freelance');
    }
}
