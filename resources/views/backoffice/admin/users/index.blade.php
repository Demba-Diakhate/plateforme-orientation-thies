@extends('backoffice.layouts.app')

@section('content')

<!--breadcrumb --->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
     <div class="breadcrumb-title pe-3">Admin</div>
     <div class="ps-3">
          <nav aria-label="breadcrumb">
               <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">User</li>
               </ol>
          </nav>
     </div>
</div>



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
<div class="card">
     <div class="card-body">
          <div class="table-responsive">
               <table id="example" class="table table-striped table-bordered">
                    <thead>
                         <tr>
                              <th>Nom d'utilisateur</th>
                              <th>email</th>
                              <th>role</th>
                              <th>action</th>
                         </tr>
                    </thead>
                    <tbody>
                         @foreach ($users as $item)
                              <tr>
                                   <td>{{$item->name}}</td>
                                   <td>{{$item->email}}</td>
                                   <td>{{ $item->roles->isNotEmpty() ? $item->roles->pluck('name')->join(', ') : 'Aucun rôle' }}</td>
                                   
                                   <td>
                                        <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                             <a class="text-warning" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal{{$item->id}}"
                                                  title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                             <form action="{{ route('admin.users.destroy', $item->id) }}" method="POST" style="display:inline;"
                                                       onsubmit="return confirm('Voulez-vous vraiment supprimer cet utilisateur ?');">
                                                       @csrf
                                                       @method('DELETE')
                                                       <button type="submit" class="btn btn-link text-danger p-0 m-0" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title="Supprimer">
                                                            <i class="bi bi-trash-fill"></i>
                                                       </button>                                            </form>
                                        </div>       
                                   </td>
                              </tr>

                              <div class="modal fade" id="modal{{$item->id}}" tabindex="-1" aria-hidden="true">
                                   <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                             <div class="modal-header">
                                                  <h5 class="modal-title">Modifier rôle</h5>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                             </div>
                                             <form action="{{ route('admin.users.update', $item->id) }}" method="POST">
                                                  @csrf
                                                  @method('PUT')
                                                  <div class="modal-body">
                                                       <div class="mb-3">
                                                            <label for="role_id_{{$item->id}}" class="form-label">Changer Rôle</label>
                                                            <select name="role_id" id="role_id_{{$item->id}}" class="form-select" required>
                                                                 @foreach($roles as $role)
                                                                 <option value="{{ $role->id }}" {{ $item->roles->contains($role->id) ? 'selected' :
                                                                      '' }}>
                                                                      {{ $role->name }}
                                                                 </option>
                                                                 @endforeach
                                                            </select>
                                                       </div>
                                                  </div>
                                                  <div class="modal-footer">
                                                       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                       <button type="submit" class="btn btn-primary">Enregistrer</button>
                                                  </div>
                                             </form>
                                        </div>
                                   </div>                         </div>
                         @endforeach
                    
                    </tbody>
               </table>
          </div>
     </div>
</div>

@endsection