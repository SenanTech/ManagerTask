@extends('layout.template')
@section('contenu')
@section('contenu')


        <main>
            <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                <div class="container-xl px-4">
                    <div class="page-header-content">
                        <div class="row align-items-center justify-content-between pt-3">
                            <div class="col-auto mb-3">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="user"></i></div>
                                    Modifier l'utilisateur
                                </h1>
                            </div>
                            <div class="col-12 col-xl-auto mb-3">
                                <a class="btn btn-sm btn-light text-primary" href={{ route('list') }}>
                                    <i class="me-1" data-feather="arrow-left"></i>
                                    Retourner à la liste utilisateur
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
                            <div class="card-header">Photo de profile</div>
                            <div class="card-body text-center">
                                <!-- Profile picture image-->
                                <img class="img-account-profile rounded-circle mb-2"
                                    src="assets/img/illustrations/profiles/profile-1.png" alt="" />
                                <!-- Profile picture help block-->
                                <div class="small font-italic text-muted mb-4">JPG ou PNG ne dépassant pas 5 Mo</div>
                                <!-- Profile picture upload button-->
                                <button class="btn btn-primary" type="button">Télélverser un fichier</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <!-- Account details card-->
                        <div class="card mb-4">
                            <div class="card-header">Détaille du compte</div>
                            <div class="card-body">
                                <!-- Form Row-->
                                <form action="{{ route('user-update', $user->id) }}" method="POST">
                                    @csrf
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (first name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputFirstName">Nom</label>
                                            <input class="form-control" id="inputFirstName" type="text"
                                                placeholder="Enter your first name" value={{ $user->name }}
                                                name="name" />
                                        </div>
                                        <!-- Form Group (last name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputLastName">Prenom</label>
                                            <input class="form-control" id="inputLastName" type="text"
                                                placeholder="Enter your last name" value={{ $user->prenom }}
                                                name="prenom" />
                                        </div>
                                    </div>
                                    <!-- Form Group (email address)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputEmailAddress">Addresse mail</label>
                                        <input class="form-control" id="inputEmailAddress" type="email"
                                            placeholder="Enter your email address" value={{ $user->email }} name="email"
                                            name="email" />
                                    </div>

                                    <!-- password-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputpassword">Mot de passe</label>
                                        <input class="form-control" id="inputpassword" type="password"
                                            placeholder="Enter your password" name="password" />
                                    </div>

                                    <!-- password confirm-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="confirmpassword">Confirmer mot de passe</label>
                                        <input class="form-control" id="confirmpassword" type="password" placeholder="Confirm your password"
                                            autocomplete="new-password">
                                    </div>

                                    <!-- Form Group (Roles)-->
                                    <div class="mb-3">
                                        <label class="small mb-1">Role</label>
                                        <select class="form-select" aria-label="Default select example" name="role">
                                            <option selected="" disabled="">Selectionner un role</option>
                                            <option value="admin">Administrateur</option>
                                            <option value="user" selected="">Utilisateur</option>
                                        </select>
                                    </div>
                                    <!-- Submit button-->
                                    <button class="btn btn-primary" type="submit">Enregistrer les modification</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </main>

    </div>

        </div>
    </main>

</div>

@endsection
