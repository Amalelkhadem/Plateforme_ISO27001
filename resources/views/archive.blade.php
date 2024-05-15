<!-- Contenu de archive.blade.php -->
@extends('layouts.app')

@section('styles')
    @parent
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endsection
@section('content')
            
        <div class="container">
    <div class="row justify-content-left">
        <div class="col-md-8" style="background-color: #E0F0FF; border-radius: 8px; padding: 20px; margin: 0 auto; width: 950px;">
            
               <div style="text-align: center;">
                <h2>Projets archivés</h2>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="padding: 10px; border: 1px solid #ccc; background-color: #E6E6E6; font-weight: bold;">Nom du projet</th>
                            <th style="padding: 10px; border: 1px solid #ccc; background-color: #E6E6E6; font-weight: bold;">Organisation</th>
                            <th style="padding: 10px; border: 1px solid #ccc; background-color: #E6E6E6; font-weight: bold;">Modèle</th>
                            <th style="padding: 10px; border: 1px solid #ccc; background-color: #E6E6E6; font-weight: bold;">Evaluation</th>
                            <th style="padding: 10px; border: 1px solid #ccc; background-color: #E6E6E6; font-weight: bold;">Supprimer projet</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Boucle pour afficher les projets archivés -->
                        @foreach ($archives as $archive)
                            <tr>
                                <td>{{ $archive->name_project }}</td>
                                <td>{{ $archive->name_organisation }}</td>
                                <td>{{ $archive->name_model }}</td>
                                <td>{{ $archive->conformity_percentage }}</td>
                                <td>
    <form id="delete-form-{{ $archive->id }}" action="{{ route('archive.supprimer', $archive->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="event.preventDefault(); if (confirm('Êtes-vous sûr de vouloir supprimer ce projet ?')) document.getElementById('delete-form-{{ $archive->id }}').submit();">
        <i class="fas fa-trash-alt"></i> <!-- Icône de corbeille -->
    </button>
</form>
</td>
                               
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection