@extends('layout.template2')

@section('contenu')
<h1>Coucou {{ Auth::user()->name }}, bienvenue sur ton dashboard</h1>
@endsection


