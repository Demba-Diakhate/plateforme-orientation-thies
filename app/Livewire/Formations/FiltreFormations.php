<?php

namespace App\Livewire\Formations;

use App\Models\Formation;
use Livewire\Component;

class FiltreFormations extends Component
{
    public $formations;


    public $search = '';

    public function render()
    {
        // return view('livewire.formations.filtre-formations', [
        //     'formations' => Formation::search($this->search)->get(),
        // ]);
        $this->formations = Formation::all();
        return view('livewire.formations.filtre-formations');
    }
}   
