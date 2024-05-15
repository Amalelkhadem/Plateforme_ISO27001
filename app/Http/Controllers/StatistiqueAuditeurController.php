<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\UserSession;

class StatistiqueAuditeurController extends Controller
{
    public function index(Request $request)
    {
        $conformityPercentages = null;
        $nameOrganisation = null;
        $errorMessage = null;

if ($request->filled('choisir_le_name_model') && $request->filled('name_organisation')) {
    $nameModels = $request->input('choisir_le_name_model');
    $nameOrganisation = $request->input('name_organisation');

    $project = Project::where('name_organisation', $nameOrganisation)->first();
    $userId = auth()->user()->id;

    if (!$project || !$this->isUserAuthorizedForProject($userId, $project->id)) {
        $errorMessage = "Vous n'êtes pas autorisé à accéder à ce projet";
        $conformityPercentages = null;
    } else {
        $existingModels = [];
        $conformityPercentages = [];

        foreach ($nameModels as $model) {
            $projectModel = Project::where('name_model', $model)
                ->where('name_organisation', $nameOrganisation)
                ->first();

            if ($projectModel) {
                $existingModels[] = $model;
                $conformityPercentages[$model] = $projectModel->conformity_percentage;
            }
        }

        $missingModels = array_diff($nameModels, $existingModels);

        if (!empty($missingModels)) {
            $errorMessage = "Aucune évaluation n'a été effectuée pour les " . implode(', ', $missingModels) . " dans l'organisme : " . $nameOrganisation;
        } else {
            $errorMessage = null;
        }
    }
}

        if ($conformityPercentages === null) {
            $conformityPercentages = []; 
        }

        return view('statistiqueauditeur')->with([
            'conformityPercentages' => $conformityPercentages,
            'nameOrganisation' => $nameOrganisation,
            'errorMessage' => $errorMessage,
        ]);
    }

    private function isUserAuthorizedForProject($userId, $projectId)
    {
        $userSession = UserSession::where('user_id', $userId)
            ->where('project_id', $projectId)
            ->first();

        return !is_null($userSession);
    }
}