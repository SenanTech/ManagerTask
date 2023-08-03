@extends('layout.template')
@section('contenu')
    <style>
        main {
            height: 100%;
            margin: 0;
        }

        .card {
            background: transparent;

        }

        .left {
            float: left;
            width: 70%;
        }

        .right {
            float: right;
            width: 30%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .centered {
            border: solid rgb(203, 200, 200) 2px;
            border-ra background: whitesmoke;
            padding: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            box-shadow: 0 2px 5px rgba(0, 2, 2, 0.1);
        }

        .formulaire {
            width: 75%;
            z-index: 999;
            position: fixed
        }

        select {
            float: left;
            width: 100%;
            border-radius: 5px;
            margin-left: 50px;
            border: solid rgb(221, 220, 220) 2px;
            height: 30px;

        }
    </style>
    <div class="centered">
        <form action="{{ route('post-comment', $tache->id) }}" method="post" class="formulaire">
            <div class="card left">
                <div class="card-header">
                    <h3>Tâches : {{ $tache->titre }}</h3>
                </div>
                <div class="card-body bg-white">
                    <h5>Descrition</h5>
                    <textarea class="form-control" disabled row="3" style="background: white">{{ $tache->description }}</textarea>
                </div>
                <div class="card-footer bg-white">
                    <div class="row">
                        @csrf
                        <div class="form-outline w-100">
                            {{-- <span style="margin-left: 40px">{{ Auth::user()->name }} {{ Auth::user()->prenom }}</span> --}}
                            <div style="display: flex; align-items:flex-start">
                                <div class="avatar">
                                    <img class="avatar-img img-fluid  avatar-lg" style="margin: 10px" src="{{ asset('assets/img/illustrations/profiles/profile-1.png') }}">
                                </div>
                                <textarea class="form-control" name="commentaire" id="textAreaExample" rows="3" style="margin:6px"></textarea>
                            </div>
                        </div>
                        <div class="float-end mt-2 pt-1">
                            <button type="submit" class="btn btn-primary btn-sm">Enregistrer</button>
                            <button type="reset" class="btn btn-outline-primary btn-sm">Effacer</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <select id="floatingSelect" aria-label="Floating label select example" name="statut">
                    <option>Statut de la tâche</option>
                    <option value="3">En attente</option>
                    <option value="4">Terminé</option>
                    <option value="2">En cours</option>
                </select>
            </div>
        </form>

    </div>
@endsection
