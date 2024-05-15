<?php

namespace App\Http\Controllers;
use Exception;

use App\Models\Evaluation;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\UncheckedCategory;

class EvaluationController extends Controller
{
    public function show($id)
    {
        // Logique pour récupérer les informations du projet en fonction de l'ID
        $project = Project::findOrFail($id);

        return view('evaluation', compact('project'));
    }

public function calculateSum($id)
{
    $totalValues = UncheckedCategory::where('project_id', $id)->count(); // Nombre total des valeurs dans votre modèle

    $sum = UncheckedCategory::where('project_id', $id)->sum('category_label');
    $conformityPercentage = ($sum / $totalValues) ;

    // Mettez à jour le pourcentage de conformité dans la base de données ou faites d'autres traitements nécessaires

    return response()->json([
        'conformityPercentage' => $conformityPercentage
    ]);
}
 public function updateConformityPercentage($id, Request $request)
    {
        // Récupérer le projet en fonction de l'ID
        $project = Project::findOrFail($id);

        // Mettre à jour le pourcentage de conformité du projet avec la valeur de la requête
        $project->conformity_percentage = $request->input('conformityPercentage');
        $project->save();

        // Retourner une réponse ou effectuer une redirection selon vos besoins
        return response()->json(['success' => true]);
    }
public function updateUncheckedCategories(Request $request, $projectId)
{
    $project = Project::find($projectId);
    $data = $request->input('uncheckedCategories');

    foreach ($data as $item) {
        $phraseEvalue = $item['phrase'];

        // Vérifier si une catégorie non vérifiée existe déjà avec la même phrase_evalue et le même project_id
        $existingCategory = UncheckedCategory::where('project_id', $project->id)
            ->where('phrase_evalue', $phraseEvalue)
            ->first();

        if ($existingCategory) {
            // Mettre à jour la catégorie non vérifiée existante
            $existingCategory->category_label = $item['categoryLabel'];
            $existingCategory->save();
        } else {
            // Créer une nouvelle catégorie non vérifiée
            $uncheckedCategory = new UncheckedCategory();
            $uncheckedCategory->project_id = $project->id;
            $uncheckedCategory->category_label = $item['categoryLabel'];
            $uncheckedCategory->phrase_evalue = $phraseEvalue;
            $uncheckedCategory->save();
        }
    }

    // Répondre avec un message de succès
    return response()->json(['success' => true]);
}

public function getUncheckedCategories($projectId)
{
    $uncheckedCategories = UncheckedCategory::where('project_id', $projectId)->get();

    return response()->json($uncheckedCategories);
}

public function index()
{
    // Récupérer les projets
    $projects = Project::all();

    // Préparer les données pour la vue
    $conformityPercentages = [];
    $modelNames = [
        'Mesures Technologiques',
        'Mesures relatives à la sécurité physique et environnementale',
        'Mesures relatives aux personnes',
        'Mesures organisationnelles'
    ];

    foreach ($projects as $project) {
        // Récupérer le pourcentage de conformité du projet
        $conformityPercentages[] = $project->conformity_percentage ?? 0;
    }

    return view('statistique', compact('conformityPercentages', 'modelNames'));
}
public function afficherAide()
    {
        return view('aide');
    }

     public function save(Request $request)
    {
        // Récupérer les données du formulaire
        $categories = $request->input('categories');
        $phrases = $request->input('phrases');

        $projectId = $request->input('project_id');

        // Enregistrer les évaluations
        foreach ($phrases as $index => $phrase) {
            $valeurEvalue = $categories[$index];

            $evaluations = new Evaluation();
            $evaluations->project_id = $projectId;
            $evaluations->phrase_evalue = $phrase;
            $evaluations->valeur_evalue = $valeurEvalue;
            $evaluations->save();
        }

        return response()->json(['message' => 'Évaluations enregistrées avec succès']);
    }
}
