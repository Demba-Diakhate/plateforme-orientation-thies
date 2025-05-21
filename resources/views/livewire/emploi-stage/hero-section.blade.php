<div class="flex flex-row justify-between px-10">
    <div class="flex flex-col gap-12 w-1/2 my-20">
        <h1 class="font-bold text-black md:text-5xl sm:text-4xl text-3xl bg-transparent">
            Trouver un <span class="text-vertSombre ">stage</span> ou postuler à un <span class="text-vertSombre">emploi</span> en quelques clics
        </h1>
        <p>
            Vous cherchez un stage ou un emploi, explorer les offres dans différents domaines qui  existent en Thiès
        </p>
        <div class="flex flex-row gap-8 text-white text-sm">
            <a href="#offres" class="bg-gradient-to-r from-vertSombre to-vertClair p-3 border-none shadow cursor-pointer font-semibold rounded-lg">Explorer les offres</a>            
            {{-- @php
                $role = Auth::user()->roles->pluck('name')->first();
            @endphp
            @if ($role !== 'Utilisateur')
            <a href="{{ route('login') }}">Deposer une offre</a>
            @else
            <a href="{{ route('#') }}">Deposer une offre</a>
            @endif --}}
        </div>
    </div>
    <img 
        class="w-1/2 rounded-b-4xl h-[80vh] object-cover"
        src="assets/images/search_job.jpg" 
        alt="Recherche de stage/emploi"
    >
</div>