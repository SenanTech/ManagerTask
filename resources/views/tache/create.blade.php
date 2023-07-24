@extends('layout.template')
@section('contenu')
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-xl px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="user-plus"></i></div >Créer une tâche</h1>
                    </div>
                    <div class="col-12 col-xl-auto mb-3">
                        <a class="btn btn-sm btn-light text-primary" href="#">
                            <i class="me-1" data-feather="arrow-left"></i>
                            Voir la liste des tâches
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
                    <div class="card-header">Informations</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tache-creation') }}">
                            @csrf
                            
                            <input type="hidden" name="projet_id" value="{{$project->id}}">
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                            
                                <div class="col-md-6">
                                    <label class="small mb-1" for="name">Titre</label>
                                    <input class="form-control" id="name" 
                                        name="titre">
                                </div>
  
                               
                            </div>
                             <!-- Form Group (last name)-->
                             <div class="col-md-6">
                                    <label class="small mb-1" for="description">Description</label>
                                    <textarea class="form-control" name="description" id="description" type="text"
                                        placeholder="Décrivez votre projet!"></textarea>
                                </div>

                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="start_date">Date de début</label>
                                <input class="form-control" name="dateCreation" id="start_date" type="date" />
                            </div>
                            <!-- Form Group (Group Selection Checkboxes)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="end_date">Date de fin</label>
                                <input class="form-control" name='dateEcheance' id="end_date" type="date"/>
                            </div>

                            <!-- Submit button-->
                            <button class="btn btn-primary" type="submit">Créer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
