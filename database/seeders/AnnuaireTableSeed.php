<?php

namespace Database\Seeders;

use App\Models\Annuaire;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class AnnuaireTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $annuaires = [
            [
                'title' => 'Société Générale Sénégal',
                'description' => 'Banque internationale présente à Thiès.',
                'adresse' => 'Avenue Caen, Thiès',
                'logo' => 'https://societegenerale.sn/fileadmin/user_upload/logos/SGBS103_2025.svg',
                'site_web' => 'https://www.societegenerale.sn',
                'statut' => 'Entreprise',
                'secteur_activite' => 'Banque et Finance',
            ],
            [
                'title' => 'Sonatel Orange',
                'description' => 'Opérateur télécom majeur au Sénégal, agence de Thiès.',
                'adresse' => 'Boulevard du Général de Gaulle, Thiès',
                'logo' => 'https://www.orange.sn/sites/default/files/images/orange_logo.svg',
                'site_web' => 'https://www.orange.sn',
                'statut' => 'Entreprise',
                'secteur_activite' => 'Télécommunications',
            ],
            [
                'title' => 'ENSA Thiès',
                'description' => 'École Nationale Supérieure d\'Agriculture de Thiès.',
                'adresse' => 'Route de Dakar, Thiès',
                'logo' => '',
                'site_web' => 'https://www.ensa.sn',
                'statut' => 'Centre de formation',
                'secteur_activite' => 'Formation Agricole',
            ],
            [
                'title' => 'Université de Thiès',
                'description' => 'Université publique offrant plusieurs filières.',
                'adresse' => 'Route de Dakar, Thiès',
                'logo' => 'https://www.univ-thies.sn/images/banniere_300x74-01_1.png',
                'site_web' => 'https://www.univ-thies.sn',
                'statut' => 'Centre de formation',
                'secteur_activite' => 'Enseignement supérieur',
            ],
            [
                'title' => 'ONG Enda Energie',
                'description' => 'ONG active dans le développement durable à Thiès.',
                'adresse' => 'Quartier Grand Standing, Thiès',
                'logo' => '',
                'site_web' => 'https://www.endaenergie.org',
                'statut' => 'ONG',
                'secteur_activite' => 'Développement durable',
            ],
            [
                'title' => 'ONG La Lumière',
                'description' => 'ONG œuvrant pour l\'éducation et la santé à Thiès.',
                'adresse' => 'Quartier Nguinth, Thiès',
                'logo' => 'https://www.lalumiere.org/wp-content/uploads/2023/10/LaLu_Logo_Horiz_NAVY.jpg',
                'site_web' => 'https://www.lalumiere.org',
                'statut' => 'ONG',
                'secteur_activite' => 'Éducation et Santé',
            ],
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Annuaire::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        foreach ($annuaires as $annuaire) {
            Annuaire::create($annuaire);
        }
    }
}
