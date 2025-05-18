<?php

namespace App\Livewire\Inscription;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ProfilEcoleFormation;
use Illuminate\Support\Facades\Auth;

class EcoleFormation extends Component
{
    use WithFileUploads;

    public $nom_ecole, $email, $telephone, $site_web, $adresse, $ville, $pays = 'Sénégal', $description, $logo;


    protected $rules = [
        'nom_ecole' => 'required|string|max:255',
        'email' => 'nullable|email',
        'telephone' => 'nullable|string|max:30',
        'site_web' => 'nullable|url',
        'adresse' => 'nullable|string|max:255',
        'ville' => 'nullable|string|max:100',
        'pays' => 'nullable|string|max:100',
        'description' => 'nullable|string',
        'logo' => 'nullable|image|max:2048',
    ];

    public function submit()
    {
        $this->validate();

        $data = [
            'nom_ecole' => $this->nom_ecole,
            'email' => $this->email,
            'telephone' => $this->telephone,
            'site_web' => $this->site_web,
            'adresse' => $this->adresse,
            'ville' => $this->ville,
            'pays' => $this->pays,
            'description' => $this->description,
            'user_id' => Auth::user()->id,
        ];

        if ($this->logo) {
            $data['logo'] = $this->logo->store('logos', 'public');
        }

        ProfilEcoleFormation::create($data);

        $this->dispatch('swal:success', [
            'title' => 'Succès',
            'text' => 'Inscription école de formation réussie !',
            'icon' => 'success'
        ]);

        $this->reset();
    }



    public function render()
    {
        return view('livewire.inscription.ecole-formation');
    }
}
