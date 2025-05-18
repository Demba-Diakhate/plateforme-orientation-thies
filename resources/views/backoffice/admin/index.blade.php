@extends('backoffice.layouts.app')

@section('content')

<div class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-xl-3 row-cols-xxl-6 mb-4">
     <div class="col">
          <div class="card radius-10">
               <div class="card-body text-center">
                    <div class="widget-icon mx-auto mb-3 bg-light-primary text-primary">
                         <i class="bi bi-people-fill"></i>
                    </div>
                    <p class="mb-0">Utilisateurs</p>
                    <h3 class="mt-4 mb-0">{{ $totalUsers }}</h3>
               </div>
          </div>
     </div>
     <div class="col">
          <div class="card radius-10">
               <div class="card-body text-center">
                    <div class="widget-icon mx-auto mb-3 bg-light-success text-success">
                         <i class="bi bi-journal-bookmark-fill"></i>
                    </div>
                    <p class="mb-0">Annuaires</p>
                    <h3 class="mt-4 mb-0">{{ $totalAnnuaires }}</h3>
               </div>
          </div>
     </div>
     <div class="col">
          <div class="card radius-10">
               <div class="card-body text-center">
                    <div class="widget-icon mx-auto mb-3 bg-light-info text-info">
                         <i class="bi bi-person-badge-fill"></i>
                    </div>
                    <p class="mb-0">Rôles</p>
                    <h3 class="mt-4 mb-0">{{ $usersByRole->count() }}</h3>
               </div>
          </div>
     </div>
     <div class="col">
          <div class="card radius-10">
               <div class="card-body text-center">
                    <div class="widget-icon mx-auto mb-3 bg-light-warning text-warning">
                         <i class="bi bi-building"></i>
                    </div>
                    <p class="mb-0">Entreprises</p>
                    <h3 class="mt-4 mb-0">
                         {{ $annuairesByStatut->where('statut', 'Entreprise')->first()->total ?? 0 }}
                    </h3>
               </div>
          </div>
     </div>
     <div class="col">
          <div class="card radius-10">
               <div class="card-body text-center">
                    <div class="widget-icon mx-auto mb-3 bg-light-danger text-danger">
                         <i class="bi bi-mortarboard-fill"></i>
                    </div>
                    <p class="mb-0">Centres de formation</p>
                    <h3 class="mt-4 mb-0">
                         {{ $annuairesByStatut->where('statut', 'Centre de formation')->first()->total ?? 0 }}
                    </h3>
               </div>
          </div>
     </div>
     <div class="col">
          <div class="card radius-10">
               <div class="card-body text-center">
                    <div class="widget-icon mx-auto mb-3 bg-light-secondary text-secondary">
                         <i class="bi bi-globe"></i>
                    </div>
                    <p class="mb-0">ONG</p>
                    <h3 class="mt-4 mb-0">
                         {{ $annuairesByStatut->where('statut', 'ONG')->first()->total ?? 0 }}
                    </h3>
               </div>
          </div>
     </div>
</div>

<div class="row">
     <div class="col-12 col-lg-8 col-xl-8">
          <div class="card radius-10">
               <div class="card-body">
                    <div class="row row-cols-1 row-cols-lg-2 g-3 align-items-center">
                         <div class="col">
                              <h5 class="mb-0">Utilisateurs par rôle</h5>
                         </div>
                    </div>
                    <div id="chart1"></div>
               </div>
          </div>
     </div>
     <div class="col-12 col-lg-4 col-xl-4">
          <div class="card radius-10">
               <div class="card-body">
                    <div class="row g-3 align-items-center">
                         <div class="col">
                              <h5 class="mb-0">Annuaires par statut</h5>
                         </div>
                    </div>
                    <div id="chart2"></div>
               </div>
          </div>
     </div>
</div>

<div class="card mt-4">
     <div class="card-header">Derniers annuaires ajoutés</div>
     <div class="card-body">
          <ul class="list-group">
               @foreach($latestAnnuaires as $annuaire)
               <li class="list-group-item">
                    <strong>{{ $annuaire->title }}</strong> — {{ $annuaire->statut }}<br>
                    <small>{{ $annuaire->secteur_activite }}</small>
               </li>
               @endforeach
          </ul>
     </div>
</div>

<script>
     // Utilisateurs par rôle
     window.usersByRoleLabels = @json($usersByRole->pluck('name'));
     window.usersByRoleData = @json($usersByRole->pluck('users_count'));
 
     // Annuaires par statut
     window.annuairesByStatutLabels = @json($annuairesByStatut->pluck('statut'));
     window.annuairesByStatutData = @json($annuairesByStatut->pluck('total'));
 </script>
@endsection