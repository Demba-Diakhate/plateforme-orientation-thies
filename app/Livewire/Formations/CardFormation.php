<?php

namespace App\Livewire\Formations;

use Livewire\Component;

class CardFormation extends Component
{

    
    public string $id;
    public string $title;
    public string $description;
    public string $image;
    public string $date_fin;
    public string $autre_fichier;
    public string $lien;
    public string $type;


    public function render()
    {
        return view('livewire.formations.card-formation');
    }
}
