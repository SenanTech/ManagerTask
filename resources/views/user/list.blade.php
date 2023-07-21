@extends('layout.template')
@section('contenu')
@if (session('founded'))
    <div class="alert alert-succes">
        {{session('success')}}
    </div>
@elseif (session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif
    <div class="container-fluid px-4">
        <div class="card">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Joined Date</th>
                            <th>Actions</th>
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
                            <span class="badge bg-green-soft text-green">Sales</span>
                                <span class="badge bg-blue-soft text-blue">Developers</span>
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
                            
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href={{ route('user-edit', $utilisateur->id ) }}><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" 
                                href={{ route( 'user-delete', $utilisateur->id ) }} ><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


