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
                    
                </div>
            </div>
        </div>
    </header>
    @if ($task->isEmpty())
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
     @foreach($task as $tache)
    <div class="col-lg-4 mb-2">
        <div class="card">
            <div class="card-body">
            <h1 class="text-primary strong"> {{ $tache->name_projet}}</h1>
               <h5 class="card-title"> {{ $tache->titre }}</h5>
                <p class="card-text">{{ $tache->description }}</p>
                <span class="badge bg-blue-soft text-blue "> {{$tache->titre_statut}}</span > <span class= "text-danger ms-5 "> {{$tache->name}} {{$tache->prenom}}</span>
            </div>
        </div>
    </div>
    @endforeach
 </div>
</div>  
 @endsection