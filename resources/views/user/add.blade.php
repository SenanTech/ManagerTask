@extends('layout.template')
@section('contenu')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-xl px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="user"></i></div>
                              Ajouter un utilisateur
                            </h1>
                        </div>
                        <div class="col-12 col-xl-auto mb-3">
                            <a class="btn btn-sm btn-light text-primary" href="{{route('user-list')}}">
                                <i class="me-1" data-feather="arrow-left"></i>
                               Voir la liste
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-4">
            <div class="row">
                <div class="col-xl-4">
                    <!-- Profile picture card-->
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Photo de profil</div>
                        <div class="card-body text-center">
                            <!-- Profile picture image-->
                            <img class="img-account-profile rounded-circle mb-2" src="assets/img/illustrations/profiles/profile-1.png" alt="" />
                            <!-- Profile picture help block-->
                            <div class="small font-italic text-muted mb-4">JPG ou PNG pas plus de 5 Mo</div>
                            <!-- Profile picture upload button-->
                            <button class="btn btn-primary" type="button">Télécharger</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Détails du compte</div>
                        <div class="card-body">
                            <form method="POST" action="{{route('addUser')}}">
                                @csrf
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputFirstName">Nom</label>
                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie" name="name"/>
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLastName">Prénom</label>
                                        <input class="form-control" name="prenom" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna" />
                                    </div>
                                </div>
                                <!-- Form Group (email address)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputEmailAddress">Adresse Email</label>
                                    <input class="form-control" name="email" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com" />
                                </div>
                                <!-- Form Group (Group Selection Checkboxes)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputpassword">Mot de passe</label>
                                    <input class="form-control" name='password' id="inputpassword" type="password" placeholder="Enter your email password..."  />
                                    
                                    <label class="small mb-1" for="inputpasswordconfirm">Confirmer Mot de passe</label>
                                    <input class="form-control" id="inputpasswordconfirm" type="password" placeholder="confirm password..."  />
                                </div>
                                
                                <!-- Submit button-->
                                <button class="btn btn-primary" type="submit">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection