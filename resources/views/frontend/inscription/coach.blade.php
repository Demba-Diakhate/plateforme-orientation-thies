@extends('frontend.layouts.app')

@section('content')
<div class="mx-auto py-10 px-4">

     <div class="mb-8 text-center">
          <h1 class="text-3xl md:text-4xl font-bold text-gray-900 text-center leading-12">
               Aidez les jeunes à réussir et <span class="text-vertSombre"> partagez votre expérience </span>
          </h1>
          <p class="mt-4 text-gray-600 text-lg">
               Proposez vos services de coaching : rédaction de CV, lettres de motivation, orientation, conseils
               carrière...<br>
               Accompagnez les jeunes dans leur parcours et valorisez vos compétences via un tableau de bord
               personnalisé.
          </p>
     </div>

     <div class="mx-5 bg-white rounded-lg shadow p-6 mb-8">
          <livewire:inscription.coach>
     </div>

     <div class="bg-jaune border-l-4 border-vertSombre p-5 rounded mb-6">
          <h2 class="text-xl font-semibold text-vertSombre mb-2">Pourquoi devenir coach sur la plateforme ?</h2>
          <ul class="list-disc pl-5 text-gray-700 space-y-1">
               <li>Accès à un dashboard personnalisé</li>
               <li>Valorisation de votre expérience et de vos conseils</li>
               <li>Opportunité d’aider d’autres jeunes à réussir</li>
               <li>Visibilité auprès des jeunes et partenaires</li>
               <li>Développement de votre réseau professionnel</li>
          </ul>
     </div>
</div>
@endsection