<?php

namespace Database\Seeders;

use App\Models\Formation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ecoleId = \App\Models\ProfilEcoleFormation::first()?->id ?? 1;

        Formation::create([
            'title' => 'Formation Développement Web',
            'description' => 'Apprenez les bases du développement web (HTML, CSS, JS, PHP).',
            'image' => 'formations/web.jpg',
            'date_fin' => now()->addMonths(2),
            'autre_fichier' => 'formations/ressources.pdf',
            'lien' => 'https://exemple.com/formation-web',
            'type' => 'Présentiel',
            'profil_ecole_formation_id' => $ecoleId,
        ]);

        Formation::create([
            'title' => 'Initiation à l\'agriculture urbaine',
            'description' => 'Découvrir les techniques d’agriculture urbaine et durable.',
            'image' => 'formations/agri.jpg',
            'date_fin' => now()->addMonth(),
            'autre_fichier' => 'formations/guide_agri.pdf',
            'lien' => 'https://exemple.com/agriculture-urbaine',
            'type' => 'En ligne',
            'profil_ecole_formation_id' => $ecoleId,
        ]);
    }
}
