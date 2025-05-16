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
                                                  <h5 class="modal-title">Modal title</h5>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                             </div>
                                             <div class="modal-body">

                                             </div>
                                             <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                  <button type="button" class="btn btn-primary">Save changes</button>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         @endforeach
                    
                    </tbody>
               </table>
          </div>
     </div>
</div>

@endsection