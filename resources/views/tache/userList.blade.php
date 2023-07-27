@extends('layout.template')
@section('contenu')
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-xl px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="list"></i></div>Liste des tâches
                        </h1>
                    </div>
                    <div class="col-12 col-xl-auto mb-3">
                        <a class="btn btn-sm btn-light text-primary" href="{{ route('projects-list') }}">
                            <i class="me-1" data-feather="arrow-left"></i>
                            Voir le projet
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-xl px-4">
        <!-- Pricing columns example-->
        <div class="pricing-columns">
            <div class="row ">
                @foreach ($tachesParProjet as $projetId => $tachesProjet)
                    <div class="col-md-4 mb-2 p-1">
                        <div class="card h-100">
                            <div class="card-header bg-transparent">
                                <div class="pricing-columns-price">
                                    {{ $tachesProjet[0]->name }}
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush px-2 py-2">
                                    @foreach ($tachesProjet as $tache)
                                        <li class="list-group-item d-flex justify-content-between rounded mb-2  shadow-sm">
                                            {{ $tache->titre }}
                                            <a style="background:rgb(128, 181, 225)"
                                                href="{{ route('tacheAction', $tache->tache_id) }}"
                                                class="btn btn-sm">Action</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    @endsection
