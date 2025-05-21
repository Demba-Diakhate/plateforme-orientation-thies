@php
$mentors = [
    [
        'prenom' => 'Aminata',
        'nom' => 'Diallo',
        'specialite' => 'Développeuse Web',
        'photo' => 'https://s3.eu-central-1.amazonaws.com/uploads.mangoweb.org/shared-prod/visegradfund.org/uploads/2021/08/placeholder-male.jpg',
        'telephone' => '+221 00 000 00 00',
        'email' => 'mentore@gmail.com',
        'disponible' => true,
    ],
    
    [
        'prenom' => 'Mamadou',
        'nom' => 'Ba',
        'specialite' => 'Data Scientist',
        'photo' => 'https://s3.eu-central-1.amazonaws.com/uploads.mangoweb.org/shared-prod/visegradfund.org/uploads/2021/08/placeholder-male.jpg',
        'telephone' => '+221 00 000 00 00',
        'email' => 'mentore@gmail.com',
        'disponible' => false,
    ],
    [
        'prenom' => 'Fatou',
        'nom' => 'Ndiaye',
        'specialite' => 'Consultante en cybersécurité',
        'photo' => 'https://s3.eu-central-1.amazonaws.com/uploads.mangoweb.org/shared-prod/visegradfund.org/uploads/2021/08/placeholder-male.jpg',
        'telephone' => '+221 00 000 00 00',
        'email' => 'mentore@gmail.com',
        'disponible' => true,
    ],
    
    [
        'prenom' => 'Aminata',
        'nom' => 'Diallo',
        'specialite' => 'Développeuse Web',
        'photo' => 'https://s3.eu-central-1.amazonaws.com/uploads.mangoweb.org/shared-prod/visegradfund.org/uploads/2021/08/placeholder-male.jpg',
        'telephone' => '+221 00 000 00 00',
        'email' => 'mentore@gmail.com',
        'disponible' => false,
    ],
    [
        'prenom' => 'Fatou',
        'nom' => 'Ndiaye',
        'specialite' => 'Consultante en cybersécurité',
        'photo' => 'https://s3.eu-central-1.amazonaws.com/uploads.mangoweb.org/shared-prod/visegradfund.org/uploads/2021/08/placeholder-male.jpg',
        'telephone' => '+221 00 000 00 00',
        'email' => 'mentore@gmail.com',
        'disponible' => true,
    ],
    [
        'prenom' => 'Mamadou',
        'nom' => 'Ba',
        'specialite' => 'Data Scientist',
        'photo' => 'https://s3.eu-central-1.amazonaws.com/uploads.mangoweb.org/shared-prod/visegradfund.org/uploads/2021/08/placeholder-male.jpg',
        'telephone' => '+221 00 000 00 00',
        'email' => 'mentore@gmail.com',
        'disponible' => true,
    ],
];

@endphp

<div class="bg-gray-50 px-5 py-10">
    <!-- Barre de recherche -->
    <div class="flex md:w-1/2 md:mx-auto mb-6">
        <div class="flex justify-center items-center px-4 py-2 border-2 border-r-0 border-vertSombre">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
        </svg>
        </div>
        
        <input
            type="text"
            placeholder="Rechercher un mentor selon la spécialité (ex: développeur, agriculteur...)"
            class="w-full px-4 py-2 border-2 border-vertSombre focus:outline-none"
        >
    </div>
   

    <!-- Cartes des mentorés -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="mentorList">
        @foreach ($mentors as $mentor)
        <div class="bg-white p-4 rounded-lg shadow flex space-x-4 mentor-card">
            <img src="{{ $mentor['photo'] }}" alt="{{ $mentor['prenom'] .' '. $mentor['nom'] }}" class="w-24 h-24 rounded-full object-cover">
            <div>
                <span class="text-xs text-jaune bg-yellow-100 px-2 py-1 rounded uppercase font-bold">Mentor</span>
                <h2 class="text-lg font-semibold mt-1">{{ $mentor['prenom'] .' '. $mentor['nom'] }}</h2>
                <p class="text-sm text-gray-500">{{ $mentor['specialite'] }}</p>
                <p class="text-sm text-gray-500 mt-1">{{ $mentor['telephone'] }}</p>
                <p class="text-sm text-gray-500">{{ $mentor['email'] }}</p>
                @if ($mentor['disponible'] == true)
                <div class="flex items-center mt-1 text-sm font-semibold bg-vertSombre/5 w-fit p-1 text-vertSombre">
                    <p>Disponible</p>
                </div>
                @else
                    <div class="flex items-center mt-1 text-sm font-semibold bg-red-500/5 w-fit p-1 text-red-500">
                        <p>Non disponible</p>
                    </div>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>

