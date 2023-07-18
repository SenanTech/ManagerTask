@extends('layout.template');

@section('contenu')

<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
    <div class="container-xl px-4">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="user"></i></div>
                        Account Settings - Profile
                    </h1>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
        <a class="nav-link active ms-0" href={{route("account")}}>Profile</a>
        <a class="nav-link" href={{route("security")}}>Security</a>
        <a class="nav-link" href="account-notifications.html">Notifications</a>
    </nav>
    <hr class="mt-0 mb-4" />
    @yield('profileContent')
</div>    
@endsection