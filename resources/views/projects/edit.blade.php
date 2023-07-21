@extends('layout.template')
@section('contenu')
    

    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-xl px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="edit"></i></div >Editer le projet </h1>
                    </div>
                    <div class="col-12 col-xl-auto mb-3">
                        <a class="btn btn-sm btn-light text-primary" href="{{route('projects-list')}}">
                            <i class="me-1" data-feather="arrow-left"></i>
                            Voir la liste des projets 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-4">
        <div class="row">
        @if (session('success'))
            <div class="col-md-12 alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Détails du projet</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('projects-update') }}">
                            @csrf
                            <input type="hidden" name="id_projet"  value="{{$project->id}}" >
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="name">Titre du projet</label>
                                    <input class="form-control" id="name" value="{{ $project->name }}" required
                                        name="name">
                                </div>
  
                               
                            </div>
                             <!-- Form Group (last name)-->
                             <div class="col-md-6">
                                    <label class="small mb-1" for="description">Description</label>
                                    <textarea class="form-control" value="{{ $project->description }} " required 
                                    name="description" id="description"></textarea>
                                </div>

                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="start_date">Date de début</label>
                                <input class="form-control" name="start_date" id="start_date" type="dateTime" value="{{ $project->start_date }}" />
                            </div>
                            <!-- Form Group (Group Selection Checkboxes)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="end_date">Date de fin</label>
                                <input class="form-control" name='end_date' id="end_date" type="dateTime" value="{{ $project->end_date }}"/>
                            </div>

                            <!-- Submit button-->
                            <button class="btn btn-primary" type="submit">Modifier les informations</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
