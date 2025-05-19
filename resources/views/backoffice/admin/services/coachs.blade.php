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
     <div class="breadcrumb-title pe-3">Services</div>
     <div class="ps-3">
          <nav aria-label="breadcrumb">
               <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item">
                         <a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Liste des coachs</li>
               </ol>
          </nav>
     </div>
</div>

<div class="card">
     <div class="card-body">
          <div class="table-responsive">
               <table class="table table-striped table-bordered" id="example2">
                    <thead>
                         <tr>
                              <th>Photo</th>
                              <th>Nom</th>
                              <th>Email</th>
                              <th>Téléphone</th>
                              <th>Spécialité</th>
                              <th>Adresse</th>
                              <th>LinkedIn</th>
                              <th>Date inscription</th>
                              <th>Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                         @foreach ($coaches as $coach)
                         <tr>
                              <td>
                                   @if($coach->photo)
                                   <img src="{{ asset('storage/' . $coach->photo) }}" alt="Photo" width="40" height="40"
                                        class="rounded-circle">
                                   @else
                                   -
                                   @endif
                              </td>
                              <td>{{ $coach->prenom }} {{ $coach->nom }}</td>
                              <td>{{ $coach->email }}</td>
                              <td>{{ $coach->telephone }}</td>
                              <td>{{ $coach->specialite }}</td>
                              <td>{{ $coach->adresse }}</td>
                              <td>
                                   @if($coach->linkedin)
                                   <a href="{{ $coach->linkedin }}" target="_blank"><i class="bi bi-linkedin"></i></a>
                                   @else
                                   -
                                   @endif
                              </td>
                              <td>{{ $coach->created_at ? $coach->created_at->format('d/m/Y') : '-' }}</td>
                              <td>
                                   <a href="#" class="btn btn-info btn-sm" title="Voir"><i class="bi bi-eye"></i></a>
                                   <a href="#" class="btn btn-warning btn-sm" title="Modifier"><i
                                             class="bi bi-pencil"></i></a>
                                   <form action="#" method="POST" style="display:inline;"
                                        onsubmit="return confirm('Voulez-vous vraiment supprimer ce coach ?');">
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