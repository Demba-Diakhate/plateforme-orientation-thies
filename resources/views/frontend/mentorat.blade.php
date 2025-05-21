@extends('frontend.layouts.app')

@section('content')

<div class="max-w-7xl mx-auto bg-gray-50 px-5 py-10">
    <form method="GET" action="{{ route('mentorat') }}" class="flex md:w-1/2 md:mx-auto mb-6">
    <div class="flex justify-center items-center px-4 py-2 border-2 border-r-0 border-vertSombre">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
        </svg>
    </div>

    <input
        type="text"
        name="query"
        value="{{ request('query') }}"
        placeholder="Rechercher un mentor selon la spécialité (ex: développeur, cybersécurité...)"
        class="w-full px-4 py-2 border-2 border-vertSombre focus:outline-none"
    >
    </form>

    {{-- Cartes des mentors et filtre --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
        @if(count($mentors) > 0)
            @foreach ($mentors as $mentor)
            <livewire:mentorat.CardMentor
                :photo="$mentor['photo']"
                :prenom="$mentor['prenom']"
                :nom="$mentor['nom']"
                :specialite="$mentor['specialite']"
                :telephone="$mentor['telephone']"
                :email="$mentor['email']"
                :disponible="$mentor['disponible']"
            />
            @endforeach
        @else
            <div class="text-center text-lg text-gray-700">Aucun mentor trouvé pour la spécialité "<span class="font-semibold">{{ $query }}</span>".</div>
        @endif
    </div>
    <div class="mt-6">
    {{ $mentors->links() }}
    </div>
</div>

@endsection
