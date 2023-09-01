@extends('layout.template')

@section('contenu')
    <div class="container-xl px-4 mt-5">
        <!-- Custom page header alternative example-->
        <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
            <div class="me-4 mb-3 mb-sm-0">
                <h1 class="mb-0">Acceuil</h1>

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
                        <h2 class="text-primary">Bienvenue sur notre Application de Gestion de Tâches !</h2>
                        <p class="text-gray-700">Organisez votre vie de manière efficace et restez concentré sur vos
                            objectifs. Notre application conviviale vous permet de créer, suivre et gérer vos tâches en
                            toute simplicité. Ne laissez plus rien au hasard et optimisez votre productivité.

                            Que vous soyez un professionnel occupé ou simplement à la recherche d'une meilleure
                            organisation, notre application est là pour vous aider. Commencez dès aujourd'hui à planifier,
                            exécuter et accomplir vos tâches de manière transparente.

                            Nous sommes ravis de vous accompagner dans votre parcours vers une gestion des tâches plus
                            efficace et une vie plus équilibrée. N'hésitez pas à explorer toutes les fonctionnalités que
                            nous offrons et à créer un espace où vos idées se transforment en réalisations concrètes.

                            Merci d'avoir choisi notre application. Préparez-vous à relever de nouveaux défis et à réaliser
                            vos rêves, une tâche à la fois.</p>
                        
                    </div>
                    <div class="col d-none d-lg-block mt-xxl-n4"><img class="img-fluid px-xl-4 mt-xxl-n5"
                            src="assets/img/illustrations/statistics.svg" /></div>
                </div>
            </div>
        </div>
        
    </div>
@endsection
