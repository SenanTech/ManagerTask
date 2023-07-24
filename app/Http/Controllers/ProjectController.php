<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    public function liste(){
        $projects = Project::all();
        return view('projects.list', ['projects' => $projects, 'success' => 'Projet créé avec succès.']);
    }

    public function create()
    {
        // Afficher le formulaire de création de projet
        return view('projects.create');
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire de création de projet
       $validateData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
         
        ]);

        $project = new Project();
        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->start_date = $request->input('start_date');
        $project->end_date = $request->input('end_date');
        $project->save();

        // Rediriger vers une page appropriée avec un message de succès
        
        session()->flash('success', 'Projet créé avec succès.');

        return redirect()->route('projects-list');
    }


    public function edit($id)
    {
        $project = Project::find($id);
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request)
    {
        // Valider les données du formulaire d'édition de projet
        $request->validate([
            'id_projet'=>['required','numeric'],
            'name' => 'required|max:255',
            'description' => 'nullable',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        
        ]);
        $project = Project::find($request->input('id_projet'));
        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->start_date = $request->input('start_date');
        $project->end_date = $request->input('end_date');
        $project->save();

        // Rediriger vers la liste des projets avec un message de succès
        session()->flash('success', 'Projet mis à jour avec succès.');

        return redirect()->route('projects-list');
        
    }

    public function destroy(Project $project, $id)
    {
        // Supprimer le projet de la base de données
        $project = Project::find($id);
        $project->delete();

        session()->flash('success', 'Projet supprimé avec succès.');

        return redirect()->route('projects-list');
    }
}


    
