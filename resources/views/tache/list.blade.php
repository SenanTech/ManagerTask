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
    
<div class="row">
@foreach($tache as $task)
  <div class="col-lg-4 mb-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"> {{ $task->titre }}</h5>
        <p class="card-text">{{ $task->description }}</p>
        <span class="badge bg-blue-soft text-blue "> <h3>En cours</h3></span> 
       
      </div>
    </div>
  </div>
  
@endforeach
    <div class="card border-primary col-lg-4 mb-2 ">
            <div class="card-body">
                <h4 class="card-title"></h4>
                     <p class="card-text text-center"> 
                        <a href="{{route('tache-create',$projet_id )}}" class="btn btn-primary">Ajouter une tâche</a>
                    </p>
            </div>
        </div>
<div>
    
    </div>
        
    </div>
  
  
@endsection