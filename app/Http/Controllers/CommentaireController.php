<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Tache;
use App\Models\Commentaire;

class CommentaireController extends Controller
{
    public function postComment(Request $request, $id)
    {
        $request->validate([
            'commentaire'=> 'string',
        ]);
        
        $commentaire = new Commentaire();
        $commentaire->contenu = $request->input('commentaire');
        $commentaire->task_id = $id;
        $commentaire->auteur_id = Auth::user()->id;
        $commentaire->save();
        return view('home');
    }

}