<div>
    <form wire:submit.prevent="submit" enctype="multipart/form-data" class="space-y-5">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="relative">
                <span class="absolute left-3 top-2.5 text-vertSombre">
                    <i class="fas fa-building"></i>
                </span>
                <input type="text" wire:model.defer="nom" required placeholder="Nom de l'entreprise *"
                    class="pl-10 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('nom') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
            <div class="relative">
                <span class="absolute left-3 top-2.5 text-vertSombre">
                    <i class="fas fa-envelope"></i>
                </span>
                <input type="email" wire:model.defer="email" required placeholder="Email *"
                    class="pl-10 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('email') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
            <div class="relative">
                <span class="absolute left-3 top-2.5 text-vertSombre">
                    <i class="fas fa-phone"></i>
                </span>
                <input type="text" wire:model.defer="telephone" placeholder="Téléphone"
                    class="pl-10 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('telephone') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
            <div class="relative">
                <span class="absolute left-3 top-2.5 text-vertSombre">
                    <i class="fas fa-globe"></i>
                </span>
                <input type="url" wire:model.defer="site_web" placeholder="Site web"
                    class="pl-10 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('site_web') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
            <div class="relative flex items-center">
                <span class="absolute left-3 top-2.5 text-vertSombre">
                    <i class="fas fa-image"></i>
                </span>
                <input type="file" wire:model="logo"
                    class="pl-10 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('logo') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                @if ($logo)
                <div class="mt-2"><img src="{{ $logo->temporaryUrl() }}" class="h-12"></div>
                @endif
            </div>
            <div class="relative">
                <span class="absolute left-3 top-2.5 text-vertSombre">
                    <i class="fas fa-industry"></i>
                </span>
                <input type="text" wire:model.defer="secteur_activite" placeholder="Secteur d'activité"
                    class="pl-10 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('secteur_activite') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
            <div class="relative">
                <span class="absolute left-3 top-2.5 text-vertSombre">
                    <i class="fas fa-map-marker-alt"></i>
                </span>
                <input type="text" wire:model.defer="adresse" placeholder="Adresse"
                    class="pl-10 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('adresse') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
            <div class="relative">
                <span class="absolute left-3 top-2.5 text-vertSombre">
                    <i class="fas fa-city"></i>
                </span>
                <input type="text" wire:model.defer="ville" placeholder="Ville"
                    class="pl-10 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('ville') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
            <div class="relative">
                <span class="absolute left-3 top-2.5 text-vertSombre">
                    <i class="fas fa-flag"></i>
                </span>
                <input type="text" wire:model.defer="pays" placeholder="Pays"
                    class="pl-10 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('pays') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
            <div class="relative">
                <span class="absolute left-3 top-2.5 text-vertSombre">
                    <i class="fas fa-users"></i>
                </span>
                <input type="number" wire:model.defer="taille" placeholder="Taille de l'entreprise"
                    class="pl-10 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('taille') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
            <div class="relative">
                <span class="absolute left-3 top-2.5 text-vertSombre">
                    <i class="fas fa-user-tie"></i>
                </span>
                <input type="text" wire:model.defer="responsable" placeholder="Responsable RH / Contact"
                    class="pl-10 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('responsable') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
            <div class="relative">
                <span class="absolute left-3 top-2.5 text-vertSombre">
                    <i class="fab fa-linkedin"></i>
                </span>
                <input type="url" wire:model.defer="linkedin" placeholder="LinkedIn"
                    class="pl-10 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('linkedin') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="relative">
            <textarea wire:model.defer="description" rows="3" placeholder="Description de l'entreprise, missions, etc."
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
            @error('description') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
        </div>
        <div class="pt-2">
            <button type="submit"
                class="w-full bg-vertSombre hover:bg-green-300 text-white font-semibold py-2 rounded transition cursor-pointer">
                Enregistrer mon compte entreprise
            </button>
        </div>
        </form>
</div>
