<nav class="w-full max-w-7xl mx-auto bg-white shadow">
    <!-- Sub Navbar -->
  <div class="flex justify-between p-5 md:border-b border-gray-400">
    <div class="">
        <h1 class="text-4xl font-bold">LOGO</h1>
        <p class="text-sm hidden md:block">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
    </div>

    <ul class="hidden md:flex items-center gap-5 text-vertSombre">
        <li class="font-medium hover:text-vertClair"><a href="#">Aide</a></li>
        <li class="font-medium hover:text-vertClair"><a href="#">Contact</a></li>
        <li class="relative group bg-vertSombre text-white font-medium">
            <div class="flex justify-center items-center gap-2 p-2 cursor-pointer">
                Se Connecter
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </div>
            <ul class="absolute top-10 right-0 w-52 bg-white px-2 py-2 hidden group-hover:flex flex-col gap-2 border border-gray-200 cursor-pointer shadow-lg">
                <li class="border border-vertSombre p-2 text-vertSombre font-medium hover:border-vertClair hover:bg-vertClair hover:text-white"><a href="#">Connexion</a></li>
                <li class="bg-vertSombre p-2 text-white font-medium hover:bg-vertClair"><a href="#">Inscription</a></li>
            </ul>
        </li>
    </ul>

    <!-- Button toggle -->
    <button wire:click="toggleMenu" class="md:hidden">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
    </button>
  </div>

  <!-- Navbar -->
  <div class="hidden md:block">
    <ul class="flex items-center text-sm font-medium">
        <li class="hover:bg-gray-100 px-5 py-4"><a href="#">Acceuil</a></li>
        <li class="hover:bg-gray-100 px-5 py-4"><a href="#">Formations</a></li>
        <li class="hover:bg-gray-100 px-5 py-4"><a href="#">Emplois/Stages</a></li>
        <li class="hover:bg-gray-100 px-5 py-4"><a href="#">Mentorat</a></li>
        <li class="hover:bg-gray-100 px-5 py-4"><a href="#">Services</a></li>
        <div class="relative group">
            <li class="flex items-center gap-1 cursor-pointer hover:bg-gray-100 px-5 py-4">
                <div>Annuaire</div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </li>
            <div class="absolute top-[51px] w-52 bg-white hidden group-hover:flex flex-col shadow-lg">
                <li class="hover:bg-gray-100 px-5 py-2"><a href="#">École de formation</a></li>
                <li class="hover:bg-gray-100 px-5 py-2"><a href="#">Entreprise</a></li>
                <li class="hover:bg-gray-100 px-5 py-2"><a href="#">ONG</a></li>
            </div>
        </div>
    </ul>
  </div>

  <!-- NavBar mobile -->
  <div :class="$wire.menuOpen ? 'block' : 'hidden'" class="flex flex-col items-start w-full text-sm font-medium border-t border-gray-400">
    <ul class="flex flex-col w-full text-vertSombre py-4 border-b border-gray-400">
        <li class="font-medium hover:text-vertClair hover:bg-gray-100 px-5 py-2"><a href="#">Aide</a></li>
        <li class="font-medium hover:text-vertClair hover:bg-gray-100 px-5 py-2"><a href="#">Contact</a></li>
        <div class="flex flex-col w-full px-5 py-2 gap-2">
            <li class="border border-vertSombre px-5 py-4 text-vertSombre font-medium hover:border-vertClair hover:bg-vertClair"><a href="#">Connexion</a></li>
            <li class="bg-vertSombre px-5 py-4 text-white font-medium hover:bg-vertClair"><a href="#">Inscription</a></li>
        </div>
    </ul>
    <ul class="flex flex-col w-full text-sm font-medium">
        <li class="hover:bg-gray-100 mx-7 px-4 py-4 border-b border-gray-400"><a href="#">Acceuil</a></li>
        <li class="hover:bg-gray-100 mx-7 px-4 py-4 border-b border-gray-400"><a href="#">Formations</a></li>
        <li class="hover:bg-gray-100 mx-7 px-4 py-4 border-b border-gray-400"><a href="#">Emplois/Stages</a></li>
        <li class="hover:bg-gray-100 mx-7 px-4 py-4 border-b border-gray-400"><a href="#">Mentorat</a></li>
        <li class="hover:bg-gray-100 mx-7 px-4 py-4 border-b border-gray-400"><a href="#">Services</a></li>
        <div class="mx-7">
            <li wire:click="toggleAnnuaire" class="flex items-center gap-1 cursor-pointer hover:bg-gray-100 px-4 py-4">
                <div>Annuaire</div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </li>
            <div :class="$wire.annuaireOpen ? 'block' : 'hidden'" class="flex flex-col">
                <li class="hover:bg-gray-100 px-7 py-2"><a href="#">École de formation</a></li>
                <li class="hover:bg-gray-100 px-7 py-2"><a href="#">Entreprise</a></li>
                <li class="hover:bg-gray-100 px-7 py-2"><a href="#">ONG</a></li>
            </div>
        </div>
    </ul>
  </div>
</nav>
