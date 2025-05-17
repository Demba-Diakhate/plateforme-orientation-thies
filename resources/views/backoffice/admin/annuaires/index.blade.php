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
     <div class="breadcrumb-title pe-3">Annuaire</div>
     <div class="ps-3">
          <nav aria-label="breadcrumb">
               <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item">
                         <a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Liste des entreprises</li>
               </ol>
          </nav>
     </div>
     <div class="ms-auto">
          <a href="{{ route('admin.annuaires.create') }}" class="btn btn-primary">
               <i class="bi bi-plus-circle"></i> Nouvelle entreprise
          </a>
     </div>
</div>

<div class="card">
     <div class="card-body">
          <div class="table-responsive">
               <table class="table table-striped table-bordered" id="example2">
                    <thead>
                         <tr>
                              <th>Titre</th>
                              <th>Description</th>
                              <th>Adresse</th>
                              <th>Logo</th>
                              <th>Site web</th>
                              <th>Statut</th>
                              <th>Secteur d'activité</th>
                              <th>Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                         @foreach ($annuaires as $annuaire)
                         <tr>
                              <td>{{ $annuaire->title }}</td>
                              <td>{{ Str::limit($annuaire->description, 50) }}</td>
                              <td>{{ $annuaire->adresse }}</td>
                              <td>
                                   @if($annuaire->logo)
                                   <img src="{{ asset('storage/' . $annuaire->logo) }}" alt="Logo" width="40"
                                        height="40">
                                   @else
                                   -
                                   @endif
                              </td>
                              <td>
                                   @if($annuaire->site_web)
                                   <a href="{{ $annuaire->site_web }}" target="_blank">{{ $annuaire->site_web }}</a>
                                   @else
                                   -
                                   @endif
                              </td>
                              <td>{{ $annuaire->statut }}</td>
                              <td>{{ $annuaire->secteur_activite }}</td>
                              <td>
                                   <a href="{{ route('admin.annuaires.show', $annuaire->id) }}"
                                        class="btn btn-info btn-sm" title="Voir"><i class="bi bi-eye"></i></a>
                                   <a href="{{ route('admin.annuaires.edit', $annuaire->id) }}"
                                        class="btn btn-warning btn-sm" title="Modifier"><i class="bi bi-pencil"></i></a>
                                   <form action="{{ route('admin.annuaires.destroy', $annuaire->id) }}" method="POST"
                                        style="display:inline;"
                                        onsubmit="return confirm('Voulez-vous vraiment supprimer cet annuaire ?');">
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
          </div>
     </div>
</div>
@endsection