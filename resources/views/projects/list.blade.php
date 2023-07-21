@extends('layout.template')
@section('contenu')

    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-xl px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="book-open"></i></div >Liste des projets </h1>
                    </div>
                    <div class="col-12 col-xl-auto mb-3">
                        <a class="btn btn-sm btn-light text-primary" href="{{route('projects-create')}}">
                            <i class="me-1" data-feather="arrow-left"></i>
                            Ajouter un projet
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

   

    <div class="container-fluid px-4">
        <div class="card">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Titre du projet</th>
                            <th>Description</th>
                            <th>Date de début</th>
                            <th>Date de fin</th>
                            <th>Statut</th>
                            <th>Actions</th>
                          
                        </tr>
                    </thead>
                    
                    <tbody>
                    @foreach($projects as $project)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    
                                            
                                     {{ $project->name }}
                                </div>
                            </td>
                            <td>
                                {{ $project->description}}
                            </td>

                            <td>{{ $project->start_date}}</td>
                            
                            <td>{{ $project->end_date}}</td>

                            <td>
                                <span class="badge bg-blue-soft text-blue">En cours</span>
                            </td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="{{route('projects-edit',$project->id)}}"><i data-feather="edit"></i></a>
                                    <a class="btn btn-datatable btn-icon btn-transparent-dark" href="{{route('projects-destroy',$project->id)}}"><i
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

