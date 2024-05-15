<?php

namespace App\Http\Controllers;
     use Illuminate\Support\Facades\Auth;

use App\Models\UserSession;
use App\Models\Archive;
use App\Models\Project;
use Illuminate\Http\Request;


class ArchiveController extends Controller
{

public function archive($id)
{
    $project = Project::findOrFail($id);
    $userId = Auth::id();

    Archive::create([
        'name_project' => $project->name_project,
        'name_organisation' => $project->name_organisation,
        'name_model' => $project->name_model,
        'conformity_percentage' => $project->conformity_percentage,
        'user_id' => $userId,
    ]);

    $project->delete();

    return redirect()->back()->with('success', 'Le projet a été archivé avec succès.');
}
    public function showArchivedProjects()
{
    $userId = auth()->id();

    $archives = Archive::where('user_id', $userId)
        ->with('project')
        ->get();

    return view('archive', compact('archives'));
}
    public function supprimer($id)
    {
        $archive = Archive::findOrFail($id);

        $archive->delete();

        return redirect()->route('archived-projects')->with('success', 'Le projet a été supprimé avec succès.');
    }
    

}
