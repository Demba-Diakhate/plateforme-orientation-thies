<?php

namespace App\Livewire\EmploiStage;

use Livewire\Component;

class FiltreEmploiStage extends Component
{

    public $emplois = [
        [
            'title' => 'Assistant Communication Digitale',
            'description' => 'Participer à la stratégie de communication sur les réseaux sociaux et aider à l’organisation d’événements.',
            'lieu' => 'Dakar, Sénégal',
            'secteur_activite' => 'Communication / ONG',
            'type_contrat' => 'Stage',
            'niveau_experience' => 'Débutant',
            'niveau_etude' => 'Bac+2',
            'date_debut' => '2025-06-01',
            'date_fin' => '2025-09-01',
            'fiche_poste' => 'Rédaction de contenu, gestion de page Facebook, création de visuels Canva, assistance sur le terrain.'
        ],
        [
            'title' => 'Développeur Laravel Freelance',
            'description' => 'Mise en place d’une API RESTful pour une plateforme éducative.',
            'lieu' => 'Télétravail',
            'secteur_activite' => 'Informatique / Développement Web',
            'type_contrat' => 'Freelance',
            'niveau_experience' => 'Intermédiaire',
            'niveau_etude' => 'Bac+3',
            'date_debut' => '2025-05-25',
            'date_fin' => '2025-06-30',
            'fiche_poste' => 'Création d’API, sécurisation avec Laravel Sanctum, documentation Postman, réunions hebdomadaires.'
        ],
        [
            'title' => 'Chargé de projet junior',
            'description' => 'Coordonner des projets sociaux en lien avec les partenaires locaux.',
            'lieu' => 'Abidjan, Côte d’Ivoire',
            'secteur_activite' => 'Gestion de projet / Entreprise sociale',
            'type_contrat' => 'CDD',
            'niveau_experience' => '0-2 ans',
            'niveau_etude' => 'Bac+5',
            'date_debut' => '2025-07-01',
            'date_fin' => '2026-07-01',
            'fiche_poste' => 'Planification, reporting, relations partenaires, suivi budgétaire.'
        ],
        [
            'title' => 'Formation Web Design + Coaching Orientation',
            'description' => 'Apprenez les bases du web design et bénéficiez d’un accompagnement personnalisé pour votre projet professionnel.',
            'lieu' => 'Ouagadougou, Burkina Faso',
            'secteur_activite' => 'Formation / Coaching',
            'type_contrat' => 'Formation',
            'niveau_experience' => 'Non requis',
            'niveau_etude' => 'Bac',
            'date_debut' => '2025-06-10',
            'date_fin' => '2025-08-30',
            'fiche_poste' => 'HTML, CSS, Figma, coaching 1:1, préparation à l’insertion professionnelle.'
        ],
        [
            'title' => 'Volontaire appui logistique pour événement',
            'description' => 'Soutenir l’organisation logistique d’un forum sur l’emploi des jeunes.',
            'lieu' => 'Bamako, Mali',
            'secteur_activite' => 'Événementiel / ONG',
            'type_contrat' => 'Bénévolat',
            'niveau_experience' => 'Non requis',
            'niveau_etude' => 'Tous niveaux',
            'date_debut' => '2025-07-05',
            'date_fin' => '2025-07-10',
            'fiche_poste' => 'Accueil des participants, installation des stands, aide logistique générale.'
        ]   
    ];

    public function render()
    {
        return view('livewire.emploi-stage.filtre-emploi-stage');
    }
}
