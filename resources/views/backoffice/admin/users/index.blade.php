@extends('backoffice.layouts.app')

@section('content')

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
                                             <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                  title="Views"><i class="bi bi-eye-fill"></i></a>
                                             <a class="text-warning" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal{{$item->id}}"
                                                  title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                             <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                  title="Delete"><i class="bi bi-trash-fill"></i></a>
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
                                             <form action="{{ route('backoffice.admin.users.update', $item->id) }}" method="POST">
                                                  @csrf
                                                  @method('PUT')
                                                  <div class="modal-body">
                                                       <div class="mb-3">
                                                            <label for="role_id_{{$item->id}}" class="form-label">Rôle</label>
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