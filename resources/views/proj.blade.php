@extends('layouts.app')

@section('content')
<div class="container" style="background: #ADD8E6 ; margin: 0 auto; width: 950px; height: 550px;">
    <div class="row justify-content-left">
        <div class="col-md-8">
            <div>
    <p style="color: black;">Pour une évaluation précise et correcte, veuillez consulter ce guide : 
        <a href="{{ route('guide') }}" style="color: #1877F2; text-decoration: underline;">Guide</a>
    </p>
</div>
            <div class="button-container" style="background: linear-gradient(135deg, #ADD8E6 50%, #ADD8E6 50%); border: 1px solid #ccc; padding: 10px; border-radius: 6px;width: 820px;">
    <!-- Contenu de la carte -->

                <!-- Début du container principal -->
                <div class="container" >
                    <!-- Le reste du contenu du container principal -->
                    
                    <!DOCTYPE html>
                    <html>
                    <head>
                        
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-RVg+RNJz5n2V5W2D9BfzzfzLSty2yLKDzDm7v6G/FQ4J7hZz1z5ODu8WwRHMCA6x" crossorigin="anonymous">
                    </head>
                    <body>
                        
<div class="border" style="box-shadow: 0 8px 0px rgba(0, 0, 0, 0.1);font-size: 16px; width: 120px; height: 35px; background-color: #1877F2; border-radius: 6px; display: flex; align-items: center; justify-content: center;">
    <a href="{{ route('create.form') }}" style="color: white; text-decoration: none;">Nouveau projet</a>
</div> <br>
<script>
       $(document).ready(function() {
    // Gère la soumission du formulaire de création de projet
    $('#create-project-form').submit(function(e) {
        e.preventDefault();
        var formData = $(this).serialize();

        // Effectue une requête Ajax pour traiter les données du formulaire
        $.ajax({
            url: '{{ route('create') }}',
            type: 'POST',
            data: formData,
            success: function(response) {
                // Récupère les informations du nouveau projet
                var projectName = response.name_project;
                var organisme = response.organisme;
                var mesureEvaluee = response.mesure_evaluee;

                // Génère le HTML pour afficher le nouveau projet
                var projectHtml = '<div class="project">';
                projectHtml += '<h3>' + projectName + '</h3>';
                projectHtml += '<p><strong>Organisme:</strong> ' + organisme + '</p>';
                projectHtml += '<p><strong>Mesure évaluée:</strong> ' + mesureEvaluee + '</p>';
                projectHtml += '</div>';

                // Ajoute le nouveau projet au conteneur
                $('#project-container').append(projectHtml);

                // Réinitialise le formulaire de création de projet
                $('#create-project-form')[0].reset();
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    });
}); </script>
</body></html>         
                        <div class="search-container">
    <input type="text" id="search-input" placeholder="Rechercher un projet" />
    <button id="search-btn">Rechercher</button>
</div>    
<div id="project-container"></div>
    <table class="table table-bordered" >
    <thead>
        <tr>
            <th>Nom</th>
            <th>Organisme</th>
            <th>Mesure evaluée</th>
            <th>Évaluer</th>
            <th>Archiver</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <!-- Boucle pour afficher les projets récemment créés -->
        @foreach ($projects as $project)
        <tr>
            <td>{{ $project->name_project }}</td>
            <td>{{ $project->name_organisation }}</td>
            <td>{{ $project->name_model }}</td>
            <td>
    @if ($project->conformity_percentage !== null)
        {{ $project->conformity_percentage }}% <br>
        <a href="{{ route('evaluation', $project->id) }}" style="color: green;">Réévaluer</a><br>

        @if($project->name_model == 'Mesures relatives à la sécurité physique et environnementale')
            <a href="{{ route('physique', $project->id) }}" style="color: red;">Recommandations</a>
        @elseif($project->name_model == 'Mesures organisationnelles')
            <a href="{{ route('organisationnelles', $project->id) }}" style="color: red;">Recommandations</a>
        @elseif($project->name_model == 'Mesures Technologiques')
            <a href="{{ route('technologiques', $project->id) }}" style="color: red;">Recommandations</a>
        @elseif($project->name_model == 'Mesures relatives aux personnes')
            <a href="{{ route('personne', $project->id) }}" style="color: red;">Recommandations</a>
        @endif
    @else
        <a href="{{ route('evaluation', $project->id) }}" >Évaluer</a>
    @endif
</td>
<td>
    <!-- Formulaire pour archiver le projet -->
    <form action="{{ route('archive', ['id' => $project->id]) }}" method="POST" class="d-inline">
        @csrf
            <button type="submit" style="box-shadow: 0 8px 0px rgba(0, 0, 0, 0.1);border: none; background: none; color: blue; text-decoration: none; cursor: pointer;">
    <i class="fas fa-archive"></i> <!-- Icône d'archivage -->
</button>
    </form>
</td>      
<td>
    <form id="delete-form-{{ $project->id }}" action="{{ route('projet.supprimer', $project->id) }}" method="POST">
        @csrf
            @method('DELETE')
                <button type="submit" onclick="event.preventDefault(); if (confirm('Êtes-vous sûr de vouloir supprimer ce projet ?')) document.getElementById('delete-form-{{ $project->id }}').submit();">
                    <i class="fas fa-trash-alt" style="border-color: white;"></i> <!-- Icône de corbeille avec cadre blanc -->
                </button>
    </form>
</td>
</tr>
@endforeach
</tbody>
</table></div></div></div></div></div> </div>
@endsection

@section('styles')
<style>
    .welcome-container {
        margin-top: 20px;
        border: 1px solid black;
        padding: 10px;
    }

    .spacer {
        margin-bottom: 20px;
    }
</style>
@endsection