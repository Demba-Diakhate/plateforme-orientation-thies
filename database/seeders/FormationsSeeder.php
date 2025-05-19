<?php

namespace Database\Seeders;

use App\Models\Formation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $formations = [
            [
                'title' => 'Formation en agriculture',
                'description' => "L'outillage de base généralement utilisé par les petits agriculteurs consiste en une machette, une houe, une dérapine (pioche de taille moyenne), et une pelle.",
                'image' => '/assets/images/gallery/22.png',
                'lien' => '/formation/formation_en_agriculture',
                'type'=> 'Agriculture',
                'autre_fichier' => '',
                'date_fin' => '22/12/2025',
            ],
            [
                'title' => 'Formation en couture',
                'description' => "les petits agriculteurs l'outillage de base généralement utilisé par consiste en une machette, une houe, une dérapine (pioche de taille moyenne), et une pelle.",
                'image' => '/assets/images/gallery/26.png',
                'lien' => '/formation/formation_en_couture',
                'type'=> 'Agriculture',
                'autre_fichier' => '',
                'date_fin' => '01/08/2025',
            ],
            [
                'title' => 'Formation en informatique',
                'description' => "utilisé par les petits agriculteurs consiste en une machette, une houe, une dérapine (pioche de taille moyenne), et une pelle.",
                'image' => '/assets/images/gallery/23.png',
                'lien' => '/formation/formation_en_informatique',
                'type'=> 'Agriculture',
                'autre_fichier' => '',
                'date_fin' => '10/02/2025',
            ],
            [
                'title' => 'Formation en informatique',
                'description' => "utilisé par les petits agriculteurs consiste en une machette, une houe, une dérapine (pioche de taille moyenne), et une pelle.",
                'image' => '/assets/images/gallery/23.png',
                'lien' => '/formation/formation_en_agriculture',
                'type'=> 'Agriculture',
                'autre_fichier' => '',
                'date_fin' => '04/01/2025',
            ],
            [
                'title' => 'Formation en informatique',
                'description' => "utilisé par les petits agriculteurs consiste en une machette, une houe, une dérapine (pioche de taille moyenne), et une pelle.",
                'image' => '/assets/images/gallery/23.png',
                'lien' => '/formation/formation_en_agriculture',
                'type'=> 'Agriculture',
                'autre_fichier' => '',
                'date_fin' => '30/09/2025',
            ],
        ];

        foreach($formations as $formation) {
            Formation::create($formation);
        };
    }
}
