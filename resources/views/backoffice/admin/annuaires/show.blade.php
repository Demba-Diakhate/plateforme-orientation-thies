@extends('backoffice.layouts.app')

@section('content')
<div class="card">
     <div class="card-header d-flex justify-content-between align-items-center">
          <h5>Détail de l'annuaire</h5>
          <a href="{{ route('admin.annuaires.index') }}" class="btn btn-secondary btn-sm">
               <i class="bi bi-arrow-left"></i> Retour à la liste
          </a>
     </div>
     <div class="card-body">
          <div class="row mb-3">
               <div class="col-md-3 fw-bold">Titre :</div>
               <div class="col-md-9">{{ $annuaire->title }}</div>
          </div>
          <div class="row mb-3">
               <div class="col-md-3 fw-bold">Description :</div>
               <div class="col-md-9">{{ $annuaire->description }}</div>
          </div>
          <div class="row mb-3">
               <div class="col-md-3 fw-bold">Adresse :</div>
               <div class="col-md-9">{{ $annuaire->adresse }}</div>
          </div>
          <div class="row mb-3">
               <div class="col-md-3 fw-bold">Logo :</div>
               <div class="col-md-9">
                    @if($annuaire->logo)
                    <img src="{{ asset('storage/' . $annuaire->logo) }}" alt="Logo" width="80" height="80">
                    @else
                    <span>-</span>
                    @endif
               </div>
          </div>
          <div class="row mb-3">
               <div class="col-md-3 fw-bold">Site web :</div>
               <div class="col-md-9">
                    @if($annuaire->site_web)
                    <a href="{{ $annuaire->site_web }}" target="_blank">{{ $annuaire->site_web }}</a>
                    @else
                    <span>-</span>
                    @endif
               </div>
          </div>
          <div class="row mb-3">
               <div class="col-md-3 fw-bold">Statut :</div>
               <div class="col-md-9">{{ $annuaire->statut }}</div>
          </div>
          <div class="row mb-3">
               <div class="col-md-3 fw-bold">Secteur d'activité :</div>
               <div class="col-md-9">{{ $annuaire->secteur_activite }}</div>
          </div>
     </div>
</div>
@endsection