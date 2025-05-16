<?php

namespace App\Livewire;

use Livewire\Component;

class CardFormation extends Component
{
    public string $title;
    public string $description;
    public string $image;
    public string $date;
    public array $tags = [];
    public string $link;
    
    public function render()
    {
        return view('livewire.card-formation');
    }
}
