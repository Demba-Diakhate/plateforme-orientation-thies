@extends('frontend.layouts.app')

@section('content')
<div class="mx-auto py-10 px-4">

     <div class="mb-8 text-center">
          <h1 class="text-3xl md:text-4xl font-bold text-gray-900 text-center leading-12">
               Développez votre activité et <span class="text-vertSombre"> valorisez vos compétences </span>
          </h1>
          <p class="mt-4 text-gray-600 text-lg">
               Présentez vos services, vos réalisations et vos disponibilités.<br>
               Offrez aux entreprises et particuliers une solution flexible en mettant en avant votre expertise via un
               tableau de bord personnalisé.
          </p>
     </div>

     <div class="mx-5 bg-white rounded-lg shadow p-6 mb-8">
          <livewire:inscription.freelance>
     </div>

     <div class="bg-jaune border-l-4 border-vertSombre p-5 rounded mb-6">
          <h2 class="text-xl font-semibold text-vertSombre mb-2">Pourquoi créer un compte freelance ?</h2>
          <ul class="list-disc pl-5 text-gray-700 space-y-1">
               <li>Accès à un dashboard personnalisé</li>
               <li>Visibilité auprès des entreprises et clients potentiels</li>
               <li>Gestion de vos missions et candidatures</li>
               <li>Mise en avant de vos réalisations</li>
               <li>Opportunités de networking et de partenariats</li>
          </ul>
     </div>
</div>
@endsection