<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Archive; 
use App\Models\UserSession;
use App\Models\UncheckedCategory;


class ProjetController extends Controller
{
    public function index()
    {
        $userId = auth()->id(); 

        $projects = Project::whereHas('userSessions', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->get();

        foreach ($projects as $project) {
            echo "Nom du projet : " . $project->name_project . "<br>";
            echo "Nom de l'organisation : " . $project->name_organisation . "<br>";
            echo "Modèle choisi : " . $project->name_model . "<br>";
        }

        return view('proj');
    }

    public function createForm()
    {
        return view('create_form');
    }

    public function create(Request $request)
{
    $project = new Project();
    $project->name_project = $request->input('name_project');
    $project->name_organisation = $request->input('name_organisation');
    $selectedModules = $request->input('modules');
    
    $optionChoisie = '';
    switch ($selectedModules) {
        case 'leadership':
            $optionChoisie = 'Mesures organisationnelles';
            break;
        case 'policy':
            $optionChoisie = 'Mesures relatives aux personnes';
            break;
        case 'organization':
            $optionChoisie = 'Mesures relatives à la sécurité physique et environnementale';
            break;
        case 'human-resources':
            $optionChoisie = 'Mesures Technologiques';
            break;
    }
    
    $project->name_model = $optionChoisie;

    $project->save();

    $userId = Auth::id();

    $userSession = new UserSession();
    $userSession->project_id = $project->id;
    $userSession->user_id = $userId;
    $userSession->save();

    return redirect()->route('projet')->with('success', 'Le projet a été créé avec succès.');
}

    public function storeProjectId(Request $request)
{
    $projectId = $request->input('projectId');
    $userId = auth()->id();
    $project = new Project();
    $project->user_id = $userId;
    $project->save();

    Session::push('user.projects', $projectId);
    return response()->json(['success' => true]);
}

public function userSessions()
{
    return $this->hasMany(UserSession::class, 'project_id');
}

    public function tableau()
{
    $userId = auth()->id();
    $userSessions = UserSession::where('user_id', $userId)->get();
    $projectIds = $userSessions->pluck('project_id');
    $projects = Project::whereIn('id', $projectIds)->get();
    $uncheckedCategories = UncheckedCategory::first(); 

    return view('projet', compact('projects', 'uncheckedCategories'));
}

    public function supprimer($id)
    {
        $projet = Project::findOrFail($id);
        $projet->delete();
        return redirect()->route('projet')->with('success', 'Le projet a été supprimé avec succès.');
    }

    public function guide()
    {
        return view('guide');
    }
    

}