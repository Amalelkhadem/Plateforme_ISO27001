<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\RecommandationsController;
use App\Http\Controllers\StatistiqueController;
use App\Http\Controllers\StatistiqueAuditeurController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\IsoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UserController;


/*
Web Routes
Here is where you can register web routes for your application. These
routes are loaded by the RouteServiceProvider and all of them will
be assigned to the "web" middleware group. Make something great!
*/
Route::get('/', function () {
return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'compte'])->name('home');

Auth::routes();

Route::get('/about', [AboutController::class, 'about'])->name('about');

Route::get('/projet', [ProjetController::class, 'index'])->name('projet');
Route::get('/create/form', [ProjetController::class, 'createForm'])->name('create.form');
Route::post('/create', [ProjetController::class, 'create'])->name('create');

Route::get('/admin/admininterface', [AdminController::class, 'adminInterface'])->name('admin.admininterface');
Route::get('/admin/auditeur', [AdminController::class, 'index'])->name('admin.auditeur');



Auth::routes();
Route::post('/store-project-id', [ProjetController::class, 'storeProjectId'])->name('store.project.id');

Route::get('/session_user', [ProjetController::class, 'session_user'])
    ->name('session_user')
    ->middleware('auth');
Route::get('/projet', [ProjetController::class, 'tableau'])->name('projet');
Route::delete('/projet/{id}', [ProjetController::class, 'supprimer'])->name('projet.supprimer');

Route::get('/evaluation/{id}', [EvaluationController::class, 'show'])->name('evaluation');
Route::get('/projects/{projectId}/getUncheckedCategories', [EvaluationController::class, 'getUncheckedCategories'])
    ->name('evaluation.getUncheckedCategories');
Route::get('/personne/{id}', [RecommandationsController::class, 'personne'])->name('personne');
Route::get('/physique/{id}', [RecommandationsController::class, 'physique'])->name('physique');
Route::get('/organisationnelles/{id}', [RecommandationsController::class, 'organisationnelles'])->name('organisationnelles');
Route::get('/technologiques/{id}', [RecommandationsController::class, 'technologiques'])->name('technologiques');


Route::post('/evaluation/calculate', [EvaluationController::class, 'calculateConformity'])->name('evaluation.calculate');

Route::post('/evaluation/{id}/updateConformityPercentage', [EvaluationController::class, 'updateConformityPercentage'])
    ->name('evaluation.updateConformityPercentage');

Route::post('/evaluation/save-unchecked-categories', [EvaluationController::class, 'saveUncheckedCategories'])
    ->name('evaluation.saveUncheckedCategories');


Route::post('/projects/{projectId}/updateUncheckedCategories', [EvaluationController::class, 'updateUncheckedCategories'])->name('projects.updateUncheckedCategories');

Route::post('/evaluations/save', [EvaluationController::class, 'save'])->name('evaluations.save');

// Route pour afficher les statistiques pour l'admin
Route::get('/statistique', [StatistiqueController::class, 'index'])
    ->name('statistique');

// Route pour traiter la soumission du formulaire et afficher les statistiques pour l'admin
Route::post('/statistique', [StatistiqueController::class, 'index']);

// Route pour afficher les statistiques pour l'auditeur
Route::get('/statistiqueauditeur', [StatistiqueAuditeurController::class, 'index'])
    ->name('statistiqueauditeur');

// Route pour traiter la soumission du formulaire et afficher les statistiques pour l'auditeur
Route::post('/statistiqueauditeur', [StatistiqueAuditeurController::class, 'index']);

// Route to archive a project
Route::post('/projects/archive/{id}', [ArchiveController::class, 'archive'])->name('archive');


Route::delete('/archive/{id}', [ArchiveController::class, 'supprimer'])->name('archive.supprimer');

Route::get('/archived-projects', [ArchiveController::class, 'showArchivedProjects'])->name('archived-projects');

// Route a auditeur


Route::delete('/admin/user/{id}/delete', [AdminController::class, 'supprimerUtilisateur'])->name('admin.user.delete');

Route::get('/archived-auditeurs', [ArchiveController::class, 'showArchivedAuditeurs'])->name('archived-auditeurs');
Route::get('/projetauditeur', [AdminController::class, 'projetauditeur'])->name('projetauditeur');

Route::get('admin/auditeur', [AdminController::class, 'searchUsers'])->name('admin.auditeur');
Route::get('/projects/search', [AdminController::class, 'search'])->name('projects.search');

Route::post('/transfer-project/{projectId}', [ProjectController::class, 'transferProject'])->name('transfer.project');

Route::get('/iso', [IsoController::class, 'index'])->name('iso');
Route::get('/mesures-organisationnelles', [IsoController::class, 'mesuresOrganisationnelles'])->name('mesures.organisationnelles');
Route::get('/MesuresPersonnes', [IsoController::class, 'MesuresPersonnes'])->name('MesuresPersonnes');
Route::get('/MesuresSécurité', [IsoController::class, 'MesuresSécurité'])->name('MesuresSécurité');
Route::get('/MesuresTechnologiques', [IsoController::class, 'MesuresTechnologiques'])->name('MesuresTechnologiques');

Route::get('/aide', [EvaluationController::class, 'afficherAide'])->name('aide');

Route::get('/guide',[ProjetController::class, 'guide'])->name('guide');
Route::get('/page',[ProjetController::class, 'page'])->name('page');
Route::get('/service',[ProjetController::class, 'service'])->name('service');

Route::get('/implementation',[HomeController::class, 'implementation'])->name('implementation');



Route::get('/projetauditeur', [AdminController::class, 'transfert'])->name('projetauditeur');
Route::post('/projetauditeur/{id}', [AdminController::class, 'update'])->name('updateSession');

Route::get('admin/user/{id}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
Route::put('admin/user/{id}', [UserController::class, 'update'])->name('admin.user.update');

Route::get('/evaluation/{id}/calculate/sum', [EvaluationController::class, 'calculateSum'])->name('evaluation.calculate.sum');

Route::get('/historique', [AdminController::class, 'historique'])->name('historique');

Route::delete('/historique/{id}', [AdminController::class, 'destroy'])->name('historique.destroy');

Route::get('/historique/evaluation/{id}', [AdminController::class, 'historiqueevaluation'])->name('historiqueevaluation');