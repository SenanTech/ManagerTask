@extends('layout.template')
@section('contenu')
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-xl px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="list"></i></div >Liste des tâches</h1>
                    </div>
                    <div class="col-12 col-xl-auto mb-3">
                        <a class="btn btn-sm btn-light text-primary" href="{{route('projects-list')}}">
                            <i class="me-1" data-feather="arrow-left"></i>
                             Voir le projet
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

    @if ($tache->isEmpty())
    <div class="row">
        <div class="col-mb-3 text-center">
            <div class="alert alert-info" role="alert">
                <p>Aucune tâche n'a été créée pour ce projet.</p>
            </div>       
            
        </div>
    </div>
 @endif  
<div class="container">
<div class="row ">
    @foreach($tache as $task)
    <div class="col-lg-4 mb-2">
        <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-end">
            <div class="dropdown">
  <button class="dropdown-toggle me-20 btn" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    ...
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="{{route('tache-edit', [ $task->id, $task->projet_id])}}">Editer</a>
    <a class="dropdown-item" href="{{route('tache-destroy', $task->id)}}">Supprimer</a>
  </div>
</div>
            </div>
                <h5 class="card-title"> {{ $task->titre }}</h5>
                <p class="card-text">{{ $task->description }}</p>
                <span class="badge bg-blue-soft text-blue "> {{$task->titre_statut}}</span > <span class= "text-danger ms-5 "> {{$task->name}} {{$task->prenom}}</span> 
            </div>
        </div>
    </div>
    @endforeach

        <div class="col-lg-4 mb-2 ">
            <div class="card border-primary " >
            <div class="card-body">
                <h4 class="card-title"></h4>
                     <p class="card-text text-center"> 
                        <a href="{{route('tache-create',$projet_id )}}" class="btn btn-primary">Ajouter une tâche</a>
                    </p>
            </div>
            </div>
        </div>
    
</div>
        
</div>
  
  
@endsection