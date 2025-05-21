@extends('backoffice.layouts.app')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
     <ul class="mb-0">
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
     </ul>
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
                    <li class="breadcrumb-item active" aria-current="page">Modifier un emploi</li>
               </ol>
          </nav>
     </div>
</div>

<div class="card">
     <div class="card-body">
          <form action="{{ route('entreprise.emplois.update', $emploi->id) }}" method="POST"
               enctype="multipart/form-data" class="row g-3">
               @csrf
               @method('PUT')
               <div class="col-md-6">
                    <label class="form-label"><i class="bi bi-type"></i> Titre *</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $emploi->title) }}"
                         required>
               </div>
               <div class="col-md-6">
                    <label class="form-label"><i class="bi bi-geo-alt"></i> Lieu</label>
                    <input type="text" name="lieu" class="form-control" value="{{ old('lieu', $emploi->lieu) }}">
               </div>
               <div class="col-md-12">
                    <label class="form-label"><i class="bi bi-card-text"></i> Description *</label>
                    <textarea name="description" class="form-control" rows="4"
                         required>{{ old('description', $emploi->description) }}</textarea>
               </div>
               <div class="col-md-6">
                    <label class="form-label"><i class="bi bi-diagram-3"></i> Secteur d'activité *</label>
                    <input type="text" name="secteur_activite" class="form-control"
                         value="{{ old('secteur_activite', $emploi->secteur_activite) }}" required>
               </div>
               <div class="col-md-6">
                    <label class="form-label"><i class="bi bi-briefcase"></i> Type de contrat *</label>
                    <select name="type_contrat" class="form-select" required>
                         <option value="CDD" {{ old('type_contrat', $emploi->type_contrat) == 'CDD' ? 'selected' : ''
                              }}>CDD</option>
                         <option value="CDI" {{ old('type_contrat', $emploi->type_contrat) == 'CDI' ? 'selected' : ''
                              }}>CDI</option>
                         <option value="Stage" {{ old('type_contrat', $emploi->type_contrat) == 'Stage' ? 'selected' :
                              '' }}>Stage</option>
                         <option value="Freelance" {{ old('type_contrat', $emploi->type_contrat) == 'Freelance' ?
                              'selected' : '' }}>Freelance</option>
                         <option value="Autre" {{ old('type_contrat', $emploi->type_contrat) == 'Autre' ? 'selected' :
                              '' }}>Autre</option>
                    </select>
               </div>
               <div class="col-md-6">
                    <label class="form-label"><i class="bi bi-person-workspace"></i> Niveau d'expérience</label>
                    <input type="text" name="niveau_experience" class="form-control"
                         value="{{ old('niveau_experience', $emploi->niveau_experience) }}">
               </div>
               <div class="col-md-6">
                    <label class="form-label"><i class="bi bi-mortarboard"></i> Niveau d'étude</label>
                    <input type="text" name="niveau_etude" class="form-control"
                         value="{{ old('niveau_etude', $emploi->niveau_etude) }}">
               </div>
               <div class="col-md-6">
                    <label class="form-label"><i class="bi bi-calendar-event"></i> Date début</label>
                    <input type="date" name="date_debut" class="form-control"
                         value="{{ old('date_debut', $emploi->date_debut ? \Carbon\Carbon::parse($emploi->date_debut)->format('Y-m-d') : '') }}">
               </div>
               <div class="col-md-6">
                    <label class="form-label"><i class="bi bi-calendar-event-fill"></i> Date fin *</label>
                    <input type="date" name="date_fin" class="form-control"
                         value="{{ old('date_fin', $emploi->date_fin ? \Carbon\Carbon::parse($emploi->date_fin)->format('Y-m-d') : '') }}"
                         required>
               </div>
               <div class="col-md-6">
                    <label class="form-label"><i class="bi bi-file-earmark-arrow-up"></i> Fiche de poste (PDF, DOC, max
                         2Mo)</label>
                    <input type="file" name="fiche_poste" class="form-control">
                    @if($emploi->fiche_poste)
                    <div class="mt-2">
                         <a href="{{ asset('storage/' . $emploi->fiche_poste) }}" target="_blank"
                              class="btn btn-outline-info btn-sm">
                              <i class="bi bi-file-earmark-pdf"></i> Voir la fiche actuelle
                         </a>
                    </div>
                    @endif
               </div>
               <div class="col-md-6 d-flex align-items-center">
                    <div class="form-check mt-4">
                         <input class="form-check-input" type="checkbox" name="active" id="active" value="1" {{
                              old('active', $emploi->active) ? 'checked' : '' }}>
                         <label class="form-check-label" for="active">
                              <i class="bi bi-toggle-on"></i> Activer l'offre
                         </label>
                    </div>
               </div>
               <div class="col-12 text-end">
                    <button type="submit" class="btn btn-success">
                         <i class="bi bi-check-circle"></i> Enregistrer les modifications
                    </button>
               </div>
          </form>
     </div>
</div>
@endsection