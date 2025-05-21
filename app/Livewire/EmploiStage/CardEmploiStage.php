<?php

namespace App\Livewire\EmploiStage;


use Livewire\Component;

class CardEmploiStage extends Component
{
    public string $id;
    public string $title;
    public string $description;
    public string $lieu;
    public string $secteur_activite;
    public string $type_contrat;
    public string $niveau_experience;
    public string $niveau_etude;
    public string $date_debut;
    public string $date_fin;
    public string $fiche_poste;


    public function render()
    {
        return view('livewire.emploi-stage.card-emploi-stage');
    }
}
