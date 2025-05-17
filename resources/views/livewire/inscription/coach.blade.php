<form wire:submit.prevent="submit" enctype="multipart/form-data" class="space-y-5">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="relative">
            <span class="absolute left-3 top-2.5 text-vertSombre">
                <i class="fas fa-user"></i>
            </span>
            <input type="text" wire:model.defer="prenom" required placeholder="Prénom *"
                class="pl-10 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            @error('prenom') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
        </div>
        <div class="relative">
            <span class="absolute left-3 top-2.5 text-vertSombre">
                <i class="fas fa-user-tie"></i>
            </span>
            <input type="text" wire:model.defer="nom" required placeholder="Nom *"
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
                <i class="fas fa-map-marker-alt"></i>
            </span>
            <input type="text" wire:model.defer="adresse" placeholder="Adresse"
                class="pl-10 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            @error('adresse') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
        </div>
        <div class="relative">
            <span class="absolute left-3 top-2.5 text-vertSombre">
                <i class="fas fa-calendar-alt"></i>
            </span>
            <input type="date" wire:model.defer="date_naissance" placeholder="Date de naissance"
                class="pl-10 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            @error('date_naissance') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
        </div>
        <div class="relative">
            <span class="absolute left-3 top-2.5 text-vertSombre">
                <i class="fas fa-venus-mars"></i>
            </span>
            <select wire:model.defer="sexe"
                class="pl-10 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                <option value="">Sexe</option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
                <option value="Autre">Autre</option>
            </select>
            @error('sexe') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
        </div>
        <div class="relative flex items-center">
            <span class="absolute left-3 top-2.5 text-vertSombre">
                <i class="fas fa-image"></i>
            </span>
            <input type="file" wire:model="photo"
                class="pl-10 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            @error('photo') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
            @if ($photo)
            <div class="mt-2"><img src="{{ $photo->temporaryUrl() }}" class="h-12"></div>
            @endif
        </div>
        <div class="relative">
            <span class="absolute left-3 top-2.5 text-vertSombre">
                <i class="fas fa-user-graduate"></i>
            </span>
            <input type="text" wire:model.defer="specialite" placeholder="Spécialité (CV, lettre, orientation...)"
                class="pl-10 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            @error('specialite') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
        </div>
        <div class="relative md:col-span-2">
            <span class="absolute left-3 top-2.5 text-vertSombre">
                <i class="fas fa-align-left"></i>
            </span>
            <textarea wire:model.defer="biographie" rows="3" placeholder="Biographie, expérience, approche..."
                class="pl-10 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
            @error('biographie') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
        </div>
        <div class="relative">
            <span class="absolute left-3 top-2.5 text-vertSombre">
                <i class="fab fa-linkedin"></i>
            </span>
            <input type="url" wire:model.defer="linkedin" placeholder="LinkedIn"
                class="pl-10 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            @error('linkedin') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
        </div>
        <div class="relative">
            <span class="absolute left-3 top-2.5 text-vertSombre">
                <i class="fas fa-link"></i>
            </span>
            <input type="url" wire:model.defer="site_web" placeholder="Site web"
                class="pl-10 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            @error('site_web') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
        </div>
    </div>
    <div class="pt-2">
        <button type="submit"
            class="w-full bg-vertSombre hover:bg-green-300 text-white font-semibold py-2 rounded transition cursor-pointer">
            Enregistrer mon compte coach
        </button>
    </div>
</form>