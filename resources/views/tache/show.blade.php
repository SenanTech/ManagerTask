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
                <span class="d-inline-block nav-item dropdown no-caret  me-3 ms-5 dropdown-notifications">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="message-square"></i></a>
                    <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownMessages">
                        <h6 class="dropdown-header dropdown-notifications-header">
                            <i class="me-2" data-feather="mail"></i>
                            Commentaire
                        </h6>
                        @foreach ($commentaires as $commentaire)
                            @if ($commentaire->task_id == $tache->tache_id)
                                <a class="dropdown-item dropdown-notifications-item" href="#!">
                                    <img class="dropdown-notifications-item-img" src="{{asset("assets/img/illustrations/profiles/profile-2.png")}}" />
                                    <div class="dropdown-notifications-item-content">
                                        <div class="dropdown-notifications-item-content-text">{{$commentaire->contenu}}</div>
                                        <div class="dropdown-notifications-item-content-details"> {{$tache->name}} {{$tache->prenom}} · 58m</div>
                                    </div>
                                </a>
                            @endif    
                        @endforeach
                    </div>
                </span>
            </div>
        </div>
    </div>
    @endforeach
 </div>
</div>  
 @endsection