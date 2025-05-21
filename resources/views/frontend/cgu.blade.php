@extends('frontend.layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-12">
     <div class="bg-white rounded-lg shadow-lg p-8">
          <h1 class="text-3xl font-bold text-vertSombre mb-6 text-center">Conditions Générales d’Utilisation (CGU)</h1>

          <section class="mb-8">
               <h2 class="text-xl font-semibold text-vertClair mb-2">1. Objet</h2>
               <p class="text-gray-700">
                    La présente plateforme vise à faciliter l’orientation, la formation et l’accès à l’emploi pour les
                    jeunes de Thiès. Elle met en relation différents acteurs : entreprises, coachs, freelances et
                    centres de formation.
               </p>
          </section>

          <section class="mb-8">
               <h2 class="text-xl font-semibold text-vertClair mb-2">2. Protection des données personnelles</h2>
               <p class="text-gray-700 mb-2">
                    Vos données personnelles sont collectées dans le respect de la réglementation en vigueur. Elles sont
                    utilisées uniquement dans le cadre du fonctionnement de la plateforme et ne sont jamais cédées à des
                    tiers sans votre consentement.
               </p>
               <ul class="list-disc list-inside text-gray-700 mb-2">
                    <li>Vous pouvez à tout moment demander la modification ou la suppression de vos données via votre
                         espace personnel.</li>
                    <li>Les informations sensibles (mot de passe, email, etc.) sont protégées et ne sont accessibles
                         qu’à vous-même.</li>
               </ul>
               <p class="text-gray-700">
                    Pour toute question relative à la protection de vos données, contactez-nous via le formulaire de
                    contact.
               </p>
          </section>

          <section class="mb-8">
               <h2 class="text-xl font-semibold text-vertClair mb-2">3. Rôles et droits des utilisateurs</h2>
               <div class="mb-4">
                    <h3 class="font-semibold text-vertSombre">Coach</h3>
                    <ul class="list-disc list-inside text-gray-700">
                         <li>Créer et gérer son profil coach.</li>
                         <li>Accompagner les jeunes dans leur orientation professionnelle.</li>
                         <li>Proposer des sessions de mentorat ou d’accompagnement.</li>
                         <li>Consulter les profils des jeunes et répondre à leurs demandes.</li>
                    </ul>
               </div>
               <div class="mb-4">
                    <h3 class="font-semibold text-vertSombre">Freelance</h3>
                    <ul class="list-disc list-inside text-gray-700">
                         <li>Créer et gérer son profil freelance.</li>
                         <li>Mettre en avant ses compétences et expériences.</li>
                         <li>Consulter et postuler aux offres d’emploi ou missions proposées par les entreprises.</li>
                    </ul>
               </div>
               <div class="mb-4">
                    <h3 class="font-semibold text-vertSombre">Entreprise</h3>
                    <ul class="list-disc list-inside text-gray-700">
                         <li>Créer et gérer le profil de l’entreprise.</li>
                         <li>Publier des offres d’emploi ou de stage.</li>
                         <li>Consulter les candidatures reçues et contacter les candidats.</li>
                         <li>Accéder à l’annuaire des coachs et freelances.</li>
                    </ul>
               </div>
               <div class="mb-4">
                    <h3 class="font-semibold text-vertSombre">Centre de formation</h3>
                    <ul class="list-disc list-inside text-gray-700">
                         <li>Créer et gérer le profil du centre de formation.</li>
                         <li>Publier des offres de formation ou des événements pédagogiques.</li>
                         <li>Accéder à la liste des inscrits à leurs formations.</li>
                    </ul>
               </div>
          </section>

          <section class="mb-8">
               <h2 class="text-xl font-semibold text-vertClair mb-2">4. Engagements de l’utilisateur</h2>
               <ul class="list-disc list-inside text-gray-700">
                    <li>Fournir des informations exactes lors de l’inscription.</li>
                    <li>Respecter les autres membres de la plateforme.</li>
                    <li>Ne pas publier de contenu illicite, offensant ou contraire à l’éthique.</li>
                    <li>Utiliser la plateforme dans le respect de la loi et des présentes CGU.</li>
               </ul>
          </section>

          <section class="mb-8">
               <h2 class="text-xl font-semibold text-vertClair mb-2">5. Responsabilités</h2>
               <p class="text-gray-700">
                    La plateforme ne saurait être tenue responsable des échanges ou contrats conclus entre utilisateurs.
                    Chaque acteur est responsable des informations qu’il publie et des interactions qu’il initie.
               </p>
          </section>

          <section>
               <h2 class="text-xl font-semibold text-vertClair mb-2">6. Modification des CGU</h2>
               <p class="text-gray-700">
                    Les présentes CGU peuvent être modifiées à tout moment. Les utilisateurs seront informés de toute
                    modification importante via la plateforme.
               </p>
          </section>
     </div>
</div>
@endsection