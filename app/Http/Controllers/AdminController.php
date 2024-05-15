<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\UserSession;
use App\Models\Historique;
use App\Models\UncheckedCategory;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
   public function adminInterface()
    {
        $users = User::all(); // Récupérer la liste de tous les utilisateurs

        return view('admin.admininterface', compact('users'));
    }

   
    public function index()
    {
        // Récupérer la liste de tous les utilisateurs
        $users = User::all();

        // Charger la vue 'auditeur.blade.php' avec la liste des utilisateurs
        return view('admin.auditeur', compact('users'));
    }

 public function supprimerUtilisateur($id)
{
    $user = User::findOrFail($id);

    if ($user) {
        $user->delete();
        return redirect()->back()->with('success', 'L\'utilisateur a été supprimé avec succès.');
    }

    return redirect()->back()->with('error', 'L\'utilisateur n\'existe pas.');
}
public function searchUsers(Request $request)
    {
        $searchTerm = $request->query('search');

        $users = User::where('name', 'like', '%'. $searchTerm .'%')->get();

        return view('admin.auditeur', ['users' => $users]);
    }


public function search(Request $request)
{
    $searchQuery = $request->input('search');

    $projects = Project::where('name_project', 'like', "%$searchQuery%")
        ->orWhere('name_organisation', 'like', "%$searchQuery%")
        ->orWhere('name_model', 'like', "%$searchQuery%")
        ->orWhereHas('users', function ($query) use ($searchQuery) {
            $query->where('name', 'like', "%$searchQuery%");
        })
        ->get();

    return view('projetauditeur', compact('projects'));
}
public function projetauditeur()
{
    $projects = Project::with('users')->get();

    return view('projetauditeur', compact('projects'));
}

    public function transfert()
    {
        $sessions = UserSession::all();
        $users = User::all();
        $projects = Project::all();

        return view('projetauditeur', compact('sessions', 'users', 'projects'));
    }


  public function update(Request $request, $sessionId)
{
    $session = UserSession::findOrFail($sessionId);
    $project = $session->project; // Assumant qu'il y a une relation "project" définie dans le modèle UserSession

    $previousUserId = $session->user_id;
    $session->user_id = $request->input('selected_user_id');
    $session->save();

    // Récupérer les informations nécessaires pour l'historique
    $projetTransferer = $project->name_project;
    $pourcentageConformite = $project->conformity_percentage;
    $nomAuditeurEmetteur = User::findOrFail($previousUserId)->name; // Nom de l'auditeur précédent
    $nomAuditeurRecepteur = User::findOrFail($request->selected_user_id)->name; // Nom du nouvel auditeur
    $dateTransfert = now();

    // Enregistrer l'historique du transfert
    Historique::create([
        'nom_projet' => $projetTransferer,
        'pourcentage_conformite' => $pourcentageConformite,
        'nom_auditeur_emetteur' => $nomAuditeurEmetteur,
        'nom_auditeur_recepteur' => $nomAuditeurRecepteur,
        'date_transfert' => $dateTransfert,
    ]);

    return redirect()->back()->with('success', 'User updated successfully.');
}
     public function historique()
    {
        $historique = Historique::all();
        
        return view('historique')->with('historique', $historique);
    }
     public function destroy($id)
    {
        $historique = Historique::findOrFail($id);
        $historique->delete();

        return redirect()->back()->with('success', 'Historical record deleted successfully.');
    }


public function historiqueevaluation($id)
{
    // Récupérez les enregistrements de la table historiques avec le même project_id que celui passé dans le lien hypertexte
    $historiques = Historique::where('project_id', $id)->get();
    $uncheckedCategories = [];

    foreach ($historiques as $historique) {
        // Récupérez l'instance du projet associé à l'historique
        $project = Project::find($historique->project_id);

        if ($project) {
            // Récupérez les catégories non vérifiées pour ce projet
            $categories = UncheckedCategory::where('project_id', $project->id)->get(['category_label','phrase_evalue']);

            // Ajoutez les catégories non vérifiées à la liste globale
            $uncheckedCategories = array_merge($uncheckedCategories, $categories->toArray());
        }
    }

    // Passez la variable $uncheckedCategories à la vue 'historiqueevaluation'
    return view('historiqueevaluation', compact('uncheckedCategories'));
}
function syncProjectIds()
{
    $projectIds = Project::pluck('id')->toArray();
    
    Historique::all()->each(function ($historique) use ($projectIds) {
        $historique->project()->sync($projectIds);
    });
}
}


