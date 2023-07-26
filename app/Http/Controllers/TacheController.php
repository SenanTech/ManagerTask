<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tache;
use App\Models\Project;
use App\Models\User;

class TacheController extends Controller
{
    public function liste($id)
    {
       /* $tache = Tache::where('projet_id',$id)->get();

        $statut = Tache::join('users', 'taches.user_id','users.id')
        ->join( 'statuts', 'taches.statut_id','statuts.id')
        ->select(['taches.*', 'users.name', 'users.prenom', 'statuts.titre as titre_statut'])
        ->get();

        return view('tache.list', ['tache'=>$tache, 'projet_id'=>$id, 'statut'=>$statut]);
        */
        
        $tache = Tache::join('users', 'taches.user_id','users.id')
        ->join( 'statuts', 'taches.statut_id','statuts.id')
        ->where('taches.projet_id',$id)
        ->select(['taches.*', 'users.name', 'users.prenom', 'statuts.titre as titre_statut'])
        ->get();

        return view('tache.list', ['tache'=>$tache, 'projet_id'=>$id]);

    }
    public function show()
    {
        $task = Tache::join('users', 'taches.user_id','users.id')
        ->join( 'statuts', 'taches.statut_id','statuts.id')
        ->join('projects', 'taches.projet_id', 'projects.id')
        ->select(['taches.*', 'users.name', 'users.prenom', 'statuts.titre as titre_statut', 'projects.name as name_projet'])
        ->get();

        return view('tache.show', ['task'=>$task]);
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
        $tache->save();

        session()->flash('success', 'Tâche créée avec succès ' );

        return redirect()->route('tache-list',$tache->projet_id  );
        
    }

    

        public function edit($id, $idProjet)
    {
    $tache = Tache::find($id);
    $project = Project::find($idProjet);
        $utilisateurs = User::where('role','user')->get();
        return view('tache.edit',['project'=>$project, 'utilisateurs'=>$utilisateurs,'tache'=>$tache]);
   
    }


    public function update(Request $request, $id)
    {
  
    $request->validate([
        'projet_id'=>['required','numeric'],
        'titre' => 'required|max:255',
        'description' => 'required',
        'dateCreation' => 'required|date',
        'dateEcheance' => 'required|date',
        'user_id'=>['required', 'numeric'],
        
    ]);
   
    $tache = Tache::find($id);
    $tache->user_id = $request->input('user_id');
    $tache->titre = $request->input('titre');
    $tache->description = $request->input('description');
    $tache->dateCreation = $request->input('dateCreation');
    $tache->dateEcheance = $request->input('dateEcheance');
    $tache->save();

   
    session()->flash('success', 'Tâche mis à jour avec succès.');

    return redirect()->route('tache-list',  $tache->projet_id );

    
    
}

public function destroy($id)
{
    $tache = Tache::find($id);
    $tache->delete();

    // Redirigez vers la liste des tâches après la suppression
    return redirect()->back();
}

        
    




}
