@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-8" style="background-color: #E0F0FF; border-radius: 8px; padding: 20px; margin: 0 auto; width: 950px;">
            
<div style="text-align: center;">
  <h4><strong>Recommandations pour les {{ $project->name_model }}</strong></h4>
</div>
    <div>
        
<style>
    table {
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
    }
</style>

<table>
    <tr>
        <th style="border: 1px solid black; padding: 10px;background-color: #E6E6E6; font-weight: bold;">Mesures</th>
        <th style="border: 1px solid black; padding: 10px;background-color: #E6E6E6; font-weight: bold;">Recommandations</th>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">A6.1 : Sélection des candidats</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Sélection des candidats') !== false;
});
@endphp

@if($conformite)
    @if($conformite->category_label == 0)
        <p>Mettez en place un processus structuré de sélection des candidats comprenant des critères clairs et objectifs. Établissez des procédures pour évaluer les compétences, l'expérience et la vérification des antécédents des candidats.</p>
    @elseif($conformite->category_label == 25)
        <p>Développez des critères de sélection plus détaillés pour évaluer les compétences et l'expérience des candidats. Mettez en place des méthodes de vérification des antécédents plus rigoureuses pour garantir la qualité des candidats sélectionnés.</p>
    @elseif($conformite->category_label == 50)
        <p>Renforcez votre processus de sélection des candidats en utilisant des méthodes d'évaluation plus standardisées et objectives. Impliquez plusieurs parties prenantes dans le processus de prise de décision pour garantir une sélection équitable.</p>
    @elseif($conformite->category_label == 75)
        <p>Évaluez régulièrement l'efficacité de votre processus de sélection des candidats en recueillant des commentaires des parties prenantes et en analysant les résultats des nouvelles recrues. Apportez des ajustements pour améliorer la qualité des candidats sélectionnés.</p>
    @endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">A6.2 : Termes et conditions d'embauche</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Termes et conditions d\'embauche') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établissez des termes et conditions d'embauche clairs, incluant rémunération, avantages, horaires et politiques de congé. Assurez-vous que les nouveaux employés les reçoivent et les comprennent.</p>
@elseif($conformite->category_label == 25)
    <p>Précisez les détails sur la rémunération, les avantages et les politiques de congé dans les termes et conditions d'embauche. Demandez aux nouveaux employés de les lire et de les accepter.</p>
@elseif($conformite->category_label == 50)
    <p>Mettez en place un processus formel pour communiquer les termes et conditions d'embauche à tous les nouveaux employés. Répondez à leurs questions et demandes d'éclaircissements.</p>
@elseif($conformite->category_label == 75)
    <p>Vérifiez régulièrement la conformité des termes et conditions d'embauche pour tous les employés. Mettez à jour les termes et conditions en fonction des changements législatifs et informez les employés.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">A6.3 : Sensibilisation, apprentissage et formation liée à la sécurité de l'information</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Sensibilisation, apprentissage et formation liée à la sécurité de l\'information') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Mettez en place un programme de sensibilisation et de formation complet sur la sécurité de l'information pour tous les employés.</p>
@elseif($conformite->category_label == 25)
    <p>Identifiez les besoins spécifiques en formation et développez des modules adaptés pour améliorer la sensibilisation à la sécurité de l'information.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcez le programme de sensibilisation et de formation en mettant l'accent sur l'importance de la conformité à la norme ISO 27001.</p>
@elseif($conformite->category_label == 75)
    <p>Évaluez régulièrement l'efficacité du programme de sensibilisation et de formation et adaptez-le en fonction des besoins identifiés.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">A6.4 : Processus disciplinaire</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Processus disciplinaire') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir un processus disciplinaire clair avec des politiques et des procédures documentées pour garantir une gestion adéquate des problèmes de comportement.</p>
@elseif($conformite->category_label == 25)
    <p>Renforcer les politiques disciplinaires existantes en clarifiant les attentes en matière de comportement et en établissant des conséquences claires pour les infractions.</p>
@elseif($conformite->category_label == 50)
    <p>Mettre en place un processus disciplinaire formel et bien communiqué pour assurer une gestion cohérente des problèmes de comportement.</p>
@elseif($conformite->category_label == 75)
    <p>Évaluer régulièrement l'efficacité du processus disciplinaire et apporter les ajustements nécessaires pour garantir une gestion juste et équitable des problèmes de comportement.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">A6.5 : Responsabilités après la cessation ou le changement d'emploi</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Responsabilités après la cessation ou le changement d\'emploi') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établissez des procédures claires pour définir les responsabilités après la cessation ou le changement d'emploi. Formez le personnel sur ces procédures afin d'assurer une transition en toute sécurité.</p>
@elseif($conformite->category_label == 25)
    <p>Renforcez les procédures existantes pour préciser les responsabilités après la cessation ou le changement d'emploi. Assurez-vous que les employés sont conscients de ces procédures et effectuez des contrôles pour garantir leur application.</p>
@elseif($conformite->category_label == 50)
    <p>Mettez en place des procédures détaillées pour définir les responsabilités après la cessation ou le changement d'emploi. Assurez-vous que le personnel est formé à ces procédures et effectuez des vérifications régulières pour assurer leur respect.</p>
@elseif($conformite->category_label == 75)
    <p>Effectuez des audits périodiques pour évaluer l'efficacité des procédures de responsabilités après la cessation ou le changement d'emploi. Mettez à jour les procédures en fonction des résultats des audits et assurez-vous que le personnel est informé des changements.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">A6.6 : Accords de confidentialité ou de non-divulgation</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Accords de confidentialité ou de non-divulgation') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établissez des accords de confidentialité ou de non-divulgation solides pour protéger les informations sensibles de votre organisation. Assurez-vous que ces accords sont régulièrement mis à jour et signés par tous les employés et partenaires concernés.</p>
@elseif($conformite->category_label == 25)
    <p>Renforcez la sensibilisation à l'importance des accords de confidentialité ou de non-divulgation. Mettez en place des procédures pour vous assurer que tous les employés et partenaires signent ces accords et comprennent leurs obligations en matière de protection des informations sensibles.</p>
@elseif($conformite->category_label == 50)
    <p>Mettez en œuvre des processus de suivi pour vous assurer que tous les employés et partenaires ont signé les accords de confidentialité ou de non-divulgation. Révisez régulièrement ces accords pour vous assurer qu'ils répondent aux besoins actuels de votre organisation.</p>
@elseif($conformite->category_label == 75)
    <p>Effectuez des audits réguliers pour vérifier la conformité aux accords de confidentialité ou de non-divulgation. Mettez en place des mécanismes de formation continue pour sensibiliser le personnel à l'importance de la protection des informations confidentielles.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">A6.7 : Le télétravail</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Le télétravail') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établissez une politique de télétravail formelle qui définit clairement les exigences en matière de sécurité de l'information pour le travail à distance. Mettez en place des mesures de sécurité robustes, y compris l'utilisation d'une connexion VPN pour accéder aux ressources internes.</p>
@elseif($conformite->category_label == 25)
    <p>Renforcez la sensibilisation à la sécurité du télétravail auprès des employés en organisant des séances de formation régulières. Mettez en place des politiques et des procédures pour sécuriser les appareils utilisés en télétravail, par exemple en exigeant l'utilisation de logiciels antivirus et de pare-feu.</p>
@elseif($conformite->category_label == 50)
    <p>Établissez des directives claires sur les pratiques de sécurité du télétravail, telles que la protection des identifiants de connexion, la sécurisation des communications et l'utilisation de réseaux Wi-Fi sécurisés. Mettez en place des mécanismes de surveillance pour détecter les éventuelles violations de sécurité.</p>
@elseif($conformite->category_label == 75)
    <p>Effectuez des évaluations régulières de la sécurité du télétravail pour identifier les vulnérabilités et les lacunes. Mettez en place des mesures de contrôle supplémentaires, telles que des audits de sécurité externes, pour renforcer la conformité et la protection des informations sensibles.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">A6.8 : Rapports sur les événements de sécurité de l'information</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Rapports sur les événements de sécurité de l\'information') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établissez un processus formel pour la collecte et la documentation des événements de sécurité de l'information. Mettez en place un système de suivi des incidents et des rapports afin de garantir une gestion appropriée des incidents de sécurité.</p>
@elseif($conformite->category_label == 25)
    <p>Développez des procédures détaillées pour la collecte, l'enregistrement et la documentation des événements de sécurité de l'information. Mettez en place un mécanisme de signalement des incidents pour permettre aux employés de signaler rapidement les événements de sécurité.</p>
@elseif($conformite->category_label == 50)
    <p>Mettez en place un processus de rapport des événements de sécurité de l'information, en spécifiant les informations essentielles à inclure dans les rapports. Assurez-vous que les rapports sont clairs, précis et documentent toutes les informations nécessaires.</p>
@elseif($conformite->category_label == 75)
    <p>Effectuez régulièrement des analyses et des évaluations des rapports sur les événements de sécurité de l'information pour identifier les tendances et les problèmes récurrents. Utilisez ces informations pour améliorer continuellement le processus de rapport et prendre des mesures correctives appropriées.</p>
@endif
@endif
</td>
    </tr>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection