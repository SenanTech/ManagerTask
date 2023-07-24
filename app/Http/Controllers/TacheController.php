<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tache;
use App\Models\Project;

class TacheController extends Controller
{
    public function liste($id)
    {
        $tache = Tache::where('projet_id',$id)->get();
        return view('tache.list', ['tache'=>$tache, 'projet_id'=>$id ]);
    }

  


    public function create($id)
    {
        $project = Project::find($id);
        return view('tache.create', compact('project'));
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
            // Autres règles de validation si nécessaire
        ]);

        $tache = new Tache();
        $tache->projet_id = $request->input('projet_id');
        $tache->titre = $request->input('titre');
        $tache->description = $request->input('description');
        $tache->dateCreation = $request->input('dateCreation');
        $tache->dateEcheance = $request->input('dateEcheance');
        $tache->statut_id = 0;
        $tache->save();

        session()->flash('success', 'Tâche créée avec succès ' );

        return redirect()->route('tache-list');
        
    }
        
    




}

