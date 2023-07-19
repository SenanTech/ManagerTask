@extends('layout.template')
@section('contenu')

    <div class="container-fluid px-4">
        <div class="card">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Utilisateur</th>
                            <th>Email</th>
                            <th>Rôle</th>
                            <th>Date de création</th>
                            @if(Auth::user()->role == 'admin')
                            <th>Actions</th>
                            @endif
                        </tr>
                    </thead>
                    
                    <tbody>
                    @foreach ($utilisateurs as $utilisateur)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-1.png" /></div>
                                     {{ $utilisateur->name }}
                                </div>
                            </td>
                            <td>
                                {{ $utilisateur->email }}
                            </td>

                            <td>
                            
                                <span class="badge bg-blue-soft text-blue">{{ $utilisateur->role }}</span>
                                <span></span>
                            </td>

                            
                            <td class="{{ $utilisateur->email_verified ? 'text-success' : 'text-danger' }}">     
                                     @if( $utilisateur->email_verified_at == null)
                                     <span class="badge bg-red-soft text-red">Email non vérifié
                                        </span>
                                     @else 
                                     <span class="badge bg-blue-soft text-blue">
                                        Email vérifié
                                        </span> 
                                     @endif
                            </td>

                            @if(Auth::user()->role == 'admin')
                                <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                            @endif
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


