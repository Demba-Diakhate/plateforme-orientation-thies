<?php

namespace App\Livewire\Formations;

use Livewire\Component;

class CardFormation extends Component
{

    public string $dataCard;
    public string $id;
    public string $name;
    public string $link;
    public string $description;
    public string $image;
    public string $dateFin;
    public string $type;


    public function render()
    {
        return view('livewire.formations.card-formation');
    }
}
