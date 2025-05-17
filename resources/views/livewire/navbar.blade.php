<nav class="w-full max-w-7xl mx-auto bg-white shadow-sm">
    <!-- Sub Navbar -->
  <div class="flex justify-between p-5 md:border-b border-gray-400">
    <div class="">
        <h1 class="text-4xl font-bold">LOGO</h1>
    </div>

    <ul class="hidden md:flex items-center gap-5 text-vertSombre">
        <li class="font-medium hover:text-vertClair"><a href="#">CGU</a></li>
        <li class="font-medium hover:text-vertClair"><a href="#">B2B</a></li>
        <li class="font-medium hover:text-vertClair"><a href="#">Blog</a></li>
        @guest
        <li class="relative group bg-vertSombre text-white font-medium">
            <div class="flex justify-center items-center gap-2 p-2 cursor-pointer">
                Se Connecter
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>
            <ul
                class="absolute top-10 right-0 w-52 bg-white px-2 py-2 hidden group-hover:flex flex-col gap-2 border border-gray-200 cursor-pointer shadow-lg">
                <li
                    class="border border-vertSombre p-2 text-vertSombre font-medium hover:border-vertClair hover:bg-vertClair hover:text-white">
                    <a href="{{ route('login') }}">Connexion</a>
                </li>
                <li class="bg-vertSombre p-2 text-white font-medium hover:bg-vertClair">
                    <a href="{{ route('register') }}">Inscription</a>
                </li>
            </ul>
        </li>
        @endguest
        
        @auth
        @php
            $role = Auth::user()->roles->pluck('name')->first();
        @endphp
        @if ($role !== 'Utilisateur')
        <li class="relative group bg-vertSombre text-white font-medium">
            <div class="flex justify-center items-center gap-2 p-2 cursor-pointer">
                <span>{{ Auth::user()->name }}</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>
            
            <ul class="absolute top-10 right-0 w-52 bg-white px-2 py-2 hidden group-hover:flex flex-col gap-2 border border-gray-200 cursor-pointer shadow-lg">
                <li class="p-2 text-vertSombre font-medium hover:bg-vertClair hover:text-white ">
                    <a href="{{ route('profil.index') }}" class="w-full">Mon espace</a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full text-left p-2 cursor-pointer text-red-600  font-medium hover:bg-red-600 hover:text-white">Déconnexion</button>
                    </form>
                </li>
            </ul>
        </li>
        @else
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="flex justify-center bg-red-600 text-white items-center gap-2 p-2 cursor-pointer">
                Déconnexion
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd"
                        d="M6 2a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3zm10.293 5.293a1 1 0 0 1 1.414 0l4 4a1 1 0 0 1 0 1.414l-4 4a1 1 0 0 1-1.414-1.414L18.586 13H10a1 1 0 1 1 0-2h8.586l-2.293-2.293a1 1 0 0 1 0-1.414"
                        clip-rule="evenodd" />
                </svg>
            </button>
        </form>
        @endif
        
        @endauth
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
    <ul class="flex justify-center items-center text-sm font-medium">
        <li class="hover:bg-gray-100 px-5 py-4"><a href="#">Acceuil</a></li>
        <li class="hover:bg-gray-100 px-5 py-4"><a href="#">Formations</a></li>
        <li class="hover:bg-gray-100 px-5 py-4"><a href="#">Emplois/Stages</a></li>
        <li class="hover:bg-gray-100 px-5 py-4"><a href="#">Mentorat</a></li>
        
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

        <div class="relative group">
            <li class="flex items-center gap-1 cursor-pointer hover:bg-gray-100 px-5 py-4">
                <div>Proposer Mes Services</div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </li>
            <div class="absolute top-[51px] w-52 bg-white hidden group-hover:flex flex-col shadow-lg">
                <li class="hover:bg-gray-100 px-5 py-2"><a href="#">Entreprise</a></li>
                <li class="hover:bg-gray-100 px-5 py-2"><a href="#">Ecole Formation</a></li>
                <li class="hover:bg-gray-100 px-5 py-2"><a href="#">Freelance</a></li>
                <li class="hover:bg-gray-100 px-5 py-2"><a href="#">Coach</a></li>
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
        <div class="mx-7">
            <li wire:click="toggleService" class="flex items-center gap-1 cursor-pointer hover:bg-gray-100 px-4 py-4">
                <div>Proposer mes services</div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </li>
            <div :class="$wire.serviceOpen ? 'block' : 'hidden'" class="flex flex-col">
                <li class="hover:bg-gray-100 px-7 py-2"><a href="#">Entreprise</a></li>
                <li class="hover:bg-gray-100 px-7 py-2"><a href="#">Ecole formation</a></li>
                <li class="hover:bg-gray-100 px-7 py-2"><a href="#">Freelance</a></li>
                <li class="hover:bg-gray-100 px-7 py-2"><a href="#">Coach indépendant</a></li>
            </div>
        </div>
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
