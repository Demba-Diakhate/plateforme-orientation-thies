{{-- Footer --}}
<footer class="max-w-7xl mx-auto text-black">
  <div class="px-6 py-12 grid grid-cols-1 md:grid-cols-5 gap-10">
    <!-- Logo -->
    <div>
      <h1 class="text-3xl font-bold mb-4">LOGO</h1>
      <p class="text-sm">Plateforme Digitale d'Information et d'Orientation sur les Emplois à Thiès </p>
    </div>

    <!-- Navigation -->
    <div>
      <h2 class="text-xl font-semibold mb-4">Navigation</h2>
      <ul class="space-y-2">
        <li><a href="{{ route('acceuil') }}" class="hover:underline">Acceuil</a></li>
        <li><a href="#" class="hover:underline">Formations</a></li>
        <li><a href="#" class="hover:underline">Emplois/Stages</a></li>
        <li><a href="{{ route('mentorat') }}" class="hover:underline">Mentorat</a></li>
      </ul>
    </div>

    {{-- Service --}}
    <div>
      <h2 class="text-xl font-semibold mb-4">Proposer services</h2>
      <ul class="space-y-2">
        <li><a href="{{route('service.entreprise.create')}}" class="hover:underline">Entreprise</a></li>
        <li><a href="{{route('service.ecole_formation.create')}}" class="hover:underline">Ecole Formation</a></li>
        <li><a href="{{route('service.freelance.create')}}" class="hover:underline">Freelance</a></li>
        <li><a href="{{route('service.coach.create')}}" class="hover:underline">Coach</a></li>
      </ul>
    </div>

    <!-- Annuaire -->
    <div>
      <h2 class="text-xl font-semibold mb-4">Annuaire</h2>
      <ul class="space-y-2">
        <li><a href="{{ route('annuaire-formation') }}" class="hover:underline">École de formation</a></li>
        <li><a href="{{ route('annuaire-entreprise') }}" class="hover:underline">Entreprise</a></li>
        <li><a href="{{ route('annuaire-ong') }}" class="hover:underline">ONG</a></li>
      </ul>
    </div>

    <!-- Support -->
    <div>
      <h2 class="text-xl font-semibold mb-4">Support</h2>
      <ul class="space-y-2">
        <li><a href="#" class="hover:underline">Aide</a></li>
        <li><a href="#" class="hover:underline">Contact</a></li>
        <li><a href="{{ route('login') }}" class="hover:underline">Connexion</a></li>
        <li><a href="{{ route('register') }}" class="hover:underline">Inscription</a></li>
      </ul>
    </div>
  </div>

  <!-- Bas de page -->
  <div class="bg-gradient-to-r from-vertSombre to-vertClair text-center py-4 text-sm text-white">
    &copy; 2025 - Tous droits réservés.
  </div>
</footer>