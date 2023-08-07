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


        .centered {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 80%;
            margin: 0 auto;
        }

        .formulaire {
            padding:20px;
            width: 60%;
            height: 100%;
            position: absolute
        }

        select {
            float: left;
            width: 100%;
            border-radius: 5px;
            margin-left: 50px;
            border: solid rgb(221, 220, 220) 2px;
            height: 30px;

        }

        /* Styles pour les commentaires */
        .comment-item {
            display: flex;
            align-items: flex-start;
        }

        .avatar {
            margin-right: 10px;
        }

        .avatar-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .comment-content {
            flex: 1;
            border-radius: 5px;
            padding: 8px;
            background-color: whitesmoke;
        }

        /* Style pour les diviseurs entre les commentaires */
        hr {
            border: none;
            border-top: 1px solid #e0e0e0;
        }
    </style>
    <div class="centered">
        <form action="{{ route('post-comment', $tache->id) }}" method="post" class="formulaire">
            <div class="card">
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
                                <textarea class="form-control" name="commentaire" id="textAreaExample" rows="3" style="margin:6px"></textarea>
                            </div>
                        </div>
                        <div class="float-end mt-2 pt-1">
                            <button type="submit" class="btn btn-primary btn-sm">Enregistrer</button>
                            <button type="reset" class="btn btn-outline-primary btn-sm">Effacer</button>
                        </div>
                    </div>
                    <div style="margin-top: 10px; max-height: 300px; overflow-y: auto;">
                        @foreach ($commentaires as $comment)
                            <div class="comment-item">
                                <div class="avatar">
                                    <img class="avatar-img img-fluid  avatar-lg" style="margin: 10px"
                                        src="{{ asset('assets/img/illustrations/profiles/profile-1.png') }}">
                                </div>
                                <div class="comment-content">
                                    <p>{{ $comment->contenu }}</p>
                                </div>
                            </div>
                            <hr style="margin: 10px 0;">
                        @endforeach
                    </div>
                </div>
            </div>
    </div>
    </form>

    </div>
@endsection
