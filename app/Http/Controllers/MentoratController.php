<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class MentoratController extends Controller
{
    public $mentors = [
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
            'disponible' => false,
        ],
        [
            'prenom' => 'Fatou',
            'nom' => 'Ndiaye',
            'specialite' => 'Conseillère en agriculture biologique',
            'photo' => 'https://www.gmevents.ae/wp-content/uploads/2019/04/female-placeholder.jpg',
            'telephone' => '+221 70 100 00 03',
            'email' => 'fatou.ndiaye@example.com',
            'disponible' => true,
        ],
        [
            'prenom' => 'Ibrahima',
            'nom' => 'Sow',
            'specialite' => 'Ingénieur en machinisme agricole',
            'photo' => 'https://s3.eu-central-1.amazonaws.com/uploads.mangoweb.org/shared-prod/visegradfund.org/uploads/2021/08/placeholder-male.jpg',
            'telephone' => '+221 70 100 00 04',
            'email' => 'ibrahima.sow@example.com',
            'disponible' => false,
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
            'disponible' => true,
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
            'photo' => 'https://s3.eu-central-1.amazonaws.com/uploads.mangoweb.org/shared-prod/visegradfund.org/uploads/2021/08/placeholder-male.jpg',
            'telephone' => '+221 70 100 00 10',
            'email' => 'abdoulaye.ndoye@example.com',
            'disponible' => true,
        ],
        [
            'prenom' => 'Ndeye',
            'nom' => 'Gueye',
            'specialite' => 'Développeuse Web',
            'photo' => 'https://www.gmevents.ae/wp-content/uploads/2019/04/female-placeholder.jpg',
            'telephone' => '+221 70 100 00 11',
            'email' => 'ndeye.gueye@example.com',
            'disponible' => true,
        ],
        [
            'prenom' => 'Modou',
            'nom' => 'Faye',
            'specialite' => 'Consultante Cybersécurité',
            'photo' => 'https://s3.eu-central-1.amazonaws.com/uploads.mangoweb.org/shared-prod/visegradfund.org/uploads/2021/08/placeholder-male.jpg',
            'telephone' => '+221 70 100 00 12',
            'email' => 'modou.faye@example.com',
            'disponible' => true,
        ],
        [
            'prenom' => 'Bineta',
            'nom' => 'Thiam',
            'specialite' => 'Spécialiste marketing des produits agricoles',
            'photo' => 'https://www.gmevents.ae/wp-content/uploads/2019/04/female-placeholder.jpg',
            'telephone' => '+221 70 100 00 13',
            'email' => 'bineta.thiam@example.com',
            'disponible' => false,
        ],
        [
            'prenom' => 'Ousmane',
            'nom' => 'Ly',
            'specialite' => 'Coach en entrepreneuriat agricole',
            'photo' => 'https://s3.eu-central-1.amazonaws.com/uploads.mangoweb.org/shared-prod/visegradfund.org/uploads/2021/08/placeholder-male.jpg',
            'telephone' => '+221 70 100 00 14',
            'email' => 'ousmane.ly@example.com',
            'disponible' => true,
        ],
        [
            'prenom' => 'Seynabou',
            'nom' => 'Mbaye',
            'specialite' => 'Technicienne aquacole',
            'photo' => 'https://www.gmevents.ae/wp-content/uploads/2019/04/female-placeholder.jpg',
            'telephone' => '+221 70 100 00 15',
            'email' => 'seynabou.mbaye@example.com',
            'disponible' => true,
        ],
    ];

    public function mentorat(Request $request)
    {
        
    $query = $request->input('query');
    $mentors = collect($this->mentors);

    // Filtrage si recherche
    if ($query) {
        $mentors = $mentors->filter(function ($mentor) use ($query) {
            return stripos($mentor['specialite'], $query) !== false;
        });
    }

    // Pagination manuelle
    $perPage = 9;
    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    $currentItems = $mentors->slice(($currentPage - 1) * $perPage, $perPage)->values();

    $paginated = new LengthAwarePaginator(
        $currentItems,
        $mentors->count(),
        $perPage,
        $currentPage,
        ['path' => request()->url(), 'query' => request()->query()]
    );

    return view('frontend.mentorat', [
        'mentors' => $paginated,
        'query' => $query
    ]);
    }
}
