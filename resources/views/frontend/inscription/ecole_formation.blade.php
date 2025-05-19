@extends('frontend.layouts.app')

@section('content')
<div class="mx-auto py-10 px-4">

     <div class="mb-8 text-center">
          <h1 class="text-3xl md:text-4xl font-bold text-gray-900 text-center leading-12">
               Attirez plus d’apprenants et <span class="text-vertSombre"> valorisez vos formations </span>
          </h1>
          <p class="mt-4 text-gray-600 text-lg">
               Faites connaître votre centre de formation, vos programmes et vos dates de sessions.<br>
               Offrez aux jeunes une voie concrète vers l’emploi en mettant en avant vos offres et vos success stories
               via un tableau de bord personnalisé.
          </p>
     </div>

     <div class="mx-5 bg-white rounded-lg shadow p-6 mb-8">
          <livewire:inscription.ecole-formation>
     </div>

     <div class="bg-jaune border-l-4 border-vertSombre p-5 rounded mb-6">
          <h2 class="text-xl font-semibold text-vertSombre mb-2">Pourquoi créer un compte ?</h2>
          <ul class="list-disc pl-5 text-gray-700 space-y-1">
               <li>Accès à un dashboard personnalisé</li>
               <li>Statistiques de vos annonces et formations</li>
               <li>Possibilité de contacter les candidats</li>
               <li>Valorisation de vos success stories</li>
               <li>Visibilité accrue auprès des jeunes et partenaires</li>
          </ul>
     </div>
</div>
@endsection