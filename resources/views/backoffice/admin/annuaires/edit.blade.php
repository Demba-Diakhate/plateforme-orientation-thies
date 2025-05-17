@extends('backoffice.layouts.app')

@section('content')
<div class="card">
     <div class="card-header">
          <h5>Modifier l'annuaire</h5>
     </div>
     <div class="card-body">
          <form action="{{ route('admin.annuaires.update', $annuaire->id) }}" method="POST"
               enctype="multipart/form-data">
               @csrf
               @method('PUT')

               <div class="mb-3">
                    <label for="title" class="form-label">Titre</label>
                    <input type="text" name="title" id="title" class="form-control"
                         value="{{ old('title', $annuaire->title) }}" required>
                    @error('title')
                    <div class="text-danger small">{{ $message }}</div>
                    @enderror
               </div>

               <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="3"
                         required>{{ old('description', $annuaire->description) }}</textarea>
                    @error('description')
                    <div class="text-danger small">{{ $message }}</div>
                    @enderror
               </div>

               <div class="mb-3">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" name="adresse" id="adresse" class="form-control"
                         value="{{ old('adresse', $annuaire->adresse) }}" required>
                    @error('adresse')
                    <div class="text-danger small">{{ $message }}</div>
                    @enderror
               </div>

               <div class="mb-3">
                    <label for="logo" class="form-label">Logo</label>
                    @if($annuaire->logo)
                    <div class="mb-2">
                         <img src="{{ asset('storage/' . $annuaire->logo) }}" alt="Logo" width="60" height="60">
                    </div>
                    @endif
                    <input type="file" name="logo" id="logo" class="form-control">
                    @error('logo')
                    <div class="text-danger small">{{ $message }}</div>
                    @enderror
               </div>

               <div class="mb-3">
                    <label for="site_web" class="form-label">Site web</label>
                    <input type="url" name="site_web" id="site_web" class="form-control"
                         value="{{ old('site_web', $annuaire->site_web) }}">
                    @error('site_web')
                    <div class="text-danger small">{{ $message }}</div>
                    @enderror
               </div>

               <div class="mb-3">
                    <label for="statut" class="form-label">Statut</label>
                    <select name="statut" id="statut" class="form-select" required>
                         <option value="">Sélectionnez un statut</option>
                         @foreach($statuts as $statut)
                         <option value="{{ $statut }}" {{ old('statut', $annuaire->statut) == $statut ? 'selected' : ''
                              }}>{{ $statut }}</option>
                         @endforeach
                    </select>
                    @error('statut')
                    <div class="text-danger small">{{ $message }}</div>
                    @enderror
               </div>

               <div class="mb-3">
                    <label for="secteur_activite" class="form-label">Secteur d'activité</label>
                    <input type="text" name="secteur_activite" id="secteur_activite" class="form-control"
                         value="{{ old('secteur_activite', $annuaire->secteur_activite) }}" required>
                    @error('secteur_activite')
                    <div class="text-danger small">{{ $message }}</div>
                    @enderror
               </div>

               <button type="submit" class="btn btn-primary">Mettre à jour</button>
               <a href="{{ route('admin.annuaires.index') }}" class="btn btn-secondary">Annuler</a>
          </form>
     </div>
</div>
@endsection