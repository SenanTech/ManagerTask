@extends('layout.template')

@section('contenu')
    <div class="container-xl px-4 mt-5">
        <!-- Custom page header alternative example-->
        <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
            <div class="me-4 mb-3 mb-sm-0">
                <h1 class="mb-0">Tableau de bord</h1>
                <div class="small mb-3">
                    <span class="fw-500 text-primary">ManagerTask,</span>
                   pour une meilleure gestion des tâches.
                </div>
            </div>
            <!-- Date range picker example-->
            <div class="input-group input-group-joined border-0 shadow" style="width: 16.5rem">
                <span class="input-group-text"><i data-feather="calendar"></i></span>
                <input class="form-control ps-0 pointer" id="litepickerRangePlugin" placeholder="Select date range..." />
            </div>
        </div>
        <!-- Illustration dashboard card example-->
        <div class="card card-waves mb-4 mt-5">
            <div class="card-body p-5">
                <div class="row align-items-center justify-content-between">
                    <div class="col">
                        <h2 class="text-primary">Transformez vos idées en actions!</h2>
                        <p class="text-gray-700">
                        Bienvenue dans notre système de gestion de tâches intelligent. Libérez votre potentiel en organisant vos journées de manière efficace et en transformant vos objectifs en réalité. Simplifiez la façon dont vous travaillez, collaborez et réalisez des projets.
                        </p>
                        <a class="btn btn-primary p-3" href="{{route('projects-create')}}">
                            Commencez
                            <i class="ms-1" data-feather="arrow-right"></i>
                        </a>
                    </div>
                    <div class="col d-none d-lg-block mt-xxl-n4"><img class="img-fluid px-xl-4 mt-xxl-n5"
                            src="{{asset('assets/img/illustrations/statistics.svg')}}" /></div>
                </div>
            </div>
        </div>
        <div class="mb-3"> Rejoignez-nous dans cette aventure de productivité et d'accomplissement. Ensemble, nous allons créer un avenir plus organisé et plus gratifiant. Commencez dès aujourd'hui!</div>
   
    </div>
@endsection
