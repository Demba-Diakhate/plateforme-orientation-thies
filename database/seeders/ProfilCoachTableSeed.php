<?php

namespace Database\Seeders;

use App\Models\ProfilCoach;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilCoachTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $Coaches = [
    [
        'prenom' => 'Aminata',
        'nom' => 'Diallo',
        'specialite' => 'Technicienne en transformation agroalimentaire',
        'photo' => 'https://www.gmevents.ae/wp-content/uploads/2019/04/female-placeholder.jpg',
        'telephone' => '+221 70 100 00 01',
        'email' => 'aminata.diallo@example.com',
        'disponible' => true,
    ],
    [
        'prenom' => 'Mamadou',
        'nom' => 'Ba',
        'specialite' => 'Ingénieur IA',
        'photo' => 'https://s3.eu-central-1.amazonaws.com/uploads.mangoweb.org/shared-prod/visegradfund.org/uploads/2021/08/placeholder-male.jpg',
        'telephone' => '+221 70 100 00 02',
        'email' => 'mamadou.ba@example.com',
        'disponible' => true,
    ],
    [
        'prenom' => 'Fatou',
        'nom' => 'Ndiaye',
        'specialite' => 'Conseillère en agriculture biologique',
        'photo' => 'https://www.gmevents.ae/wp-content/uploads/2019/04/female-placeholder.jpg',
        'telephone' => '+221 70 100 00 03',
        'email' => 'fatou.ndiaye@example.com',
        'disponible' => false,
    ],
    [
        'prenom' => 'Ibrahima',
        'nom' => 'Sow',
        'specialite' => 'Ingénieur en machinisme agricole',
        'photo' => 'https://s3.eu-central-1.amazonaws.com/uploads.mangoweb.org/shared-prod/visegradfund.org/uploads/2021/08/placeholder-male.jpg',
        'telephone' => '+221 70 100 00 04',
        'email' => 'ibrahima.sow@example.com',
        'disponible' => true,
    ],
    [
        'prenom' => 'Mariama',
        'nom' => 'Diop',
        'specialite' => 'Formatrice en techniques d’irrigation',
        'photo' => 'https://www.gmevents.ae/wp-content/uploads/2019/04/female-placeholder.jpg',
        'telephone' => '+221 70 100 00 05',
        'email' => 'mariama.diop@example.com',
        'disponible' => true,
    ],
    [
        'prenom' => 'Cheikh',
        'nom' => 'Fall',
        'specialite' => 'Analyste Financier',
        'photo' => 'https://s3.eu-central-1.amazonaws.com/uploads.mangoweb.org/shared-prod/visegradfund.org/uploads/2021/08/placeholder-male.jpg',
        'telephone' => '+221 70 100 00 06',
        'email' => 'cheikh.fall@example.com',
        'disponible' => false,
    ],
    [
        'prenom' => 'Aissatou',
        'nom' => 'Sy',
        'specialite' => 'Coach en Entrepreneuriat',
        'photo' => 'https://www.gmevents.ae/wp-content/uploads/2019/04/female-placeholder.jpg',
        'telephone' => '+221 70 100 00 07',
        'email' => 'aissatou.sy@example.com',
        'disponible' => true,
    ],
    [
        'prenom' => 'Pape',
        'nom' => 'Kane',
        'specialite' => 'Spécialiste en Marketing Digital',
        'photo' => 'https://s3.eu-central-1.amazonaws.com/uploads.mangoweb.org/shared-prod/visegradfund.org/uploads/2021/08/placeholder-male.jpg',
        'telephone' => '+221 70 100 00 08',
        'email' => 'pape.kane@example.com',
        'disponible' => true,
    ],
    [
        'prenom' => 'Khady',
        'nom' => 'Camara',
        'specialite' => 'Ingénieur Agricole',
        'photo' => 'https://www.gmevents.ae/wp-content/uploads/2019/04/female-placeholder.jpg',
        'telephone' => '+221 70 100 00 09',
        'email' => 'khady.camara@example.com',
        'disponible' => false,
    ],
    [
        'prenom' => 'Abdoulaye',
        'nom' => 'Ndoye',
        'specialite' => 'Technicien en systèmes de culture',
        'photo' => 'https://s3.eu-central-1.amazonaws.com/uploads.mangoweb.org/shared-prod/visegradfund.org/uploads/2021/08/placeholder-male.jpgg',
        'telephone' => '+221 70 100 00 10',
        'email' => 'abdoulaye.ndoye@example.com',
        'disponible' => true,
    ],
    [
        'prenom' => 'Ndeye',
        'nom' => 'Gueye',
        'specialite' => 'Développeuse Web',
        'photo' => 'https://www.gmevents.ae/wp-content/uploads/2019/04/female-placeholder.jpgg',
        'telephone' => '+221 70 100 00 11',
        'email' => 'ndeye.gueye@example.com',
        'disponible' => true,
    ],
    [
        'prenom' => 'Modou',
        'nom' => 'Faye',
        'specialite' => 'Consultante Cybersécurité',
        'photo' => 'https://s3.eu-central-1.amazonaws.com/uploads.mangoweb.org/shared-prod/visegradfund.org/uploads/2021/08/placeholder-male.jpgg',
        'telephone' => '+221 70 100 00 12',
        'email' => 'modou.faye@example.com',
        'disponible' => false,
    ],
    [
        'prenom' => 'Bineta',
        'nom' => 'Thiam',
        'specialite' => 'Spécialiste marketing des produits agricoles',
        'photo' => 'https://www.gmevents.ae/wp-content/uploads/2019/04/female-placeholder.jpgg',
        'telephone' => '+221 70 100 00 13',
        'email' => 'bineta.thiam@example.com',
        'disponible' => true,
    ],
    [
        'prenom' => 'Ousmane',
        'nom' => 'Ly',
        'specialite' => 'Coach en entrepreneuriat agricole',
        'photo' => 'https://s3.eu-central-1.amazonaws.com/uploads.mangoweb.org/shared-prod/visegradfund.org/uploads/2021/08/placeholder-male.jpgg',
        'telephone' => '+221 70 100 00 14',
        'email' => 'ousmane.ly@example.com',
        'disponible' => true,
    ],
    [
        'prenom' => 'Seynabou',
        'nom' => 'Mbaye',
        'specialite' => 'Technicienne aquacole',
        'photo' => 'https://www.gmevents.ae/wp-content/uploads/2019/04/female-placeholder.jpgg',
        'telephone' => '+221 70 100 00 15',
        'email' => 'seynabou.mbaye@example.com',
        'disponible' => false,
    ],
];


        foreach ($Coaches as $Coache) {
            ProfilCoach::firstOrCreate($Coache);
        }
    }
}
