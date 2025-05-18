<?php

namespace App\Livewire\Inscription;

use Livewire\Component;
use App\Models\ProfilCoach;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Coach extends Component
{

    use WithFileUploads;

    public $prenom, $nom, $email, $telephone, $adresse, $date_naissance, $sexe, $photo, $specialite, $biographie, $linkedin, $site_web;


    protected $rules = [
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
            'specialite',
            'biographie',
            'linkedin',
            'site_web'
        ]);
        $data['user_id'] = Auth::user()->id;

        if ($this->photo) {
            $data['photo'] = $this->photo->store('photos', 'public');
        }

        ProfilCoach::create($data);

        $this->dispatch('swal:success', [
            'title' => 'Succès',
            'text' => 'Inscription coach réussie !',
            'icon' => 'success'
        ]);

        $this->reset();
    }
    
    public function render()
    {
        return view('livewire.inscription.coach');
    }
}
