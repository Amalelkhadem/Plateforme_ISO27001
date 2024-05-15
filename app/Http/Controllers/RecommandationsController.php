<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;


class RecommandationsController extends Controller
{
     
    public function personne($id)
    {
        $project = Project::findOrFail($id);

        return view('recommandations.personne', compact('project'));
    }
    public function organisationnelles($id)
    {
        $project = Project::findOrFail($id);

        return view('recommandations.organisationnelles', compact('project'));
    }
    public function technologiques($id)
    {
        $project = Project::findOrFail($id);

        return view('recommandations.technologiques', compact('project'));
    }
    public function physique($id)
    {
        $project = Project::findOrFail($id);
        return view('recommandations.physique', compact('project'));
    }
}
