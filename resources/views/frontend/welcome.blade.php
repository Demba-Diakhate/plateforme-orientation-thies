@extends('frontend.layouts.app')

@section('content')

<livewire:welcome.HeroSection />
<section class="bg-gray-100 py-12 text-center">
     <div class="max-w-4xl mx-auto px-6">
          <h2 class="text-3xl font-bold text-gray-800 mb-4">Vous souhaitez promouvoir vos services ou événements ?</h2>
          <p class="text-lg text-gray-600 mb-6">
               Publiez une annonce sur notre plateforme et touchez les jeunes de toute la région de Thiès.
          </p>
          <button onclick="document.getElementById('pricingModal').classList.remove('hidden')"
               class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg">
               Voir les offres et publier une annonce
          </button>
     </div>
</section>

<div id="pricingModal" class="fixed inset-0 z-50 bg-black bg-opacity-50 flex items-center justify-center hidden">
     <div class="bg-white rounded-lg shadow-xl max-w-3xl w-full p-6 relative">
          <button onclick="document.getElementById('pricingModal').classList.add('hidden')"
               class="absolute top-3 right-3 text-gray-500 hover:text-red-500 text-xl font-bold">&times;</button>

          <h3 class="text-2xl font-bold text-gray-800 mb-4">Nos Offres Publicitaires</h3>
          <p class="text-gray-600 mb-6">Choisissez l’offre qui vous convient selon votre budget et vos objectifs.</p>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
               <!-- Offre 1 -->
               <div class="border rounded-lg p-4">
                    <h4 class="text-xl font-semibold text-blue-600 mb-2">Bannière Standard</h4>
                    <ul class="text-gray-600 mb-4 text-sm">
                         <li>📍 Emplacement : Bas de page</li>
                         <li>📅 Durée : 7 jours</li>
                         <li>📐 Taille : 728x90 px</li>
                    </ul>
                    <p class="text-lg font-bold text-gray-800">5 000 FCFA</p>
               </div>

               <!-- Offre 2 -->
               <div class="border rounded-lg p-4">
                    <h4 class="text-xl font-semibold text-green-600 mb-2">Bannière Premium</h4>
                    <ul class="text-gray-600 mb-4 text-sm">
                         <li>📍 Emplacement : Haut de page</li>
                         <li>📅 Durée : 15 jours</li>
                         <li>📐 Taille : 970x250 px</li>
                    </ul>
                    <p class="text-lg font-bold text-gray-800">15 000 FCFA</p>
               </div>

               <!-- Offre 3 -->
               <div class="border rounded-lg p-4">
                    <h4 class="text-xl font-semibold text-purple-600 mb-2">Annonce Partenaire</h4>
                    <ul class="text-gray-600 mb-4 text-sm">
                         <li>📍 Emplacement : Sidebar & page accueil</li>
                         <li>📅 Durée : 30 jours</li>
                         <li>📐 Taille : 300x600 px</li>
                    </ul>
                    <p class="text-lg font-bold text-gray-800">25 000 FCFA</p>
               </div>
          </div>

          <div class="text-center mt-6">
               <a href="/publier-annonce"
                    class="inline-block bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded">
                    Je choisis une offre
               </a>
          </div>
     </div>
</div>   
<livewire:welcome.FormationSection />
<livewire:welcome.Newsletter />

@endsection