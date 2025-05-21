@extends('frontend.layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold mb-6 text-center">Annuaire des écoles de formation à Thiès</h1>
    <form method="GET" action="{{ route('annuaire-formation') }}" class="mb-6 flex flex-col sm:flex-row items-center gap-4">
    <input
        type="text"
        name="query"
        value="{{ request('query') }}"
        placeholder="Rechercher une entreprise..."
        class="w-full sm:w-1/3 px-4 py-2 border border-vertSombre rounded focus:outline-none focus:ring-2 focus:ring-vertSombre"
    >

    <select
        name="secteur"
        class="w-full sm:w-1/3 px-4 py-2 border border-vertSombre rounded cursor-pointer focus:outline-none focus:ring-2 focus:ring-vertSombre"
    >
        <option value="">Tous les secteurs</option>
        @foreach($secteursDisponibles as $secteur)
            <option value="{{ $secteur }}" {{ request('secteur') == $secteur ? 'selected' : '' }}>
                {{ $secteur }}
            </option>
        @endforeach
    </select>

    <button type="submit" class="px-6 py-2 bg-vertSombre text-white rounded cursor-pointer hover:bg-vertClair">
        Rechercher
    </button>
    </form>

    <div class="overflow-x-auto borde border-vertSombre rounded">
        @if($entreprises->isEmpty())
            <tr class="p-6 text-center text-vertSombre font-semibold">
                Aucune centre de formation ne correspond à votre recherche.
            </tr>
        @else
            <table class="min-w-full">
                <thead class="bg-vertClair/20 border-b-2 border-vertSombre">
                    <tr>
                        <th class="text-left py-3 px-4">Logo</th>
                        <th class="text-left py-3 px-4">Nom</th>
                        <th class="text-left py-3 px-4">Statut</th>
                        <th class="text-left py-3 px-4">Secteur d'activité</th>
                        <th class="text-left py-3 px-4">Site Web</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($entreprises as $entreprise)
                        <tr class="border-b border-vertSombre hover:bg-vertClair/10">
                            <td class="py-2 px-4">
                                @if($entreprise->logo)
                                    <img src="{{ $entreprise->logo }}" alt="Logo" class="h-10 w-10 rounded-full object-contain">
                                @else
                                    <span class="text-gray-400 italic">Aucun</span>
                                @endif
                            </td>
                            <td class="py-2 px-4 font-semibold text-gray-800">
                                {{ $entreprise->title }}
                            </td>
                            <td class="py-2 px-4 text-gray-700">
                                {{ $entreprise->statut }}
                            </td>
                            <td class="py-2 px-4 text-gray-700">
                                {{ $entreprise->secteur_activite }}
                            </td>
                            <td class="py-2 px-4">
                                @if($entreprise->site_web)
                                    <a href="{{ $entreprise->site_web }}" target="_blank" class="text-blue-600 hover:underline">Visiter</a>
                                @else
                                    <span class="text-gray-400 italic">Non disponible</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-6 flex justify-center">
                {{ $entreprises->links() }}
            </div>
        @endif
</div>
@endsection
