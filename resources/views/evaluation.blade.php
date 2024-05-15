@extends('layouts.app')

@section('content')
<html>
<head>
    <title>Évaluation de conformité ISO 27001</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    
    th, td {
        text-align: left;
        padding: 8px;
        border: 1px solid black;
    }
    
    th {
        background-color: #f2f2f2;
    }
    
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    .alerte {
            background-color: yellow;
            padding: 5px;
            border: 1px solid black;
        }
    
</style>
<script>
       function afficherAlerte(phrase, cellule) {
            cellule.innerHTML += '<div class="alerte" style="color: blue;">' + phrase + '</div>';
        }

        function cacherAlerte(cellule) {
            var alerte = cellule.getElementsByClassName('alerte')[0];
            alerte.parentNode.removeChild(alerte);
        }
    </script>
</head>
<body>
<div class="container" style="background: linear-gradient(125deg, #E0F0FF 50%, #ADD8E6 50%); box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 8px; padding: 20px; margin: 0 auto; max-width: 1000px;">
    <div class="container" style="max-width: 1050px; text-align: center;">
        <p>Pour bien évaluer la conformité à la norme de chaque mesure, veuillez consulter ce document :
            <a href="{{ route('aide') }}" style="font-size: 25px;color:red; text-decoration: underline;">Guide d'évaluation</a>
        </p>
    </div>
    <div class="checkbox-list"
         style="background: linear-gradient(125deg, #ADD8E6 50%, #E0F0FF 50%); box-shadow: 0 10px 6px rgba(0, 0, 0, 0.1); border-radius: 6px;width: 1000px;  padding: 20px; margin: 0 auto;border: 1px solid transparent; ">

        <h1 style="font-size: 24px; margin-bottom: 20px; text-align: center; font-family: 'Verdana Pro Black', Verdana, sans-serif;">
            Évaluation de conformité à la norme ISO 27001 <br>
            <span style="color: #800000; font-size: 20px;">{{ $project->name_model }}</span>
        </h1>

        <!-- Les cases à cocher -->
        <form action="{{ route('evaluation.calculate') }}" method="post">
            @csrf
            @method('POST')

<table>
    
    <tr>
        <th style="border: 1px solid black; width: 600px">Mesure</th>
        <th style="border: 1px solid black;">Pourcentage de conformité</th>
        @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
                <th style="border: 1px solid black;">Evaluations précédentes</th>
                @endif


    </tr>
            @if($project->name_model == 'Mesures relatives aux personnes')
                
<tr>
    <td style="border: 1px solid black;" onmouseover="afficherAlerte('Des vérifications du passé des candidats devant devenir du personnel doivent être effectuées avant leur intégration dans l\'organisation et de manière continue, en tenant compte des lois, réglementations et éthiques applicables, et proportionnellement aux exigences commerciales, à la classification des informations auxquelles ils auront accès et aux risques perçus.', this)" onmouseout="cacherAlerte(this)">A6.1 Sélection des candidats :</td>
    <td style="border: 1px solid black;">
        <select id="select_values" onchange="showSelectedValue(this)">
            <option value="">Sélectionner une valeur</option>
            <option value="0">0</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="75">75</option>
            <option value="100">100</option>
        </select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
</tr>

<tr>
    <td style="border: 1px solid black;" onmouseover="afficherAlerte('Des vérifications du passé des candidats devant devenir du personnel doivent être effectuées avant leur intégration dans l\'organisation et de manière continue, en tenant compte des lois, réglementations et éthiques applicables, et proportionnellement aux exigences commerciales, à la classification des informations auxquelles ils auront accès et aux risques perçus.', this)" onmouseout="cacherAlerte(this)">A6.2 Termes et conditions d'embauche :</td>
    <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
</tr>
        <tr>
            <td style="border: 1px solid black;" onmouseover="afficherAlerte('Le personnel de l\'organisation et les parties intéressées concernées doivent recevoir une sensibilisation, un apprentissage et une formation appropriés en matière de sécurité de l\'information. Ils doivent également être tenus informés régulièrement de la politique de sécurité de l\'information de l\'organisation, ainsi que des politiques et procédures spécifiques à leur domaine d\'activité.', this)" onmouseout="cacherAlerte(this)">A6.3 Sensibilisation, apprentissage et formation liée à la sécurité de l'information :</td>
    <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
        </tr>
    <tr>
        <td style="border: 1px solid black;" onmouseover="afficherAlerte('Un processus disciplinaire doit être formalisé et communiqué pour prendre des mesures contre le personnel et les autres parties intéressées concernées qui ont commis une violation de la politique de sécurité de l\'information.', this)" onmouseout="cacherAlerte(this)">A6.4 Processus disciplinaire :</td>
    <td style="border: 1px solid black;">
        <select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>
        <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les responsabilités et obligations en matière de sécurité de l\'information qui demeurent après la cessation ou le changement d\'emploi doivent être définies, appliquées et communiquées au personnel concerné et aux autres parties intéressées.', this)" onmouseout="cacherAlerte(this)">A6.5 Responsabilités après la cessation ou le changement d'emploi :</td>
    <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>
        <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les accords de confidentialité ou de non-divulgation reflétant les besoins de l\'organisation en matière de protection des informations doivent être identifiés, documentés, régulièrement revus et signés par le personnel et les autres parties intéressées concernées.', this)" onmouseout="cacherAlerte(this)">A6.6 Accords de confidentialité ou de non-divulgation :</td>
    <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>

    <tr>
        <td style="border: 1px solid black;" onmouseover="afficherAlerte('Des mesures de sécurité doivent être mises en œuvre lorsque le personnel travaille à distance pour protéger les informations consultées, traitées ou stockées en dehors des locaux de l\'organisation.', this)" onmouseout="cacherAlerte(this)">A6.7 Le télétravail :</td>
    <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>
        <td style="border: 1px solid black;" onmouseover="afficherAlerte('L\'organisation doit fournir un mécanisme permettant au personnel de signaler les événements de sécurité de l\'information observés ou suspectés par les canaux appropriés en temps opportun.', this)" onmouseout="cacherAlerte(this)">A6.8 Rapports sur les événements de sécurité de l'information :</td>
    <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>

            
                        @endif


            @if($project->name_model == 'Mesures relatives à la sécurité physique et environnementale')

            <tr>
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Des périmètres de sécurité doivent être définis et utilisés pour protéger les zones contenant des informations et d\'autres actifs associés.', this)" onmouseout="cacherAlerte(this)">A7.1 Périmètres de sécurité physique :</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
            </tr>
            <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les zones sécurisées doivent être protégées par des contrôles d\'entrée et des points d\'accès appropriés.', this)" onmouseout="cacherAlerte(this)">A7.2 Contrôle d'accès physique</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>

    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('La sécurité physique des bureaux, des salles et des équipements doit être conçue et mise en œuvre.', this)" onmouseout="cacherAlerte(this)">A7.3 Sécurisation des bureaux, des salles et des équipements</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>

    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les locaux doivent être surveillés en permanence pour détecter tout accès physique non autorisé.', this)" onmouseout="cacherAlerte(this)">A7.4 Surveillance de la sécurité physique</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('La protection contre les menaces physiques et environnementales, telles que les catastrophes naturelles et autres menaces physiques intentionnelles ou non intentionnelles pour les infrastructures, doit être conçue et mise en œuvre.', this)" onmouseout="cacherAlerte(this)">A7.5 Protection contre les menaces physiques et environnementales</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Des mesures de sécurité pour travailler dans des zones sécurisées doivent être conçues et mises en œuvre.', this)" onmouseout="cacherAlerte(this)">A7.6 Travail en zones sécurisées</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Des règles de bureau claires pour les papiers et les supports de stockage amovibles et des règles d\'écran claires pour les installations de traitement de l\'information doivent être définies et correctement appliquées.', this)" onmouseout="cacherAlerte(this)">A7.7 Bureau clair et écran clair</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('L\'équipement doit être placé en toute sécurité et protégé.', this)" onmouseout="cacherAlerte(this)">A7.8 Implantation et protection des équipements</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
        <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les actifs hors site doivent être protégés.', this)" onmouseout="cacherAlerte(this)">A7.9 Sécurité des actifs hors site</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les supports de stockage doivent être gérés tout au long de leur cycle de vie d\'acquisition, d\'utilisation, de transport et d\'élimination conformément au schéma de classification et aux exigences de manipulation de l\'organisation.', this)" onmouseout="cacherAlerte(this)">A7.10 Supports de stockage</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les installations de traitement de l\'information doivent être protégées contre les pannes de courant et autres perturbations causées par des défaillances des services publics de soutien.', this)" onmouseout="cacherAlerte(this)">A7.11 Utilitaires de prise en charge</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les câbles transportant de l\'énergie, des données ou des services d\'information doivent être protégés contre les interceptions, les interférences ou les dommages.', this)" onmouseout="cacherAlerte(this)">A7.12 Sécurité du câblage</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('L\'équipement doit être correctement entretenu pour assurer la disponibilité, l\'intégrité et la confidentialité des informations.', this)" onmouseout="cacherAlerte(this)">A7.13 Entretien du matériel</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>

    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les éléments d\'équipement contenant des supports de stockage doivent être vérifiés pour s\'assurer que toutes les données sensibles et les logiciels sous licence ont été supprimés ou écrasés en toute sécurité avant leur élimination ou leur réutilisation.', this)" onmouseout="cacherAlerte(this)">A7.14 Élimination ou réutilisation sécurisée de l'équipement</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
                @endif

                @if($project->name_model == 'Mesures organisationnelles')
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('La politique de sécurité de l\'information et les politiques spécifiques à un sujet doivent être définies, approuvées par la direction, publiées, communiquées et reconnues par le personnel concerné et les parties intéressées concernées, et révisées à intervalles planifiés et si des changements importants se produisent.', this)" onmouseout="cacherAlerte(this)">A5.1 : Politiques de sécurité de l'information</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les rôles et les responsabilités en matière de sécurité de l\'information doivent être définis et attribués en fonction des besoins de l\'organisation.', this)" onmouseout="cacherAlerte(this)">A5.2 : Rôles et responsabilités en matière de sécurité de l'information</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les tâches conflictuelles et les domaines de responsabilité conflictuels doivent être séparés.', this)" onmouseout="cacherAlerte(this)">A5.3 : Séparation des tâches</td>
               <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('La direction doit exiger que tout le personnel applique la sécurité de l\'information conformément à la politique de sécurité de l\'information établie, aux politiques et procédures spécifiques à un sujet de l\'organisation.', this)" onmouseout="cacherAlerte(this)">A5.4 : Responsabilités de la direction</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('L\'entreprise doit établir et maintenir des contacts avec les autorités compétentes.', this)" onmouseout="cacherAlerte(this)">A5.5 : Contact avec les autorités</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('L\'organisation doit établir et maintenir des contacts avec des groupes d\'intérêts particuliers ou d\'autres forums et associations professionnelles spécialisés dans la sécurité.', this)" onmouseout="cacherAlerte(this)">A5.6 : Contact avec des groupes d'intérêts particuliers</td>
               <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les informations relatives aux menaces à la sécurité de l\'information doivent être collectées et analysées pour produire des renseignements sur les menaces.', this)" onmouseout="cacherAlerte(this)">A5.7 : Threat intelligence</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('La sécurité de l\'information doit être intégrée dans la gestion de projet.', this)" onmouseout="cacherAlerte(this)">A5.8 : La sécurité de l'information dans la gestion de projets</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Un inventaire des informations et des autres actifs associés, y compris les propriétaires, doit être élaboré et maintenu.', this)" onmouseout="cacherAlerte(this)">A5.9 : Inventaire des informations et autres actifs associés</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les règles d\'utilisation acceptable et les procédures de traitement des informations et autres actifs associés doivent être identifiées, documentées et mises en œuvre.', this)" onmouseout="cacherAlerte(this)">A5.10 : Utilisation acceptable des informations et autres actifs associés</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Le personnel et les autres parties intéressées, le cas échéant, doivent restituer tous les actifs de l\'organisation en leur possession en cas de changement ou de résiliation de leur emploi, contrat ou accord.', this)" onmouseout="cacherAlerte(this)">A5.11 : Restitution d'actifs</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les informations doivent être classées en fonction des besoins de sécurité de l\'information de l\'organisation sur la base de la confidentialité, de l\'intégrité, de la disponibilité et des exigences pertinentes des parties intéressées.', this)" onmouseout="cacherAlerte(this)">A5.12 : Classement des informations</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Un ensemble approprié de procédures pour la labellisation des informations doit être développé et mis en œuvre conformément au système de classification des informations adopté par l\'organisation.', this)" onmouseout="cacherAlerte(this)">A5.13 : Labellisation des informations</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Des règles, procédures ou accords de transfert d\'informations doivent être en place pour tous les types d\'installations de transfert au sein de l\'organisation et entre l\'organisation et les autres parties.', this)" onmouseout="cacherAlerte(this)">A5.14 : Transfert d'information</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Des règles de contrôle de l\'accès physique et logique aux informations et autres actifs associés doivent être établies et mises en œuvre en fonction des exigences de sécurité de l\'entreprise et de l\'information.', this)" onmouseout="cacherAlerte(this)">A5.15 : Contrôle d'accès</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Le cycle de vie complet des identités doit être géré.', this)" onmouseout="cacherAlerte(this)">A5.16 : Gestion des identités</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('L\'attribution et la gestion des informations d\'authentification doivent être contrôlées par un processus de gestion, comprenant des conseils au personnel sur le traitement approprié des informations d\'authentification.', this)" onmouseout="cacherAlerte(this)">A5.17 : Informations d'authentification</td>
               <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les droits d\'accès à l\'information et aux autres actifs associés doivent être provisionnés, examinés, modifiés et supprimés conformément à la politique thématique de l\'organisation et aux règles de contrôle d\'accès.', this)" onmouseout="cacherAlerte(this)">A5.18 : Les droits d'accès</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Des processus et des procédures doivent être définis et mis en œuvre pour gérer les risques de sécurité de l\'information associés à l\'utilisation des produits ou services du fournisseur.', this)" onmouseout="cacherAlerte(this)">A5.19 : Sécurité de l'information en relation avec les fournisseurs</td>
               <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les exigences pertinentes en matière de sécurité de l\'information doivent être établies et convenues avec chaque fournisseur en fonction du type de relation avec le fournisseur.', this)" onmouseout="cacherAlerte(this)">A5.20 : Prise en compte de la sécurité des informations dans les accords avec les fournisseurs</td>
               <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Des processus et des procédures doivent être définis et mis en œuvre pour gérer les risques de sécurité de l\'information associés à la chaîne d\'approvisionnement des produits et services (ICT).', this)" onmouseout="cacherAlerte(this)">A5.21 : Gestion de la sécurité de l'information dans la chaîne d'approvisionnement des technologies de l'information et des communications (ICT)</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('L\'organisation doit surveiller, examiner, évaluer et gérer régulièrement les changements dans les pratiques de sécurité des informations des fournisseurs et la prestation de services.', this)" onmouseout="cacherAlerte(this)">A5.22 : Suivi, révision et gestion du changement des services fournisseurs</td>
               <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les processus d\'acquisition, d\'utilisation, de gestion et de sortie des services cloud doivent être établis conformément aux exigences de l\'organisation en matière de sécurité de l\'information.', this)" onmouseout="cacherAlerte(this)">A5.23 : Sécurité de l'information pour l'utilisation de services cloud</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('L\'organisation doit planifier et préparer la gestion des incidents de sécurité de l\'information en définissant, établissant et communiquant les processus, les rôles et les responsabilités de gestion des incidents de sécurité de l\'information.', this)" onmouseout="cacherAlerte(this)">A5.24 : Planification et préparation de la gestion des incidents de sécurité de l'information</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('L\'organisation doit évaluer les événements de sécurité de l\'information et décider s\'ils doivent être classés comme des incidents de sécurité de l\'information.', this)" onmouseout="cacherAlerte(this)">A5.25 : Évaluation et décision sur les événements liés à la sécurité de l'information</td>
               <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les incidents de sécurité de l\'information doivent être traités conformément aux procédures documentées.', this)" onmouseout="cacherAlerte(this)">A5.26 : Réponse aux incidents de sécurité de l'information</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les connaissances acquises à partir des incidents de sécurité de l\'information doivent être utilisées pour renforcer et améliorer les contrôles de sécurité de l\'information.', this)" onmouseout="cacherAlerte(this)">A5.27 : Tirer des enseignements des incidents de sécurité de l'information</td>
               <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('L\'organisation devrait établir et mettre en œuvre des procédures pour l\'identification, la collecte, l\'acquisition et la conservation des preuves liées aux événements de sécurité de l\'information.', this)" onmouseout="cacherAlerte(this)">A5.28 : Recueil des preuves</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('L\'organisation doit planifier comment maintenir la sécurité de l\'information à un niveau approprié pendant les perturbations.', this)" onmouseout="cacherAlerte(this)">A5.29 : Sécurité de l'information en cas de perturbation</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('L\'état de préparation des technologies de l\'information et des communications devrait être planifié, mis en œuvre, maintenu et testé en fonction des objectifs de continuité des activités et des exigences de continuité des technologies de l\'information et des communications.', this)" onmouseout="cacherAlerte(this)">A5.30 : État de préparation des technologies de l'information et des communications pour la continuité des activités</td>
               <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les exigences légales, statutaires, réglementaires et contractuelles relatives à la sécurité de l\'information et l\'approche de l\'organisation pour répondre à ces exigences doivent être identifiées, documentées et tenues à jour.', this)" onmouseout="cacherAlerte(this)">A5.31 : Exigences légales, statutaires, réglementaires et contractuelles</td>
               <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('L\'organisme devrait mettre en œuvre des procédures appropriées pour protéger les droits de propriété intellectuelle.', this)" onmouseout="cacherAlerte(this)">A5.32 : Droits de propriété intellectuelle</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les enregistrements doivent être protégés contre la perte, la destruction, la falsification, l\'accès non autorisé et la diffusion non autorisée.', this)" onmouseout="cacherAlerte(this)">A5.33 : Protection des enregistrements</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('L\'organisation doit identifier et respecter les exigences concernant la préservation de la vie privée et la protection des PII conformément aux lois et réglementations applicables et aux exigences contractuelles.', this)" onmouseout="cacherAlerte(this)">A5.34 : Confidentialité et protection des informations personnelles identifiables (PII)</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('L\'approche de l\'organisation en matière de gestion de la sécurité de l\'information et sa mise en œuvre, y compris les personnes, les processus et les technologies, doivent être revues de manière indépendante à des intervalles planifiés ou lorsque des changements importants se produisent.', this)" onmouseout="cacherAlerte(this)">A5.35 : Examen indépendant de la sécurité de l'information</td>
               <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('La conformité à la politique de sécurité de l\'information de l\'organisation, aux politiques, règles et normes spécifiques à un sujet doit être régulièrement examinée.', this)" onmouseout="cacherAlerte(this)">A5.36 : Conformité aux politiques, règles et normes de sécurité de l'information</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les procédures d\'exploitation des installations de traitement de l\'information doivent être documentées et mises à la disposition du personnel qui en a besoin.', this)" onmouseout="cacherAlerte(this)">A5.37 : Procédures d'exploitation documentées</td>
               <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>

            @endif

            @if($project->name_model == 'Mesures Technologiques')
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les informations stockées, traitées ou accessibles via les utilisateurs terminaux doivent être protégées.', this)" onmouseout="cacherAlerte(this)">A8.1 : Sécurité des équipements des utilisateurs terminaux </td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>           
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('L\'attribution et l\'utilisation des droits d\'accès privilégiés doivent être restreintes et gérées.', this)" onmouseout="cacherAlerte(this)">A8.2 : Droits d'accès privilégiés </td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>  
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('L\'accès à l\'information et aux autres actifs associés doit être restreint conformément à la politique de contrôle d\'accès établie.', this)" onmouseout="cacherAlerte(this)">A8.3 : Restriction d'accès à l'information </td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr> 
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('L\'accès en lecture et en écriture au code source, aux outils de développement et aux bibliothèques de logiciels doit être correctement géré.', this)" onmouseout="cacherAlerte(this)">A8.4 : Accès au code source  </td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les technologies et les procédures d\'authentification sécurisées doivent être mises en œuvre en fonction des restrictions d\'accès aux informations et de la politique spécifique au sujet en matière de contrôle d\'accès.', this)" onmouseout="cacherAlerte(this)">A8.5 : Authentification sécurisée  </td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('L\'utilisation des ressources doit être surveillée et ajustée en fonction des besoins actuels et attendus en matière de capacité.', this)" onmouseout="cacherAlerte(this)">A8.6 : Gestion de la capacité </td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('La protection contre les logiciels malveillants doit être mise en œuvre et soutenue par une sensibilisation appropriée des utilisateurs.', this)" onmouseout="cacherAlerte(this)">A8.7 : Protection contre les logiciels malveillants</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Des informations sur les vulnérabilités techniques des systèmes d\'information utilisés doivent être obtenues, l\'exposition de l\'organisation à ces vulnérabilités doit être évaluée et des mesures appropriées doivent être prises.', this)" onmouseout="cacherAlerte(this)">A8.8 : Gestion des vulnérabilités techniques</td>
               <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les configurations, y compris les configurations de sécurité, du matériel, des logiciels, des services et des réseaux doivent être établies, documentées, mises en œuvre, surveillées et examinées.', this)" onmouseout="cacherAlerte(this)">A8.9 : Gestion de la configuration </td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les informations stockées dans les systèmes d\'information, les dispositifs ou tout autre support de stockage doivent être supprimées lorsqu\'elles ne sont plus nécessaires.', this)" onmouseout="cacherAlerte(this)">A8.10 : Suppression de l'information</td>
               <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Le masquage des données doit être utilisé conformément à la politique thématique de l\'organisation en matière de contrôle d\'accès et à d\'autres politiques thématiques connexes, ainsi qu\'aux exigences de l\'entreprise, en tenant compte de la législation applicable.', this)" onmouseout="cacherAlerte(this)">A8.11 : Masquage des données</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>       
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Des mesures de prévention des fuites de données doivent être appliquées aux systèmes, réseaux et autres appareils qui traitent, stockent ou transmettent des informations sensibles.', this)" onmouseout="cacherAlerte(this)">A8.12 : Prévention des fuites de données</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr> 
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Des copies de sauvegarde des informations, des logiciels et des systèmes doivent être conservées et régulièrement testées conformément à lapolitique de sauvegarde convenue et spécifique au sujet.', this)" onmouseout="cacherAlerte(this)">A8.13 : Sauvegarde de l'information</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr> 
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les installations de traitement de l\'information doivent être mises en œuvre avec une redondance suffisante pour répondre aux exigences de disponibilité.', this)" onmouseout="cacherAlerte(this)">A8.14 : Redondance des installations de traitement de l'information</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr> 
    <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Des journaux qui enregistrent les activités, les exceptions, les défauts et autres événements pertinents doivent être produits, stockés, protégés et analysés.', this)" onmouseout="cacherAlerte(this)">A8.15 : Journalisation (Logs)</td>
               <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr> 
      <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les réseaux, les systèmes et les applications doivent être surveillés pour détecter tout comportement anormal et des mesures appropriées doivent être prises pour évaluer les incidents potentiels de sécurité des informations.', this)" onmouseout="cacherAlerte(this)">A8.16 : Surveillance des activités</td>
               <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>              
      <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les horloges des systèmes de traitement de l\'information utilisés par l\'organisation doivent être synchronisées avec des sources de temps approuvées.', this)" onmouseout="cacherAlerte(this)">A8.17 : Synchronisation d'horloge </td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr> 
      <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('L\'utilisation de programmes utilitaires capables de contourner les contrôles du système et des applications doit être restreinte et étroitement contrôlée.', this)" onmouseout="cacherAlerte(this)">A8.18 : Utilisation de programmes utilitaires privilégiés</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr> 
      <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Des procédures et des mesures doivent être mises en œuvre pour gérer en toute sécurité l\'installation des logiciels sur les systèmes opérationnels.', this)" onmouseout="cacherAlerte(this)">A8.19 : Installation de logiciels sur des systèmes opérationnels</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr> 
      <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Pour protéger l\'information dans les réseaux et ses installations de traitement de l\'information contre toute compromission via le réseau.', this)" onmouseout="cacherAlerte(this)">A8.20 : Sécurité des réseaux</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
      <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les mécanismes de sécurité, les niveaux de service, et les exigences des services de réseau doivent être identifiés, mis en œuvre et surveillés.', this)" onmouseout="cacherAlerte(this)">A8.21 : Sécurité des services réseau</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>               
      <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les groupes de services d\'information, d\'utilisateurs et de systèmes d\'information doivent être séparés dans les réseaux de l\'organisation.', this)" onmouseout="cacherAlerte(this)">A8.22 : Ségrégation des réseaux</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
      <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('L\'accès aux sites Web externes doit être géré de manière à réduire l\'exposition à des contenus malveillants.', this)" onmouseout="cacherAlerte(this)">A8.23 : Filtrage Web</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
      <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Des règles d\'utilisation efficace de la cryptographie, y compris la gestion des clés cryptographiques, devraient être définies et mises en œuvre.', this)" onmouseout="cacherAlerte(this)">A8.24 : Utilisation de la cryptographie</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
      <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Des règles pour le développement sécurisé de logiciels et de systèmes doivent être établies et appliquées.', this)" onmouseout="cacherAlerte(this)">A8.25 : Cycle de vie de développement sécurisé </td>
               <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
      <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les exigences en matière de sécurité de l\'information doivent être identifiées, spécifiées et approuvées lors du développement ou de l\'acquisition d\'applications.', this)" onmouseout="cacherAlerte(this)">A8.26 : Exigences relatives à la sécurité des applications</td>
               <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
      <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les principes d\'ingénierie des systèmes sécurisés doivent être établis, documentés, maintenus et appliqués à toutes les activités de développement de systèmes d\'information.', this)" onmouseout="cacherAlerte(this)">A8.27 : Architecture de système sécurisé et principes d'ingénierie</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
      <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les principes de coding sécurisé doivent être appliqués au développement de logiciels.', this)" onmouseout="cacherAlerte(this)">A8.28 : Programmation (Coding) sécurisée</td>
               <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
      <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les processus de test de sécurité doivent être définis et mis en œuvre dans le cycle de vie du développement.', this)" onmouseout="cacherAlerte(this)">A8.29 : Tests de sécurité en développement et acceptation</td>
               <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>              
      <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('L\'organisation doit diriger, surveiller et examiner les activités liées au développement de systèmes externalisés.', this)" onmouseout="cacherAlerte(this)">A8.30 : Développement externalisé</td>
              <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>               
      <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les environnements de développement, de test et de production doivent être séparés et sécurisés.', this)" onmouseout="cacherAlerte(this)">A8.31 : Séparation des environnements de développement, de test et de production</td>
              <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr> 
      <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les modifications apportées aux installations de traitement de l\'information et aux systèmes d\'information devraient faire l\'objet de procédures de gestion des modifications.', this)" onmouseout="cacherAlerte(this)">A8.32 : Gestion du changement</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
      <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les informations sur les tests doivent être sélectionnées, protégées et gérées de manière appropriée.', this)" onmouseout="cacherAlerte(this)">A8.33 : Informations sur les tests</td>
                <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
      <tr>  
                <td style="border: 1px solid black;" onmouseover="afficherAlerte('Les tests d\'audit et autres activités d\'assurance impliquant l\'évaluation des systèmes opérationnels doivent être planifiés et convenus entre le testeur et la direction appropriée.', this)" onmouseout="cacherAlerte(this)">A8.34 : Protection des systèmes d'information lors des tests d'audit</td>
               <td style="border: 1px solid black;">
<select class="select-values" onchange="showSelectedValue(this)">
    <option value="">Sélectionner une valeur</option>
    <option value="0">0</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="75">75</option>
    <option value="100">100</option>
</select>
    </td>
    @if ($project->conformity_percentage !== null && $project->uncheckedCategories()->where('project_id', $project->id)->exists())
        <td id="phrase-cell" style="border: 1px solid black;"></td>
            @endif
    </tr>
@endif


</table>
<br>

           <div style="display: inline-block;">
    <div id="result-container">
        <button type="button" id="calculate-btn" style="background-color: blue; color: white;">Soumettre</button> <br><br>
        <div id="conformityPercentage" style="color: red;"></div>
        
        <canvas id="conformity-chart"></canvas>
    </div>
    <a href="{{ route('projet') }}" style="color: blue; font-size: 16px;box-shadow: 0 10px 6px rgba(0, 0, 0, 0.1);">Voir le projet</a>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
$(document).ready(function () {
    $.ajax({
        url: '{{ route("evaluation.getUncheckedCategories", $project->id) }}',
        type: 'GET',
        success: function(response) {
            response.forEach(function(item) {
                var categoryLabel = item.category_label;
                var phrase = item.phrase_evalue;
                var cells = $('td:contains("' + phrase + '")');
                cells.each(function() {
                    $(this).next().next().text(categoryLabel);
                    $(this).next().attr('title', phrase);
                });
            });
        },
        error: function(xhr) {
            console.log(xhr.responseText);
        }
    });

    $('#calculate-btn').click(function () {
        var phrases = [];
        $('tr').each(function () {
            var phraseCell = $(this).find('td:first');
            var categoryCell = phraseCell.next();
            var phrase = phraseCell.text().trim();
            var categoryLabel = categoryCell.find('select').val();

            if (categoryLabel && phrase) {
                phrases.push({ categoryLabel: categoryLabel, phrase: phrase });
            }
        });

        $.ajax({
            url: '{{ route("projects.updateUncheckedCategories", $project->id) }}',
            type: 'POST',
            data: {
                uncheckedCategories: phrases,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                console.log(response);

                var projectId = {{ $project->id }}; // Remplacez $project->id par la variable contenant l'ID du projet

    $.ajax({
        url: '{{ route("evaluation.calculate.sum", $project->id) }}',
type: 'GET',
success: function(sumResponse) {
    var conformityPercentage = sumResponse.conformityPercentage;
    var conformityPercentageFormatted = conformityPercentage.toFixed(2); // Formate le nombre avec deux chiffres après la virgule
    $('#conformityPercentage').text(conformityPercentageFormatted + '%');

    // Calcul du pourcentage arrondi
    var roundedPercentage = Math.round(conformityPercentage * 100) / 100;

    // Sélectionnez l'élément canvas
    var ctx = document.getElementById('conformity-chart').getContext('2d');
    // ... le reste de votre code


            // Créez le diagramme circulaire
            var chart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Conformité', 'Non conformité'],
                    datasets: [{
                        data: [roundedPercentage, 100 - roundedPercentage],
                        backgroundColor: ['rgba(0, 128, 0, 1)', 'lightgray']
                    }]
                },
                options: {
                    legend: {
                        display: false
                    }
                } 
            });


                 // Envoi du pourcentage de conformité à la base de données via une requête AJAX
        $.ajax({
            url: '{{ route("evaluation.updateConformityPercentage", $project->id) }}',
            type: 'POST',
            data: {
                conformityPercentage: conformityPercentage,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                // Réponse de la requête d'enregistrement (facultatif)
                console.log(response);
            },
            error: function(xhr) {
                // Gestion des erreurs (facultatif)
                console.log(xhr.responseText);
            }
        });
    },

    error: function(xhr) {
        console.log(xhr.responseText);
    }
});
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    });

    function generateOptions(selectClass) {
        var optionsData = [
            { value: '', label: 'Sélectionner une valeur' },
            { value: 0, label: '0' },
            { value: 25, label: '25' },
            { value: 50, label: '50' },
            { value: 75, label: '75' },
            { value: 100, label: '100' }
        ];

        var optionsHtml = '';
        optionsData.forEach(function (option) {
            optionsHtml += '<option value="' + option.value + '">' + option.label + '</option>';
        });

        $(selectClass).html(optionsHtml);
    }

    // Générer les options pour les sélecteurs
    generateOptions('select');
});
</script>
</body>
</html>
@endsection