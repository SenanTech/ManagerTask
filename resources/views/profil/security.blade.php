@extends('profil.headerNav');
@section('profileContent')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<div class="row">
    <div class="col-lg-8">
        <!-- Change password card-->
        <div class="card mb-4">
            <div class="card-header">Changer mot de passe</div>
            <div class="card-body">
                <form method="POST" action="{{route('passwordUpdate')}}">
                    @csrf
                    <!-- Form Group (current password)-->
                    <div class="mb-3">
                        <label class="small mb-1" for="currentPassword">Ancien</label>
                        <input class="form-control" id="currentPassword" type="password" placeholder="Ancien mot de passe" name="currentPassword"/>
                    </div>
                    <!-- Form Group (new password)-->
                    <div class="mb-3">
                        <label class="small mb-1" for="newPassword">Nouveau</label>
                        <input class="form-control" id="newPassword" type="password" placeholder="Nouveau mot de passe" name="password"/>
                    </div>
                    <!-- Form Group (confirm password)-->
                    <div class="mb-3">
                        <label class="small mb-1" for="confirmPassword">Confirmer</label>
                        <input class="form-control" id="confirmPassword" type="password" placeholder="Confirmer votre mot de passe" />
                    </div>
                    <button class="btn btn-primary" type="submit">Modifier</button>
                </form>
            </div>
        </div>
    
</div>
@endsection