<div class="max-w-7xl mx-auto">
<div class="bg-gradient-to-b from-vertSombre to-vertClair py-12 text-center">
     <div class="max-w-4xl mx-auto px-6">
          <h2 class="text-3xl font-bold text-white mb-4">Vous souhaitez promouvoir vos services ou événements ?</h2>
          <p class="text-lg text-white mb-6">
               Publiez une annonce sur notre plateforme et touchez les jeunes de toute la région de Thiès.
          </p>
          <button onclick="document.getElementById('pricingModal').classList.remove('hidden')"
               class="bg-white hover:bg-white/90 cursor-pointer text-vertSombre text-lg font-semibold py-3 px-3 rounded shadow">
               Voir les offres et publier une annonce
          </button>
     </div>
</div>

<div id="pricingModal" class="fixed inset-0 z-50 bg-black/40 flex items-center justify-center hidden">
     <div class="bg-white shadow-xl max-w-3xl w-full p-6 relative rounded">
          <button onclick="document.getElementById('pricingModal').classList.add('hidden')"
               class="absolute top-3 right-3 text-gray-500 hover:text-vertSombre cursor-pointer text-xl font-bold bg-gray-100 px-2 rounded">X</button>

          <h3 class="text-2xl font-bold text-gray-800 mb-4">Nos Offres Publicitaires</h3>
          <p class="text-gray-600 mb-6">Choisissez l’offre qui vous convient selon votre budget et vos objectifs.</p>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-6 py-8">
            <!-- Offre 1 -->
            <div class="bg-white rounded shadow-md border border-vertClair hover:shadow-xl transition duration-300 p-6">
                <h4 class="text-xl font-bold text-vertClair mb-4">Bannière Standard</h4>
                <ul class="text-gray-700 text-sm space-y-2 mb-4">
                    <li>📍 <span class="font-medium">Emplacement :</span> Bas de page</li>
                    <li class="flex items-center gap-1"> 
                      <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-calendar-week text-blue-600"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16 2c.183 0 .355 .05 .502 .135l.033 .02c.28 .177 .465 .49 .465 .845v1h1a3 3 0 0 1 2.995 2.824l.005 .176v12a3 3 0 0 1 -2.824 2.995l-.176 .005h-12a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-12a3 3 0 0 1 2.824 -2.995l.176 -.005h1v-1a1 1 0 0 1 .514 -.874l.093 -.046l.066 -.025l.1 -.029l.107 -.019l.12 -.007q .083 0 .161 .013l.122 .029l.04 .012l.06 .023c.328 .135 .568 .44 .61 .806l.007 .117v1h6v-1a1 1 0 0 1 1 -1m3 7h-14v9.625c0 .705 .386 1.286 .883 1.366l.117 .009h12c.513 0 .936 -.53 .993 -1.215l.007 -.16z" /><path d="M9.015 13a1 1 0 0 1 -1 1a1.001 1.001 0 1 1 -.005 -2c.557 0 1.005 .448 1.005 1" /><path d="M13.015 13a1 1 0 0 1 -1 1a1.001 1.001 0 1 1 -.005 -2c.557 0 1.005 .448 1.005 1" /><path d="M17.02 13a1 1 0 0 1 -1 1a1.001 1.001 0 1 1 -.005 -2c.557 0 1.005 .448 1.005 1" /><path d="M12.02 15a1 1 0 0 1 0 2a1.001 1.001 0 1 1 -.005 -2z" /><path d="M9.015 16a1 1 0 0 1 -1 1a1.001 1.001 0 1 1 -.005 -2c.557 0 1.005 .448 1.005 1" /></svg>
                      <span class="font-medium">Durée :</span> 7 jours</li>
                    <li class="flex items-center gap-1">
                      <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-ruler-2 text-violet"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3l4 4l-14 14l-4 -4z" /><path d="M16 7l-1.5 -1.5" /><path d="M13 10l-1.5 -1.5" /><path d="M10 13l-1.5 -1.5" /><path d="M7 16l-1.5 -1.5" /></svg> 
                      <span class="font-medium">Taille :</span> 728x90 px</li>
                </ul>
                <p class="text-lg font-bold text-gray-900 mb-4">5 000 FCFA</p>
                <button class="w-full bg-vertClair hover:bg-vertCLair/90 text-white text-sm py-2 px-4 rounded cursor-pointer">
                    Choisir cette offre
                </button>
            </div>

            <!-- Offre 2 -->
            <div class="bg-white rounded shadow-md border border-jaune hover:shadow-xl transition duration-300 p-6">
                <h4 class="text-xl font-bold text-jaune mb-4">Bannière Premium</h4>
                <ul class="text-gray-700 text-sm space-y-2 mb-4">
                    <li>📍 <span class="font-medium">Emplacement :</span> Haut de page</li>
                    <li class="flex items-center gap-1"> 
                      <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-calendar-week text-blue-600"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16 2c.183 0 .355 .05 .502 .135l.033 .02c.28 .177 .465 .49 .465 .845v1h1a3 3 0 0 1 2.995 2.824l.005 .176v12a3 3 0 0 1 -2.824 2.995l-.176 .005h-12a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-12a3 3 0 0 1 2.824 -2.995l.176 -.005h1v-1a1 1 0 0 1 .514 -.874l.093 -.046l.066 -.025l.1 -.029l.107 -.019l.12 -.007q .083 0 .161 .013l.122 .029l.04 .012l.06 .023c.328 .135 .568 .44 .61 .806l.007 .117v1h6v-1a1 1 0 0 1 1 -1m3 7h-14v9.625c0 .705 .386 1.286 .883 1.366l.117 .009h12c.513 0 .936 -.53 .993 -1.215l.007 -.16z" /><path d="M9.015 13a1 1 0 0 1 -1 1a1.001 1.001 0 1 1 -.005 -2c.557 0 1.005 .448 1.005 1" /><path d="M13.015 13a1 1 0 0 1 -1 1a1.001 1.001 0 1 1 -.005 -2c.557 0 1.005 .448 1.005 1" /><path d="M17.02 13a1 1 0 0 1 -1 1a1.001 1.001 0 1 1 -.005 -2c.557 0 1.005 .448 1.005 1" /><path d="M12.02 15a1 1 0 0 1 0 2a1.001 1.001 0 1 1 -.005 -2z" /><path d="M9.015 16a1 1 0 0 1 -1 1a1.001 1.001 0 1 1 -.005 -2c.557 0 1.005 .448 1.005 1" /></svg>
                      <span class="font-medium">Durée :</span> 15 jours</li>
                    <li class="flex items-center gap-1">
                      <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-ruler-2 text-violet"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3l4 4l-14 14l-4 -4z" /><path d="M16 7l-1.5 -1.5" /><path d="M13 10l-1.5 -1.5" /><path d="M10 13l-1.5 -1.5" /><path d="M7 16l-1.5 -1.5" /></svg> 
                      <span class="font-medium">Taille :</span> 970x250 px</li>
                </ul>
                <p class="text-lg font-bold text-gray-900 mb-4">15 000 FCFA</p>
                <button class="w-full bg-jaune hover:bg-jaune/90 text-white text-sm py-2 px-4 rounded cursor-pointer">
                    Choisir cette offre
                </button>
            </div>

            <!-- Offre 3 -->
            <div class="bg-white rounded shadow-md border border-vertSombre hover:shadow-xl transition duration-300 p-6">
                <h4 class="text-xl font-bold text-vertSombre mb-4">Annonce Partenaire</h4>
                <ul class="text-gray-700 text-sm space-y-2 mb-4">
                    <li>📍 <span class="font-medium">Emplacement :</span> Sidebar & Accueil</li>
                    <li class="flex items-center gap-1"> 
                      <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-calendar-week text-blue-600"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16 2c.183 0 .355 .05 .502 .135l.033 .02c.28 .177 .465 .49 .465 .845v1h1a3 3 0 0 1 2.995 2.824l.005 .176v12a3 3 0 0 1 -2.824 2.995l-.176 .005h-12a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-12a3 3 0 0 1 2.824 -2.995l.176 -.005h1v-1a1 1 0 0 1 .514 -.874l.093 -.046l.066 -.025l.1 -.029l.107 -.019l.12 -.007q .083 0 .161 .013l.122 .029l.04 .012l.06 .023c.328 .135 .568 .44 .61 .806l.007 .117v1h6v-1a1 1 0 0 1 1 -1m3 7h-14v9.625c0 .705 .386 1.286 .883 1.366l.117 .009h12c.513 0 .936 -.53 .993 -1.215l.007 -.16z" /><path d="M9.015 13a1 1 0 0 1 -1 1a1.001 1.001 0 1 1 -.005 -2c.557 0 1.005 .448 1.005 1" /><path d="M13.015 13a1 1 0 0 1 -1 1a1.001 1.001 0 1 1 -.005 -2c.557 0 1.005 .448 1.005 1" /><path d="M17.02 13a1 1 0 0 1 -1 1a1.001 1.001 0 1 1 -.005 -2c.557 0 1.005 .448 1.005 1" /><path d="M12.02 15a1 1 0 0 1 0 2a1.001 1.001 0 1 1 -.005 -2z" /><path d="M9.015 16a1 1 0 0 1 -1 1a1.001 1.001 0 1 1 -.005 -2c.557 0 1.005 .448 1.005 1" /></svg>
                      <span class="font-medium">Durée :</span> 30 jours</li>
                    <li class="flex items-center gap-1">
                      <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-ruler-2 text-violet"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3l4 4l-14 14l-4 -4z" /><path d="M16 7l-1.5 -1.5" /><path d="M13 10l-1.5 -1.5" /><path d="M10 13l-1.5 -1.5" /><path d="M7 16l-1.5 -1.5" /></svg> 
                      <span class="font-medium">Taille :</span> 300x600 px</li>
                </ul>
                <p class="text-lg font-bold text-gray-900 mb-4">25 000 FCFA</p>
                <button class="w-full bg-vertSombre hover:bg-vertSombre/90 text-white text-sm py-2 px-4 rounded cursor-pointer">
                    Choisir cette offre
                </button>
            </div>
          </div>
     </div>
</div> 
</div> 

