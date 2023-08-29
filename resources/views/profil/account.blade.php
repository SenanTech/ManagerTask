@extends('profil.headerNav')
@section('profileContent')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Photo de profil </div>
                <form enctype="multipart/form-data" method="post" action="{{route('addimage')}}" class="card-body text-center">
                    <!-- Profile picture image-->
                    @csrf
                    @if( ! is_null(Auth::user()->photos))
                    <img class="img-account-profile rounded-circle mb-2" src="{{asset('public/'.Auth::user()->photos)}}"
                        alt="" />
                    @else
                        <img class="img-account-profile rounded-circle mb-2" src="assets/img/illustrations/profiles/profile-1.png"
                        alt="" />
                    @endif
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG ou PNG moins de 5 MB</div>
                    <input type="file" name="image" id="" >
                    <!-- Profile picture upload button-->
                    <button class="btn btn-primary mt-3" type="submit">Modifier</button>
                </form>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Détails de votre compte</div>
                <div class="card-body">
                    <form method="POST" action="{{route('accountUpdate')}}">
                        @csrf

                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">Nom</label>
                                <input class="form-control" name="name" id="inputFirstName" type="text" value="{{Auth::user()->name}}" />
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Prénom</label>
                                <input class="form-control" name="prenom" id="inputLastName" type="text" value="{{Auth::user()->prenom}}" />
                            </div>
                        </div>
                        <!-- Form Row -->
                        
                       @if (Auth::user()->role == 'admin')

                         <!-- Form Group (email address)-->
                         <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Adresse Email</label>
                            <input class="form-control" name="email" id="inputEmailAddress" type="email" value="{{Auth::user()->email}}" />
                        </div>
                           
                       @endif
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Téléphone</label>
                                <input class="form-control" id="inputPhone" type="tel"
                                    placeholder="Enter your phone number" value="00-00-00-00" />
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
