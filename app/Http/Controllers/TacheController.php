<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Tache;
use App\Models\Project;
use App\Models\User;

class TacheController extends Controller
{
    public function liste($id)
    {
        $tache = Tache::where('projet_id',$id)->get();
        return view('tache.list', ['tache'=>$tache, 'projet_id'=>$id ]);
    }

    public function fuserTacheListe($id)
    {
        
    }


    public function create($id)
    {
        $project = Project::find($id);
        $utilisateurs = User::where('role','user')->get();
        return view('tache.create',['project'=>$project, 'utilisateurs'=>$utilisateurs]);
    }



    public function store(Request $request)
    {
        // Valider les données du formulaire de création de tâche
        $request->validate([
            'projet_id'=> ['required','numeric'],
            'titre' => 'required|max:255',
            'description' => 'required',
            'dateCreation' => 'required|date',
            'dateEcheance' => 'required|date',
            
            'user_id'=>['required', 'numeric'],
        ]);

        $tache = new Tache();
        $tache->projet_id = $request->input('projet_id');
        $tache->user_id = $request->input('user_id');
        $tache->titre = $request->input('titre');
        $tache->description = $request->input('description');
        $tache->dateCreation = $request->input('dateCreation');
        $tache->dateEcheance = $request->input('dateEcheance');
        $tache->statut_id = 1;
        $tache->save();

        session()->flash('success', 'Tâche créée avec succès ' );

        return redirect()->route('tache-list',$tache->projet_id  );
        
    }

    public function userTacheListe()
    {
        $taches = Tache::join('projects', 'taches.projet_id', 'projects.id')
        ->join('statuts', 'taches.statut_id', 'statuts.id')
        ->where('taches.user_id', Auth::user()->id)
        ->select(['taches.*', 'projects.*', 'projects.id as projects_id', 'taches.id as tache_id'])
        ->get();

        // Regrouper les tâches par projet en utilisant la clé 'projects_id'
        $tachesParProjet = $taches->groupBy('projects_id');

        return view('tache.userList', ['tachesParProjet' => $tachesParProjet]);

    }
        
    public function tacheAction($id)
    {
        $tache = Tache::find($id);
        return view("tache.action", ['tache'=>$tache]);
    }
}