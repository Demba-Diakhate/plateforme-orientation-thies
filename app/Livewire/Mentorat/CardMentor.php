<?php

namespace App\Livewire\Mentorat;

use Livewire\Component;

class CardMentor extends Component
{
    public string $photo;
    public string $prenom;
    public string $nom;
    public string $specialite;
    public string $telephone;
    public string $email;
    public bool $disponible;

    public function render()
    {
        return view('livewire.mentorat.card-mentor');
    }
}
