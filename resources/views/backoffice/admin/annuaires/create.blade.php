@extends('backoffice.layouts.app')

@section('content')
<div class="card">
     <div class="card-header">
          <h5>Ajouter un Annuaire</h5>
     </div>
     <div class="card-body">
          <form action="{{ route('admin.annuaires.store') }}" method="POST" enctype="multipart/form-data">
               @csrf

               <div class="mb-3">
                    <label for="title" class="form-label">Titre</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                    @error('title')
                    <div class="text-danger small">{{ $message }}</div>
                    @enderror
               </div>

               <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="3"
                         required>{{ old('description') }}</textarea>
                    @error('description')
                    <div class="text-danger small">{{ $message }}</div>
                    @enderror
               </div>

               <div class="mb-3">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" name="adresse" id="adresse" class="form-control" value="{{ old('adresse') }}"
                         required>
                    @error('adresse')
                    <div class="text-danger small">{{ $message }}</div>
                    @enderror
               </div>

               <div class="mb-3">
                    <label for="logo" class="form-label">Logo</label>
                    <input type="file" name="logo" id="logo" class="form-control">
                    @error('logo')
                    <div class="text-danger small">{{ $message }}</div>
                    @enderror
               </div>

               <div class="mb-3">
                    <label for="site_web" class="form-label">Site web</label>
                    <input type="url" name="site_web" id="site_web" class="form-control" value="{{ old('site_web') }}">
                    @error('site_web')
                    <div class="text-danger small">{{ $message }}</div>
                    @enderror
               </div>

               <div class="mb-3">
                    <label for="statut" class="form-label">Statut</label>
                    <select name="statut" id="statut" class="form-select" required>
                         <option value="">Sélectionnez un statut</option>
                         @foreach($statuts as $statut)
                         <option value="{{ $statut }}" {{ old('statut')==$statut ? 'selected' : '' }}>{{ $statut }}
                         </option>
                         @endforeach
                    </select>
                    @error('statut')
                    <div class="text-danger small">{{ $message }}</div>
                    @enderror
               </div>

               <div class="mb-3">
                    <label for="secteur_activite" class="form-label">Secteur d'activité</label>
                    <input type="text" name="secteur_activite" id="secteur_activite" class="form-control"
                         value="{{ old('secteur_activite') }}" required>
                    @error('secteur_activite')
                    <div class="text-danger small">{{ $message }}</div>
                    @enderror
               </div>

               <button type="submit" class="btn btn-primary">Enregistrer</button>
               <a href="{{ route('admin.annuaires.index') }}" class="btn btn-secondary">Annuler</a>
          </form>
     </div>
</div>
@endsection