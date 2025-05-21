@extends('backoffice.layouts.app')

@section('content')
@if (session('success'))
<div class="alert border-0 bg-light-success alert-dismissible fade show py-2">
     <div class="d-flex align-items-center">
          <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i></div>
          <div class="ms-3">
               <div class="text-success">{{ session('success') }}</div>
          </div>
     </div>
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
     <div class="breadcrumb-title pe-3">Emplois</div>
     <div class="ps-3">
          <nav aria-label="breadcrumb">
               <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item">
                         <a href="{{ route('entreprise.emplois.index') }}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Liste des emplois</li>
               </ol>
          </nav>
     </div>
     <div class="ms-auto">
          <a href="{{ route('entreprise.emplois.create') }}" class="btn btn-primary">
               <i class="bi bi-plus-circle"></i> Nouvel emploi
          </a>
     </div>
</div>

<div class="card">
     <div class="card-body">
          @if($emplois->count())
          <div class="table-responsive">
               <table class="table table-striped table-bordered align-middle" id="emploisTable">
                    <thead>
                         <tr>
                              <th>Titre</th>
                              <th>Description</th>
                              <th>Lieu</th>
                              <th>Secteur</th>
                              <th>Type contrat</th>
                              <th>Niveau exp.</th>
                              <th>Niveau étude</th>
                              <th>Date début</th>
                              <th>Date fin</th>
                              <th>Fiche poste</th>
                              <th>Statut</th>
                              <th>Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                         @foreach($emplois as $emploi)
                         <tr>
                              <td>{{ $emploi->title }}</td>
                              <td>{{ Str::limit($emploi->description, 50) }}</td>
                              <td>{{ $emploi->lieu }}</td>
                              <td>{{ $emploi->secteur_activite }}</td>
                              <td>{{ $emploi->type_contrat }}</td>
                              <td>{{ $emploi->niveau_experience }}</td>
                              <td>{{ $emploi->niveau_etude }}</td>
                              <td>{{ $emploi->date_debut ? \Carbon\Carbon::parse($emploi->date_debut)->format('d/m/Y') : '-' }}
                              </td>
                              <td>{{ $emploi->date_fin ? \Carbon\Carbon::parse($emploi->date_fin)->format('d/m/Y') : '-' }}
                              </td>
                              <td>
                                   @if($emploi->fiche_poste)
                                   <a href="{{ asset('storage/' . $emploi->fiche_poste) }}" target="_blank"
                                        class="btn btn-outline-info btn-sm">
                                        <i class="bi bi-file-earmark-pdf"></i> Voir
                                   </a>
                                   @else
                                   -
                                   @endif
                              </td>
                              <td>
                                   @if($emploi->active)
                                   <span class="badge bg-success">Actif</span>
                                   @else
                                   <span class="badge bg-secondary">Inactif</span>
                                   @endif
                              </td>
                              <td>
                                   <a href="{{ route('entreprise.emplois.show', $emploi->id) }}"
                                        class="btn btn-info btn-sm" title="Voir"><i class="bi bi-eye"></i></a>
                                   <a href="{{ route('entreprise.emplois.edit', $emploi->id) }}"
                                        class="btn btn-warning btn-sm" title="Modifier"><i class="bi bi-pencil"></i></a>
                                   <form action="{{ route('entreprise.emplois.destroy', $emploi->id) }}" method="POST"
                                        style="display:inline;"
                                        onsubmit="return confirm('Voulez-vous vraiment supprimer cet emploi ?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" title="Supprimer"><i
                                                  class="bi bi-trash"></i></button>
                                   </form>
                              </td>
                         </tr>
                         @endforeach
                    </tbody>
               </table>
               <div class="mt-3">
                    {{ $emplois->links() }}
               </div>
          </div>
          @else
          <div class="alert alert-info">Aucun emploi enregistré pour le moment.</div>
          @endif
     </div>
</div>
@endsection