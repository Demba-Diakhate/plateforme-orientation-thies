@extends('frontend.layouts.app')

@section('content')
<div class="mx-auto py-10 px-4">

     <div class="mb-8 text-center">
          <h1 class="text-3xl md:text-4xl font-bold text-gray-900 text-center leading-12">
               Recrutez les meilleurs talents et <span class="text-vertSombre"> valorisez votre entreprise </span>
          </h1>
          <p class="mt-4 text-gray-600 text-lg">
               Présentez votre société, vos offres d’emploi et vos opportunités.<br>
               Attirez des profils qualifiés et gérez vos recrutements via un tableau de bord personnalisé.
          </p>
     </div>

     <div class="mx-5 bg-white rounded-lg shadow p-6 mb-8">
          <livewire:inscription.entreprise>
     </div>

     <div class="bg-jaune border-l-4 border-vertSombre p-5 rounded mb-6">
          <h2 class="text-xl font-semibold text-vertSombre mb-2">Pourquoi créer un compte entreprise ?</h2>
          <ul class="list-disc pl-5 text-gray-700 space-y-1">
               <li>Accès à un dashboard de gestion des offres</li>
               <li>Visibilité auprès des candidats qualifiés</li>
               <li>Gestion simplifiée des candidatures</li>
               <li>Mise en avant de votre marque employeur</li>
               <li>Opportunités de partenariats et networking</li>
          </ul>
     </div>
</div>
@endsection