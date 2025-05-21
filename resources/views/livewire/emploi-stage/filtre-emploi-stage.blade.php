<div class="my-20 mx-12">
    <div class="border border-black/10 p-3 rounded-xl w-full flex flex-row gap-10">
        <select wire:model="state" class="rounded-xl border border-black/10 w-full">
            <option value="">Opportinuté</option>
            <option value="Emploi">Emploi</option>
            <option value="Stage">Stage</option>        
        </select>
        <select wire:model="state" class="rounded-xl border-black/10 w-full">
            <option value="">Domaine</option>
            <option value="Emploi">Développement</option>
            <option value="Stage">Agriculture</option>        
            <option value="Stage">Santé</option>        
            <option value="Stage">Couture</option>        
            <option value="Stage">Hotéllerie</option>        
            <option value="Stage">Comptable</option>        
            <option value="Stage">Designer</option>        
            <option value="Stage">Mécanique</option>        
        </select>
        <input type="text" class="rounded-xl border-black/10 w-full" placeholder="Recherchez">
    </div>
    <h1 class="text-3xl font-bold sm:my-12">Dérnières appel à candidature</h1>
    <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-6">
            @forelse ($emplois as $emploi)
                <livewire:EmploiStage.CardEmploiStage
                    :title="$emploi['title']"
                    :description="$emploi['description']"
                    :lieu="$emploi['lieu']"
                    :secteur_activite="$emploi['secteur_activite']"
                    :type_contrat="$emploi['type_contrat']"
                    :niveau_experience="$emploi['niveau_experience']"
                    :niveau_etude="$emploi['niveau_etude']"
                    :date_debut="$emploi['date_debut']"
                    :date_fin="$emploi['date_fin']"
                    :fiche_poste="$emploi['fiche_poste']"
                />
            @empty
            <p class="text-md text-center my-6">Pas de d'emplois/stages disponibles pour le moment</p>
            @endforelse
        </div>
</div>
