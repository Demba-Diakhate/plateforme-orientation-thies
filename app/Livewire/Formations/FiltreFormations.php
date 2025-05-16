<?php

namespace App\Livewire\Formations;

use App\Models\Formation;
use Livewire\Component;

class FiltreFormations extends Component
{
    public $datasCards = [
        [
            'id' => 'donne1',
            'name' => 'Formation en agriculture',
            'description' => "L'outillage de base généralement utilisé par les petits agriculteurs consiste en une machette, une houe, une dérapine (pioche de taille moyenne), et une pelle.",
            'image' => '/assets/images/gallery/22.png',
            'link' => '/formation/formation_en_agriculture',
            'date_fin' => '22/12/2025',
        ],
        [
            'id' => 'donne2',
            'name' => 'Formation en couture',
            'description' => "les petits agriculteurs l'outillage de base généralement utilisé par consiste en une machette, une houe, une dérapine (pioche de taille moyenne), et une pelle.",
            'image' => '/assets/images/gallery/26.png',
            'link' => '/formation/formation_en_couture',
            'date_fin' => '01/08/2025',
        ],
        [
            'id' => 'donne3',
            'name' => 'Formation en informatique',
            'description' => "utilisé par les petits agriculteurs consiste en une machette, une houe, une dérapine (pioche de taille moyenne), et une pelle.",
            'image' => '/assets/images/gallery/23.png',
            'link' => '/formation/formation_en_informatique',
            'date_fin' => '10/02/2025',
        ],
        [
            'id' => 'donne3',
            'name' => 'Formation en informatique',
            'description' => "utilisé par les petits agriculteurs consiste en une machette, une houe, une dérapine (pioche de taille moyenne), et une pelle.",
            'image' => '/assets/images/gallery/23.png',
            'link' => '/formation/formation_en_agriculture',
            'date_fin' => '04/01/2025',
        ],
        [
            'id' => 'donne3',
            'name' => 'Formation en informatique',
            'description' => "utilisé par les petits agriculteurs consiste en une machette, une houe, une dérapine (pioche de taille moyenne), et une pelle.",
            'image' => '/assets/images/gallery/23.png',
            'link' => '/formation/formation_en_agriculture',
            'date_fin' => '30/09/2025',
        ],
    ];


    public $search = '';

    public function render()
    {
        // return view('livewire.formations.filtre-formations', [
        //     'formations' => Formation::search($this->search)->get(),
        // ]);
        return view('livewire.formations.filtre-formations');
    }
}   
