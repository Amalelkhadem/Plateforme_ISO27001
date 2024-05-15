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
        <td style="border: 1px solid black; padding: 8px;">Politiques de sécurité de l'information</td>
        <td style="border: 1px solid black; padding: 8px;">

@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Politiques de sécurité de l\'information') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Développez et mettez en œuvre une politique complète de sécurité de l'information qui couvre tous les aspects nécessaires à la conformité à la norme ISO 27001. Assurez-vous d'inclure des éléments tels que la classification des informations, les contrôles d'accès, la gestion des risques et la sensibilisation à la sécurité.</p>
@elseif($conformite->category_label == 25)
    <p>Identifiez les lacunes dans vos politiques de sécurité de l'information actuelles et élaborez un plan d'action pour les corriger. Mettez l'accent sur l'élaboration de politiques spécifiques pour des domaines tels que la gestion des mots de passe, la protection des informations sensibles et la gestion des accès aux systèmes.</p>
@elseif($conformite->category_label == 50)
    <p>Améliorez vos politiques de sécurité de l'information en les rendant plus détaillées et en les alignant sur les exigences spécifiques de la norme ISO 27001. Veillez à ce que vos politiques comprennent des éléments tels que la gestion des changements, la gestion des incidents de sécurité et la continuité des activités.</p>
@elseif($conformite->category_label == 75)
    <p>Effectuez une revue approfondie de vos politiques de sécurité de l'information existantes et identifiez les domaines où des améliorations supplémentaires peuvent être apportées. Veillez à ce que vos politiques soient régulièrement mises à jour pour refléter les évolutions des menaces de sécurité et les nouvelles exigences réglementaires.</p>
@elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif               
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Rôles et responsabilités en matière de sécurité de l'information</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Rôles et responsabilités en matière de sécurité de l\'information') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Définissez clairement les rôles et les responsabilités liés à la sécurité de l'information au sein de l'organisme. Identifiez les personnes clés qui devraient être responsables de la gestion de la sécurité de l'information et assignez-leur des responsabilités spécifiques.</p>
@elseif($conformite->category_label == 25)
    <p>Renforcez la communication et la sensibilisation en matière de sécurité de l'information au sein de l'organisme. Organisez des sessions de formation pour les employés afin de les informer des rôles et des responsabilités en matière de sécurité de l'information. Mettez en place des mécanismes de suivi pour s'assurer que les responsabilités sont comprises et respectées.</p>
@elseif($conformite->category_label == 50)
    <p>Établissez des procédures formelles pour la gestion des rôles et des responsabilités en matière de sécurité de l'information. Développez des descriptions de poste détaillées qui incluent les responsabilités spécifiques liées à la sécurité de l'information. Assurez-vous que les rôles et les responsabilités sont clairement communiqués à tous les employés.</p>
@elseif($conformite->category_label == 75)
    <p>Effectuez des évaluations régulières pour vous assurer que les rôles et les responsabilités en matière de sécurité de l'information sont respectés. Identifiez les domaines où des améliorations supplémentaires peuvent être apportées et mettez en place des plans d'action pour les résoudre. Encouragez la participation et l'engagement actif de tous les employés dans la gestion de la sécurité de l'information.</p>
@elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Séparation des tâches</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Séparation des tâches') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Mettez en place une séparation des tâches claire et définie pour réduire les risques liés à la collusion et à la fraude. Identifiez les domaines où la séparation des tâches est absente et élaborez un plan d'action pour remédier à la situation. Impliquez un expert en sécurité de l'information pour vous aider à définir les rôles et les responsabilités appropriés.</p>
@elseif($conformite->category_label == 25)
    <p>Renforcez la séparation des tâches en définissant des rôles distincts pour les différentes fonctions clés. Identifiez les zones où les conflits d'intérêts peuvent exister et mettez en place des contrôles supplémentaires pour atténuer les risques. Documentez clairement les responsabilités de chaque rôle afin de clarifier les attentes.</p>
@elseif($conformite->category_label == 50)
    <p>Établissez des procédures formelles de séparation des tâches pour les processus critiques. Assurez-vous que les responsabilités et les autorisations sont clairement définies et documentées. Effectuez régulièrement des audits internes pour vérifier la conformité et identifiez les domaines où des améliorations supplémentaires peuvent être apportées.</p>
@elseif($conformite->category_label == 75)
    <p>Continuez à renforcer la séparation des tâches en mettant en place des contrôles supplémentaires tels que des revues périodiques et des processus de validation croisée. Effectuez des formations et des sensibilisations pour maintenir la prise de conscience des employés concernant l'importance de la séparation des tâches.</p>
@elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
    @endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Responsabilités de la direction</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Responsabilités de la direction') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Impliquez la direction de l'organisme dans l'engagement en matière de sécurité de l'information. Définissez clairement les rôles et les responsabilités de la direction en matière de sécurité de l'information et assurez-vous qu'ils sont communiqués à tous les niveaux de l'organisme. Établissez un comité de gouvernance de la sécurité de l'information pour superviser les activités liées à la sécurité.</p>
@elseif($conformite->category_label == 25)
    <p>Renforcez l'engagement de la direction en matière de sécurité de l'information en organisant des réunions régulières pour discuter des progrès réalisés et des défis à relever. Assurez-vous que la direction soutient activement les initiatives de sécurité de l'information et alloue les ressources nécessaires. Élaborez une politique formelle de sécurité de l'information approuvée par la direction.</p>
@elseif($conformite->category_label == 50)
    <p>Établissez des objectifs spécifiques en matière de sécurité de l'information, alignés sur les objectifs stratégiques de l'organisme. Assurez-vous que la direction évalue régulièrement les performances en matière de sécurité de l'information et prend des mesures correctives lorsque cela est nécessaire. Impliquez la direction dans la communication des résultats des audits et des revues de conformité.</p>
@elseif($conformite->category_label == 75)
    <p>Continuez à soutenir activement la sécurité de l'information en intégrant des considérations de sécurité dans les processus décisionnels et les activités quotidiennes. Encouragez la direction à participer à des formations et à des événements liés à la sécurité de l'information pour rester informée des meilleures pratiques.</p>
@elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
    @endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Contact avec les autorités</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Contact avec les autorités') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établissez immédiatement des procédures claires pour le contact avec les autorités compétentes en cas d'incident de sécurité de l'information. Identifiez les autorités appropriées et établissez des canaux de communication officiels. Documentez les étapes à suivre en cas d'incident et assurez-vous que tous les membres de l'organisme sont informés de ces procédures.</p>
@elseif($conformite->category_label == 25)
    <p>Mettez en place une liste actualisée des autorités compétentes en matière de sécurité de l'information et des incidents connexes. Établissez des procédures pour informer rapidement les autorités concernées en cas d'incident. Assurez-vous que les membres de l'organisme sont conscients de l'importance de signaler les incidents et de respecter les obligations légales en matière de communication.</p>
@elseif($conformite->category_label == 50)
    <p>Établissez des protocoles de communication clairs pour les incidents de sécurité de l'information, y compris les informations à fournir aux autorités compétentes. Mettez en place des mécanismes de suivi pour vous assurer que les rapports sont soumis en temps opportun. Assurez-vous que votre organisme respecte toutes les obligations légales en matière de signalement des incidents de sécurité.</p>
@elseif($conformite->category_label == 75)
    <p>Continuez à maintenir des canaux de communication réguliers et efficaces avec les autorités compétentes. Effectuez des exercices réguliers de gestion des incidents pour vous assurer que les procédures de contact sont bien comprises et suivies par tous les membres de l'organisme.</p>
@elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
    @endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Contact avec des groupes d'intérêts particuliers</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Contact avec des groupes d\'intérêts particuliers') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établissez des procédures pour identifier les groupes d'intérêts particuliers pertinents pour votre organisme. Déterminez les canaux de communication appropriés pour interagir avec ces groupes. Assurez-vous que les membres de l'organisme sont conscients de l'importance de maintenir des relations positives avec les groupes d'intérêts particuliers.</p>
@elseif($conformite->category_label == 25)
    <p>Identifiez les principaux groupes d'intérêts particuliers liés à la sécurité de l'information et établissez des canaux de communication pour interagir avec eux. Mettez en place des mécanismes pour recueillir leurs commentaires et leurs préoccupations. Commencez à documenter les interactions et les résultats des échanges avec ces groupes.</p>
@elseif($conformite->category_label == 50)
    <p>Établissez des processus formels pour la communication régulière avec les groupes d'intérêts particuliers. Développez des plans de communication spécifiques pour chaque groupe, en tenant compte de leurs besoins et de leurs attentes. Impliquez les membres de ces groupes dans les activités de sensibilisation à la sécurité de l'information et sollicitez leur retour d'expérience.
</p>
@elseif($conformite->category_label == 75)
    <p>Continuez à maintenir des relations étroites avec ces groupes et cherchez des opportunités de collaboration. Assurez-vous que les retours d'expérience des groupes d'intérêts particuliers sont pris en compte dans les processus de prise de décision liés à la sécurité de l'information.</p>
    @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Threat intelligence</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Threat intelligence') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Mettez en place immédiatement un processus de collecte d'informations sur les menaces (threat intelligence) liées à la sécurité de l'information. Identifiez des sources fiables d'informations sur les menaces externes et établissez des mécanismes pour suivre et analyser ces informations. Utilisez ces informations pour évaluer les risques potentiels pour votre organisme.</p>
@elseif($conformite->category_label == 25)
    <p>Identifiez des sources d'informations sur les menaces pertinentes pour votre secteur d'activité et commencez à collecter des données sur les menaces de sécurité de l'information. Établissez des procédures pour partager ces informations avec les parties prenantes internes afin d'améliorer la sensibilisation et la préparation aux menaces.</p>
@elseif($conformite->category_label == 50)
    <p>Établissez des processus formels pour la collecte, l'analyse et le partage réguliers de l'information sur les menaces. Investissez dans des outils et des technologies de threat intelligence pour automatiser la collecte et l'analyse des données. Impliquez les membres pertinents de l'organisme dans la revue et l'interprétation des informations sur les menaces.
</p>
@elseif($conformite->category_label == 75)
    <p>Continuez à améliorer votre processus de collecte et d'analyse des informations sur les menaces. Établissez des mécanismes de partage d'information avec des partenaires externes, tels que des fournisseurs de services de sécurité, pour bénéficier de perspectives et d'expertise supplémentaires.</p>
    @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">La sécurité de l'information dans la gestion de projets</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'La sécurité de l\'information dans la gestion de projets') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établissez des procédures pour intégrer la sécurité de l'information dans la gestion de projets. Identifiez les risques potentiels liés à la sécurité de l'information dans chaque phase du projet et mettez en place des mesures appropriées pour les atténuer. Assurez-vous que les membres de l'équipe de projet sont conscients des principes de sécurité de l'information.</p>
@elseif($conformite->category_label == 25)
    <p>Intégrez des pratiques de sécurité de l'information de base dans la gestion de projets. Identifiez les principaux actifs d'information liés au projet et établissez des contrôles pour les protéger. Mettez en place des mécanismes de suivi des risques et des incidents liés à la sécurité de l'information pendant la durée du projet.</p>
@elseif($conformite->category_label == 50)
    <p>Établissez des procédures formelles pour la gestion de la sécurité de l'information dans les projets. Intégrez les contrôles de sécurité de l'information dans les processus de planification, d'exécution et de suivi des projets. Assurez-vous que les membres de l'équipe de projet sont formés à la sécurité de l'information et appliquent les bonnes pratiques.
</p>
@elseif($conformite->category_label == 75)
    <p>Continuez à renforcer les contrôles de sécurité de l'information et à promouvoir une culture de la sécurité au sein de l'équipe de projet. Effectuez des évaluations régulières des risques et des contrôles de sécurité pour garantir leur pertinence et leur efficacité.</p>
    @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Inventaire des informations et autres actifs associés</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Inventaire des informations et autres actifs associés') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Commencez immédiatement à effectuer un inventaire exhaustif de tous les actifs d'information de votre organisme, y compris les données, les systèmes, les équipements et les documents. Identifiez les propriétaires de chaque actif et établissez des procédures pour leur gestion et leur protection.</p>
@elseif($conformite->category_label == 25)
    <p>Poursuivez l'inventaire des actifs d'information et mettez en place des processus pour maintenir à jour cette liste. Identifiez les actifs critiques nécessitant une protection supplémentaire et établissez des procédures pour leur gestion des risques.</p>
@elseif($conformite->category_label == 50)
    <p>Améliorer la liste des actifs et à intégrer des procédures pour leur gestion, y compris l'identification des propriétaires, les responsabilités et les exigences de protection spécifiques.
</p>
@elseif($conformite->category_label == 75)
    <p>Continuez à améliorer et à maintenir l'inventaire des actifs d'information à jour. Assurez-vous que tous les actifs sont correctement documentés, y compris les détails tels que leur importance, leur sensibilité et leur valeur pour l'organisme. Établissez des procédures pour la gestion du cycle de vie des actifs, y compris leur archivage et leur élimination appropriée.</p>
    @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Utilisation acceptable des informations et autres actifs associés</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Utilisation acceptable des informations et autres actifs associés') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Mettez en place une politique d'utilisation acceptable des informations et des actifs associés. Définissez clairement les règles et les directives concernant l'utilisation des informations, des systèmes et des équipements. Sensibilisez les utilisateurs aux risques associés à une utilisation inappropriée et établissez des procédures de surveillance et de sanctions en cas de non-respect.</p>
@elseif($conformite->category_label == 25)
    <p>Renforcez la politique d'utilisation acceptable en la rendant plus détaillée et spécifique. Identifiez les scénarios courants de violation de la politique et élaborez des directives pour les prévenir. Mettez en place des mécanismes de sensibilisation et de formation pour les utilisateurs afin de les informer des meilleures pratiques en matière d'utilisation acceptable.</p>
@elseif($conformite->category_label == 50)
    <p>Améliorer la mise en place de la politique d'utilisation acceptable des informations et des actifs associés. Identifiez les lacunes et élaborez un plan d'action pour les résoudre. Renforcez la sensibilisation des utilisateurs aux bonnes pratiques et aux risques liés à une utilisation inappropriée. Mettez en place des mécanismes de contrôle et de suivi pour assurer la conformité continue.
</p>
@elseif($conformite->category_label == 75)
    <p>Continuez à renforcer la politique d'utilisation acceptable en intégrant les retours d'expérience et les enseignements tirés des incidents passés. Effectuez des contrôles réguliers pour vous assurer que la politique est correctement suivie et appliquée. Encouragez une culture de la sécurité de l'information au sein de l'organisme et favorisez la responsabilisation des utilisateurs.</p>
    @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Restitution d'actifs</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Restitution d\'actifs') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Mettre en place un processus formel pour la restitution des actifs en cas de départ d'un employé ou de cessation d'un contrat. Cela devrait inclure des procédures claires et documentées pour récupérer tous les actifs physiques et numériques appartenant à l'organisme.</p>
@elseif($conformite->category_label == 25)
    <p>Renforcer les procédures de restitution des actifs en mettant en place des contrôles supplémentaires. Par exemple, assigner la responsabilité à des personnes spécifiques pour s'assurer que tous les actifs sont récupérés, documenter les étapes à suivre et effectuer des vérifications régulières pour garantir leur application.</p>
@elseif($conformite->category_label == 50)
    <p>Améliorer les processus de restitution d'actifs en mettant en place des formations et des sensibilisations pour tous les employés. Il est essentiel de leur fournir les connaissances nécessaires sur les procédures de restitution et les conséquences du non-respect de ces procédures.
</p>
@elseif($conformite->category_label == 75)
    <p>Continuer à renforcer les pratiques de restitution d'actifs en effectuant des audits internes réguliers pour évaluer l'efficacité des processus en place. Identifier les domaines où des améliorations supplémentaires peuvent être apportées et mettre en œuvre des actions correctives appropriées.</p>
    @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Classement des informations</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Classement des informations') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir une politique de classification des informations clairement définie. Cette politique devrait inclure des directives sur les niveaux de classification, les critères de classification et les responsabilités des employés pour la classification appropriée des informations.</p>
@elseif($conformite->category_label == 25)
    <p>Mettre en place des procédures de classification des informations et des formations pour sensibiliser les employés à l'importance de la classification appropriée. Cela devrait inclure des directives sur la manière d'identifier, d'étiqueter et de manipuler les informations en fonction de leur niveau de classification.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer les pratiques de classification des informations en mettant en place des outils automatisés pour faciliter le processus de classification. Cela peut inclure l'utilisation de logiciels de gestion des informations qui permettent aux utilisateurs de classer facilement les documents et les fichiers selon les directives établies.
</p>
@elseif($conformite->category_label == 75)
    <p>Améliorer la gouvernance de la classification des informations en réalisant des audits réguliers pour évaluer l'efficacité des procédures de classification en place. Identifier les domaines où des améliorations supplémentaires peuvent être apportées et mettre en œuvre des actions correctives appropriées.</p>
    @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Labellisation des informations</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Labellisation des informations') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir une politique de labellisation des informations clairement définie. Cette politique devrait inclure des directives sur les types de labels à utiliser, les critères de labellisation et les responsabilités des employés pour la labellisation appropriée des informations.</p>
@elseif($conformite->category_label == 25)
    <p>Mettre en place des procédures de labellisation des informations et des formations pour sensibiliser les employés à l'importance de la labellisation appropriée. Cela peut inclure des directives sur la manière d'identifier les informations sensibles, de leur attribuer les labels adéquats et de les protéger en conséquence.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer les pratiques de labellisation des informations en mettant en place des outils automatisés pour faciliter le processus de labellisation. Cela peut inclure l'utilisation de logiciels de classification des informations qui permettent aux utilisateurs de labelliser facilement les documents et les fichiers selon les directives établies.
</p>
@elseif($conformite->category_label == 75)
    <p>Améliorer la gouvernance de la labellisation des informations en réalisant des audits réguliers pour évaluer l'efficacité des procédures de labellisation en place. Identifier les domaines où des améliorations supplémentaires peuvent être apportées et mettre en œuvre des actions correctives appropriées.</p>
    @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Transfert d'information</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Transfert d\'information') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir des procédures formelles pour le transfert d'informations sensibles. Cela devrait inclure des directives sur les canaux de communication sécurisés à utiliser, les autorisations requises et les mesures de protection appropriées pour éviter toute fuite ou interception d'informations pendant le transfert.</p>
@elseif($conformite->category_label == 25)
    <p>Mettre en place des contrôles supplémentaires pour renforcer la sécurité lors du transfert d'informations. Par exemple, utiliser des protocoles de cryptage pour les transferts de données sensibles, mettre en place des procédures d'authentification pour vérifier l'identité des parties impliquées et sensibiliser les employés aux bonnes pratiques de gestion des informations lors des transferts.</p>
@elseif($conformite->category_label == 50)
    <p>Améliorer les politiques et les procédures existantes en matière de transfert d'informations. Cela peut inclure la mise en place de mécanismes de contrôle des accès aux informations, l'utilisation de protocoles de transfert sécurisés tels que SFTP (Secure File Transfer Protocol) ou HTTPS, et la formation des employés sur les risques liés au transfert d'informations sensibles.
</p>
@elseif($conformite->category_label == 75)
    <p>Continuer à renforcer les pratiques de transfert d'information en réalisant des audits réguliers pour évaluer l'efficacité des mesures de sécurité mises en place. Identifier les domaines où des améliorations supplémentaires peuvent être apportées et mettre en œuvre des actions correctives appropriées.</p>
    @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Contrôle d'accès</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Contrôle d\'accès') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Mettez en place des systèmes de contrôle d'accès physiques et électroniques pour limiter l'accès non autorisé aux zones sensibles. Élaborez des politiques et des procédures claires concernant l'identification et l'authentification des utilisateurs. Sensibilisez les employés aux risques liés à l'accès non autorisé.</p>
@elseif($conformite->category_label == 25)
    <p>Renforcez les systèmes de contrôle d'accès existants en utilisant des technologies plus avancées telles que la biométrie ou les cartes à puce. Établissez des procédures de gestion des identités et des droits d'accès pour assurer une attribution appropriée des privilèges. Effectuez des audits réguliers pour identifier les failles de sécurité.</p>
@elseif($conformite->category_label == 50)
    <p>Améliorez les systèmes de contrôle d'accès en utilisant des solutions intégrées qui combinent des éléments physiques et électroniques. Mettez en place des mécanismes de contrôle supplémentaires tels que des codes PIN ou des mots de passe forts. Effectuez des évaluations de vulnérabilité périodiques.
</p>
@elseif($conformite->category_label == 75)
    <p>Continuez à surveiller les systèmes de contrôle d'accès pour détecter les éventuelles vulnérabilités. Renforcez la sensibilisation des employés aux meilleures pratiques de sécurité, notamment en matière de gestion des mots de passe et d'utilisation des cartes d'identification.</p>
    @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Gestion des identités</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Gestion des identités') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Mettez en place un processus de gestion des identités pour attribuer et révoquer les droits d'accès de manière contrôlée. Utilisez des outils de gestion des identités et des accès pour centraliser la gestion et réduire les risques d'accès non autorisé. Sensibilisez les employés aux risques liés à une mauvaise gestion des identités.</p>
@elseif($conformite->category_label == 25)
    <p>Améliorez les processus de gestion des identités en utilisant des méthodes de vérification plus rigoureuses, telles que la vérification des antécédents et des références pour les nouveaux employés. Mettez en place des procédures de révision régulières pour s'assurer que les droits d'accès sont appropriés et à jour. Identifiez et supprimez les comptes inactifs ou non autorisés.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcez les contrôles de gestion des identités en utilisant des solutions d'automatisation pour réduire les erreurs humaines et les tâches répétitives. Mettez en place des processus de revue périodique des droits d'accès pour s'assurer qu'ils correspondent aux besoins actuels des utilisateurs. Implémentez des mécanismes de suivi des identités pour détecter les activités suspectes.
</p>
@elseif($conformite->category_label == 75)
    <p>Continuez à améliorer les processus de gestion des identités en utilisant des approches basées sur les rôles pour simplifier l'attribution des droits d'accès. Mettez en place des mécanismes de contrôle supplémentaires, tels que l'authentification à deux facteurs, pour renforcer la sécurité des identités.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Informations d'authentification</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Informations d\'authentification') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Mettez en place une politique d'authentification forte qui exige l'utilisation de mots de passe complexes, avec une longueur minimale et une expiration périodique. Encouragez l'utilisation de l'authentification à deux facteurs pour renforcer la sécurité des comptes. Sensibilisez les utilisateurs aux bonnes pratiques de gestion des informations d'authentification.</p>
@elseif($conformite->category_label == 25)
    <p>Améliorez les pratiques d'authentification en mettant en œuvre des mécanismes de gestion des mots de passe plus robustes. Encouragez l'utilisation de solutions d'authentification multifactorielle pour renforcer la sécurité des comptes. Effectuez des évaluations régulières de la sécurité des mots de passe utilisés.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcez les contrôles d'authentification en utilisant des solutions d'authentification forte, telles que les certificats numériques ou les jetons d'authentification. Mettez en place des politiques de gestion des informations d'authentification pour garantir la confidentialité et l'intégrité des identifiants. Sensibilisez les utilisateurs aux risques liés à la divulgation des informations d'authentification.
</p>
@elseif($conformite->category_label == 75)
    <p>Continuer à améliorer les pratiques d'authentification en utilisant des méthodes d'authentification avancées, telles que la biométrie ou l'authentification basée sur le comportement. Mettez en place des mécanismes de surveillance pour détecter les activités d'authentification suspectes. Fournissez des formations régulières sur la sensibilisation à la sécurité des informations d'authentification.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Les droits d'accès</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Les droits d\'accès') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Mettez en place un processus de gestion des droits d'accès pour assurer que seules les personnes autorisées ont accès aux ressources appropriées. Identifiez les utilisateurs et les rôles nécessaires pour chaque système et définissez des politiques de contrôle d'accès. Effectuez régulièrement des revues pour identifier et supprimer les droits d'accès inappropriés.</p>
@elseif($conformite->category_label == 25)
    <p>Améliorez les pratiques de gestion des droits d'accès en utilisant des mécanismes de contrôle plus stricts, tels que l'attribution basée sur les rôles et les privilèges minimales nécessaires. Mettez en place des processus de validation des demandes d'accès pour s'assurer qu'elles sont justifiées et approuvées par les responsables appropriés. Effectuez des audits réguliers pour identifier les écarts et les erreurs de droits d'accès.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcez les contrôles de gestion des droits d'accès en utilisant des solutions d'automatisation pour faciliter la gestion et réduire les erreurs humaines. Mettez en place des mécanismes de suivi des droits d'accès pour détecter les activités suspectes ou non autorisées. Implémentez des processus de revue périodique des droits d'accès pour garantir qu'ils restent appropriés et alignés sur les besoins actuels.
</p>
@elseif($conformite->category_label == 75)
    <p>Continuez à améliorer les pratiques de gestion des droits d'accès en mettant en place des mécanismes avancés tels que l'authentification à deux facteurs pour renforcer la sécurité. Mettez en œuvre des processus de gestion des changements pour garantir que les droits d'accès sont gérés de manière contrôlée et documentée.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Sécurité de l'information en relation avec les fournisseurs</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Sécurité de l\'information en relation avec les fournisseurs') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établissez une politique de sécurité des fournisseurs qui exige une évaluation approfondie de la sécurité de l'information des fournisseurs avant de les engager. Mettez en place des contrats et des accords clairs qui spécifient les exigences de sécurité de l'information auxquelles les fournisseurs doivent se conformer.</p>
@elseif($conformite->category_label == 25)
    <p>Améliorez les pratiques de sécurité des fournisseurs en évaluant régulièrement les risques de sécurité associés à chaque fournisseur. Mettez en place des mécanismes pour surveiller et contrôler l'accès des fournisseurs aux systèmes et données sensibles. Développez des processus de gestion des incidents de sécurité pour traiter les violations potentielles de la part des fournisseurs.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcez les contrôles de sécurité des fournisseurs en menant des évaluations régulières de leur conformité aux exigences de sécurité de l'information. Établissez des processus pour effectuer des contrôles de sécurité préalables avant de commencer une relation avecun fournisseur. Assurez-vous que les accords contractuels incluent des clauses spécifiques sur la sécurité de l'information et la confidentialité des données. Mettez en place des mécanismes de suivi réguliers pour vous assurer que les fournisseurs respectent leurs obligations en matière de sécurité.
</p>
@elseif($conformite->category_label == 75)
    <p>Continuez à améliorer les pratiques de sécurité des fournisseurs en mettant en place des processus de gestion des risques pour évaluer et atténuer les risques associés aux fournisseurs. Effectuez des audits réguliers pour évaluer la conformité des fournisseurs et identifiez les domaines d'amélioration potentiels. Établissez des partenariats avec des fournisseurs qui ont des certifications de sécurité reconnues.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Prise en compte de la sécurité des informations dans les accords avec les fournisseurs</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Prise en compte de la sécurité des informations dans les accords avec les fournisseurs') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Développez une politique formelle de sécurité des informations pour les accords avec les fournisseurs. Incluez des clauses spécifiques sur la sécurité de l'information qui doivent être respectées par tous les fournisseurs. Établissez des processus de vérification pour vous assurer que les fournisseurs respectent ces exigences de sécurité.</p>
@elseif($conformite->category_label == 25)
    <p>Améliorez les pratiques de sécurité des informations dans les accords avec les fournisseurs en évaluant les risques de sécurité associés à chaque fournisseur. Incluez des clauses contractuelles sur la confidentialité des informations et l'accès aux données. Développez des processus de gestion des incidents de sécurité pour gérer les violations potentielles de la part des fournisseurs.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcez les contrôles de sécurité des informations dans les accords avec les fournisseurs en incluant des clauses spécifiques sur les mesures de sécurité techniques et organisationnelles. Exigez des fournisseurs qu'ils démontrent leur conformité à ces exigences de sécurité. Mettez en place des processus de suivi régulier pour évaluer et vérifier la conformité des fournisseurs.
</p>
@elseif($conformite->category_label == 75)
    <p>Continuez à améliorer les pratiques de sécurité des informations dans les accords avec les fournisseurs en mettant en œuvre des mécanismes de suivi et de contrôle plus rigoureux. Exigez des audits de sécurité réguliers pour évaluer la conformité des fournisseurs. Établissez des partenariats avec des fournisseurs qui ont des certifications de sécurité reconnues.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Gestion de la sécurité de l'information dans la chaîne d'approvisionnement des technologies de l'information et des communications (ICT)</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Gestion de la sécurité de l\'information dans la chaîne d\'approvisionnement des technologies de l\'information et des communications (ICT)') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Mettre en place de toute urgence un programme complet de gestion de la sécurité de la chaîne d'approvisionnement des ICT. Identifier les principaux risques et vulnérabilités associés à la chaîne d'approvisionnement et élaborer un plan d'action pour y remédier.</p>
@elseif($conformite->category_label == 25)
    <p>Mettre en place un processus de sensibilisation et de formation des employés sur les risques de sécurité liés à la chaîne d'approvisionnement des ICT. Renforcer les contrôles de sécurité lors de la sélection des fournisseurs et établir des critères stricts pour l'évaluation de leur conformité.</p>
@elseif($conformite->category_label == 50)
    <p>Réaliser une évaluation approfondie des fournisseurs existants afin d'identifier les vulnérabilités potentielles dans la chaîne d'approvisionnement. Mettre en place des contrôles de sécurité supplémentaires pour atténuer les risques identifiés. Développer des accords contractuels solides qui imposent des exigences de sécurité spécifiques aux fournisseurs.
</p>
@elseif($conformite->category_label == 75)
    <p>Établir un processus de gestion de la chaîne d'approvisionnement des ICT bien défini, comprenant la documentation des politiques, des procédures et des responsabilités. Effectuer régulièrement des audits de sécurité pour vérifier l'efficacité des contrôles et des mesures mises en place. Encourager la collaboration avec les fournisseurs pour améliorer continuellement la sécurité de la chaîne d'approvisionnement.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Suivi, révision et gestion du changement des services fournisseurs</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Suivi, révision et gestion du changement des services fournisseurs') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Mettre en place de toute urgence un processus complet de suivi, de révision et de gestion du changement pour les services fournisseurs, en accordant une attention particulière à la documentation des changements, à l'évaluation des risques et à l'identification des mesures d'atténuation.</p>
@elseif($conformite->category_label == 25)
    <p>Mettre en place un processus formel de suivi et de révision des services fournisseurs, notamment en documentant les changements apportés par les fournisseurs et en évaluant régulièrement leur conformité aux exigences de sécurité. Développer des critères d'évaluation spécifiques pour mesurer la conformité des fournisseurs.</p>
@elseif($conformite->category_label == 50)
    <p>Établir un processus de suivi, de révision et de gestion du changement plus structuré pour les services fournisseurs, en mettant l'accent sur la documentation des changements apportés, l'évaluation de leur impact sur la sécurité de l'information et l'identification des mesures d'atténuation appropriées. Assurer une communication claire et transparente avec les fournisseurs concernant les exigences de sécurité.
</p>
@elseif($conformite->category_label == 75)
    <p>Mettre en place un processus robuste de suivi, de révision et de gestion du changement pour les services fournisseurs, en intégrant des mécanismes de contrôle et de suivi automatisés. Renforcer la collaboration avec les fournisseurs en établissant des partenariats stratégiques et en partageant régulièrement les objectifs de sécurité. Impliquer les parties prenantes internes et externes dans le processus de gestion du changement.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Sécurité de l'information pour l'utilisation de services cloud</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Sécurité de l\'information pour l\'utilisation de services cloud') !== false;
});
@endphp


@if($conformite)
@if($conformite->category_label == 0)
    <p>Réaliser une évaluation complète des risques liés à l'utilisation de services cloud et élaborer un plan d'action pour remédier aux vulnérabilités identifiées. Mettre en place des contrôles de sécurité de base, tels que la gestion des identités et des accès, la sauvegarde régulière des données et la gestion des incidents de sécurité dans le cloud.</p>
@elseif($conformite->category_label == 25)
    <p>Mettre en place des politiques et des procédures claires pour l'utilisation de services cloud, y compris des directives sur la sélection de fournisseurs fiables et des exigences de sécurité minimales. Renforcer la sensibilisation des utilisateurs aux risques associés à l'utilisation de services cloud et offrir une formation sur les bonnes pratiques de sécurité.</p>
@elseif($conformite->category_label == 50)
    <p>Développer des contrôles de sécurité plus robustes pour l'utilisation de services cloud, tels que l'authentification forte, le chiffrement des données sensibles et la surveillance continue des activités dans le cloud. Mettre en place des mécanismes de suivi et de gestion des incidents liés à la sécurité dans le cloud.</p>
@elseif($conformite->category_label == 75)
    <p>Établir une gouvernance solide pour l'utilisation de services cloud, en incluant des politiques et des procédures détaillées, des évaluations régulières des risques et des audits de sécurité. Mettre en place des mécanismes de supervision et de contrôle pour assurer la conformité aux politiques et aux exigences de sécurité spécifiques.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Planification et préparation de la gestion des incidents de sécurité de l'information</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Planification et préparation de la gestion des incidents de sécurité de l\'information') !== false;
});
@endphp 

@if($conformite)
@if($conformite->category_label == 0)
    <p>Mettre en place un processus complet de planification et de préparation de la gestion des incidents de sécurité de l'information. Cela devrait inclure l'identification des actifs critiques, l'établissement d'une équipe d'intervention d'urgence, la mise en place de procédures de notification des incidents, et l'élaboration d'un plan de continuité des activités en cas d'incident.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures de planification et de préparation de la gestion des incidents de sécurité de l'information, en se concentrant sur l'identification des actifs critiques et des scénarios d'incident possibles. Former le personnel sur les procédures de gestion des incidents et effectuer des exercices réguliers de simulation d'incident pour tester la préparation de l'organisation.</p>
@elseif($conformite->category_label == 50)
    <p>Améliorer les procédures existantes de planification et de préparation de la gestion des incidents de sécurité de l'information. Mettre en place des mécanismes de surveillance et de détection des incidents, tels que des outils de détection d'intrusion et des systèmes de détection des incidents. Mettre à jour régulièrement le plan de continuité des activités en fonction des nouvelles menaces et des changements dans l'environnement de sécurité.</p>
@elseif($conformite->category_label == 75)
    <p>Renforcer les procédures et les mécanismes de planification et de préparation de la gestion des incidents de sécurité de l'information. Effectuer des évaluations régulières de la préparation aux incidents, y compris des tests de pénétration et des audits de sécurité. Établir des partenariats avec des organismes externes spécialisés dans la gestion des incidents de sécurité pour une assistance et des conseils supplémentaires.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Évaluation et décision sur les événements liés à la sécurité de l'information</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Évaluation et décision sur les événements liés à la sécurité de l\'information') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Mettre en place un processus formel d'évaluation et de décision sur les événements liés à la sécurité de l'information. Cela devrait inclure des procédures de collecte et d'analyse des événements de sécurité, ainsi que des mécanismes de prise de décision pour déterminer la gravité et l'impact des événements.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures d'évaluation et de décision sur les événements liés à la sécurité de l'information, en mettant l'accent sur la collecte systématique des événements de sécurité et l'analyse de leur impact. Former le personnel sur les procédures d'évaluation et de décision et mettre en place des mécanismes de suivi pour assurer la résolution appropriée des événements.</p>
@elseif($conformite->category_label == 50)
    <p>Améliorer les procédures existantes d'évaluation et de décision sur les événements liés à la sécurité de l'information. Mettre en place des mécanismes de détection d'intrusion et de surveillance des événements de sécurité en temps réel. Développer des critères d'évaluation spécifiques pour déterminer la gravité et l'impact des événements.</p>
@elseif($conformite->category_label == 75)
    <p>Renforcer les procédures et les mécanismes d'évaluation et de décision sur les événements liés à la sécurité de l'information. Mettre en place des outils avancés d'analyse des événements de sécurité, tels que la corrélation des journaux et l'apprentissage automatique, pour une détection et une évaluation plus précises. Établir des protocoles de communication clairs et des mécanismes de coordination pour une résolution efficace des événements.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Réponse aux incidents de sécurité de l'information</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Réponse aux incidents de sécurité de l\'information') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Mettre en place un plan de réponse aux incidents de sécurité de l'information. Cela devrait inclure des procédures claires pour la détection, la notification, l'analyse, la gestion et la résolution des incidents de sécurité. Établir une équipe d'intervention d'urgence et définir les rôles et les responsabilités de chaque membre de l'équipe.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures de réponse aux incidents de sécurité de l'information, en mettant l'accent sur la détection précoce et la réponse rapide aux incidents. Former le personnel sur les procédures de réponse aux incidents et effectuer des exercices réguliers de simulation d'incident pour tester la préparation de l'équipe d'intervention.</p>
@elseif($conformite->category_label == 50)
    <p>Améliorer les procédures existantes de réponse aux incidents de sécurité de l'information. Mettre en place des mécanismes de détection d'incident en temps réel, tels que des outils de détection d'intrusion et des systèmes de surveillance des journaux. Mettre à jour régulièrement le plan de réponse aux incidents en fonction des nouvelles menaces et des leçons apprises.</p>
@elseif($conformite->category_label == 75)
    <p>Renforcer les procédures et les mécanismes de réponse aux incidents de sécurité de l'information. Effectuer des exercices de réponse aux incidents à grande échelle impliquant des parties prenantes internes et externes pour tester la coordination et la communication. Établir des partenariats avec des organismes spécialisés dans la réponse aux incidents pour une assistance et des conseils supplémentaires.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Tirer des enseignements des incidents de sécurité de l'information</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Tirer des enseignements des incidents de sécurité de l\'information') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Mettre en place un processus robuste pour tirer des enseignements des incidents de sécurité de l'information. Cela devrait inclure l'analyse post-incident pour comprendre les causes racines, les vulnérabilités et les erreurs commises. Établir des mécanismes de partage des leçons apprises avec l'ensemble de l'organisation.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures pour tirer des enseignements des incidents de sécurité de l'information, en mettant l'accent sur l'analyse des causes racines et la documentation des leçons apprises. Former le personnel sur l'importance de tirer des enseignements des incidents et promouvoir une culture d'apprentissage continu en matière de sécurité de l'information.</p>
@elseif($conformite->category_label == 50)
    <p>Améliorer les procédures existantes pour tirer des enseignements des incidents de sécurité de l'information. Mettre en place des mécanismes de suivi pour s'assurer que les recommandations découlant des incidents sont mises en œuvre de manière appropriée. Mettre en place un processus de révision régulière des incidents passés pour identifier les tendances et les domaines d'amélioration.</p>
@elseif($conformite->category_label == 75)
    <p>Renforcer les procédures et les mécanismes pour tirer des enseignements des incidents de sécurité de l'information. Effectuer des évaluations approfondies des incidents majeurs impliquant une analyse détaillée des causes racines et des recommandations d'amélioration. Fournir des ressources supplémentaires pour mettre en œuvre les mesures correctives et préventives identifiées.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Recueil des preuves</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Recueil des preuves') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Mettre en place des procédures formelles pour le recueil des preuves en cas d'incident de sécurité de l'information. Cela devrait inclure des directives sur la collecte, la préservation et la documentation appropriée des preuves numériques. Former le personnel concerné sur les bonnes pratiques de recueil des preuves.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures de recueil des preuves en cas d'incident de sécurité de l'information, en mettant l'accent sur la collecte adéquate des preuves numériques. Mettre à disposition des outils et des ressources nécessaires pour faciliter le processus de collecte des preuves. Effectuer des exercices pratiques pour tester l'efficacité des procédures de recueil des preuves.</p>
@elseif($conformite->category_label == 50)
    <p>Améliorer les procédures existantes de recueil des preuves en cas d'incident de sécurité de l'information. Mettre en place des solutions technologiques avancées pour faciliter la collecte, la préservation et l'analyse des preuves numériques. Mettre en œuvre des mécanismes de suivi pour s'assurer de la conformité aux procédures de recueil des preuves.</p>
@elseif($conformite->category_label == 75)
    <p>Renforcer les procédures et les mécanismes de recueil des preuves en cas d'incident de sécurité de l'information. Former une équipe spécialisée chargée du recueil des preuves et de l'analyse forensique. Mettre en place des protocoles de collaboration avec les autorités compétentes pour garantir l'admissibilité des preuves recueillies.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Sécurité de l'information en cas de perturbation</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Sécurité de l\'information en cas de perturbation') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Mettre en place des mesures de sécurité de l'information spécifiques pour faire face aux perturbations. Cela devrait inclure des procédures de sauvegarde régulières, des plans de continuité des activités et des plans de reprise après sinistre. Identifier les risques potentiels liés aux perturbations et établir des mesures de sécurité appropriées pour les atténuer.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures de sécurité de l'information pour faire face aux perturbations, en mettant l'accent sur la sauvegarde et la restauration des données critiques, ainsi que sur la disponibilité des systèmes essentiels. Mettre à jour et tester régulièrement les plans de continuité des activités et les plans de reprise après sinistre pour assurer leur efficacité.</p>
@elseif($conformite->category_label == 50)
    <p>Améliorer les mesures de sécurité de l'information existantes en cas de perturbations. Mettre en place des mécanismes avancés de sauvegarde et de récupération des données, tels que la réplication des données et la virtualisation des serveurs. Renforcer la résilience des systèmes et des réseaux pour assurer une disponibilité continue en cas de perturbations.</p>
@elseif($conformite->category_label == 75)
    <p>Renforcer les mesures de sécurité de l'information en cas de perturbations. Mettre en place des solutions de continuité des activités plus sophistiquées, telles que des sites de secours géographiquement dispersés et la mobilité des employés. Effectuer des évaluations régulières des risques et des tests de reprise après sinistre pour maintenir la préparation en cas de perturbations.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">État de préparation des technologies de l'information et des communications pour la continuité des activités</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'État de préparation des technologies de l\'information et des communications pour la continuité des activités') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Évaluer l'état de préparation des technologies de l'information et des communications (TIC) pour la continuité des activités. Cela devrait inclure l'identification des systèmes et des infrastructures critiques, ainsi que l'évaluation de leur résilience et de leur disponibilité en cas de perturbations. Mettre en place des mécanismes de surveillance et de sauvegarde régulière des TIC.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des plans de continuité des activités spécifiques pour les technologies de l'information et des communications. Identifier les systèmes et les services TIC essentiels et mettre en place des mesures pour assurer leur disponibilité continue en cas de perturbations. Effectuer des tests réguliers pour évaluer l'efficacité des plans de continuité des activités.</p>
@elseif($conformite->category_label == 50)
    <p>Améliorer les plans de continuité des activités des technologies de l'information et des communications. Mettre en place des mécanismes de sauvegarde et de récupération avancés pour les données et les systèmes TIC critiques. S'assurer que les plans de continuité des activités sont alignés sur les objectifs de l'organisation et régulièrement mis à jour en fonction des changements technologiques.</p>
@elseif($conformite->category_label == 75)
    <p>Renforcer l'état de préparation des technologies de l'information et des communications pour la continuité des activités. Mettre en place des solutions de redondance et de haute disponibilité pour les systèmes TIC critiques. Effectuer des audits réguliers pour évaluer la résilience des TIC et mettre en œuvre des améliorations en fonction des résultats.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Exigences légales, statutaires, réglementaires et contractuelles</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Exigences légales, statutaires, réglementaires et contractuelles') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Identifier les exigences légales, statutaires, réglementaires et contractuelles applicables à votre organisation en matière de sécurité de l'information. Cela peut inclure des lois sur la protection des données, des réglementations sectorielles spécifiques et des obligations contractuelles avec les clients et les fournisseurs. Mettre en place des procédures pour assurer la conformité à ces exigences.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des politiques et des procédures spécifiques pour répondre aux exigences légales, statutaires, réglementaires et contractuelles en matière de sécurité de l'information. Assurer la sensibilisation du personnel aux obligations légales et réglementaires pertinentes. Mettre en place des mécanismes de surveillance pour s'assurer de la conformité continue.</p>
@elseif($conformite->category_label == 50)
    <p>Améliorer les politiques et les procédures existantes pour répondre aux exigences légales, statutaires, réglementaires et contractuelles en matière de sécurité de l'information. Mettre en œuvre des mesures de contrôle appropriées pour garantir la conformité. Effectuer des audits réguliers pour évaluer l'efficacité des processus de conformité.</p>
@elseif($conformite->category_label == 75)
    <p>Renforcer la conformité aux exigences légales, statutaires, réglementaires et contractuelles en matière de sécurité de l'information. Mettre en place des mécanismes avancés de suivi et de rapport pour assurer la conformité continue. Collaborer avec les parties prenantes internes et externes pour maintenir une compréhension claire des obligations légales et réglementaires.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Droits de propriété intellectuelle</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Droits de propriété intellectuelle') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Identifier les droits de propriété intellectuelle associés aux actifs informationnels de votre organisation. Cela peut inclure des brevets, des marques de commerce, des droits d'auteur et des secrets commerciaux. Mettre en place des procédures pour protéger ces droits et prévenir toute utilisation non autorisée ou violation des droits de propriété intellectuelle.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des politiques et des procédures spécifiques pour protéger les droits de propriété intellectuelle de l'organisation. Sensibiliser le personnel aux droits de propriété intellectuelle et aux meilleures pratiques pour les protéger. Mettre en place des mécanismes de surveillance pour détecter et résoudre rapidement toute violation potentielle.</p>
@elseif($conformite->category_label == 50)
    <p>Améliorer les mesures de protection des droits de propriété intellectuelle de l'organisation. Mettre en place des contrôles technologiques et des restrictions d'accès pour protéger les actifs de propriété intellectuelle. Examiner régulièrement les politiques et les procédures pour s'assurer qu'elles sont à jour et efficaces.</p>
@elseif($conformite->category_label == 75)
    <p>Renforcer la protection des droits de propriété intellectuelle de l'organisation. Collaborer avec des experts juridiques spécialisés dans la propriété intellectuelle pour développer des stratégies de protection appropriées. Sensibiliser et former régulièrement le personnel aux droits de propriété intellectuelle et à leur importance pour l'organisation.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Protection des enregistrements</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Protection des enregistrements') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Identifier les enregistrements essentiels pour votre organisation et évaluer les risques associés à leur protection. Cela peut inclure des enregistrements financiers, des données clients, des contrats et d'autres informations sensibles. Mettre en place des procédures de sauvegarde régulières et de protection physique pour assurer l'intégrité et la confidentialité des enregistrements.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des politiques et des procédures spécifiques pour la protection des enregistrements. Établir des classifications d'enregistrements en fonction de leur sensibilité et mettre en place des mesures de sécurité appropriées. Effectuer des sauvegardes régulières et des tests de restauration pour garantir la disponibilité des enregistrements en cas de besoin.</p>
@elseif($conformite->category_label == 50)
    <p>Améliorer les mesures de protection des enregistrements existantes. Mettre en place des contrôles d'accès et des mécanismes de suivi pour assurer la confidentialité et l'intégrité des enregistrements. Mettre en œuvre des solutions de sauvegarde et de récupération avancées pour minimiser les risques de perte de données.</p>
@elseif($conformite->category_label == 75)
    <p>Renforcer la protection des enregistrements de manière proactive. Mettre en place des stratégies de gestion des enregistrements pour assurer leur conformité, leur intégrité et leur disponibilité à long terme. Effectuer des évaluations régulières des risques et des audits de sécurité pour maintenir un niveau élevé de protection des enregistrements.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Confidentialité et protection des informations personnelles identifiables (PII)</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Confidentialité et protection des informations personnelles identifiables (PII)') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Identifier les informations personnelles identifiables (PII) collectées, stockées ou traitées par votre organisation. Cela peut inclure des données telles que les noms, les adresses, les numéros de sécurité sociale et les informations financières. Mettre en place des politiques et des procédures pour assurer la confidentialité et la protection adéquates de ces informations.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des politiques et des procédures spécifiques pour la protection des informations personnelles identifiables (PII). Assurer la sensibilisation du personnel à l'importance de la confidentialité des PII et des meilleures pratiques en matière de protection des données. Mettre en place des mécanismes de contrôle et de suivi pour garantir la conformité aux politiques.</p>
@elseif($conformite->category_label == 50)
    <p>Améliorer les mesures de protection des informations personnelles identifiables (PII). Mettre en place des contrôles d'accès stricts, des méthodes de cryptage et des mécanismes de pseudonymisation pour protéger les PII. Effectuer des évaluations régulières des risques et des tests de vulnérabilité pour identifier et corriger les éventuelles lacunes de sécurité.</p>
@elseif($conformite->category_label == 75)
    <p>Renforcer la protection des informations personnelles identifiables (PII) en mettant en place des mesures de sécurité avancées. Cela peut inclure la mise en œuvre de solutions de sécurité avancées, telles que la surveillance des activités suspectes, la gestion des accès privilégiés et l'utilisation de techniques de détection des intrusions. Effectuer des audits réguliers pour garantir la conformité aux normes de confidentialité et de protection des PII.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Examen indépendant de la sécurité de l'information</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Examen indépendant de la sécurité de l\'information') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Planifier et programmer des examens indépendants de la sécurité de l'information pour évaluer l'efficacité des contrôles et des processus de sécurité existants. Engager un auditeur externe qualifié pour effectuer une évaluation impartiale de la sécurité de l'information dans votre organisation. Examiner les résultats de l'examen et mettre en place des actions correctives appropriées.</p>
@elseif($conformite->category_label == 25)
    <p>Effectuer régulièrement des examens indépendants de la sécurité de l'information pour évaluer la conformité aux politiques et aux normes de sécurité. Collaborer avec des auditeurs externes pour effectuer des évaluations objectives de la sécurité de l'information. Examiner les recommandations et les conclusions des examens et mettre en œuvre des mesures correctives.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer les examens indépendants de la sécurité de l'information en mettant en place des processus plus rigoureux. Collaborer avec des auditeurs externes expérimentés pour effectuer des évaluations approfondies de la sécurité de l'information. Examiner les recommandations et les résultats des examens et mettre en place des plans d'action pour améliorer la sécurité de l'information.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser les examens indépendants de la sécurité de l'information en les intégrant dans un programme de gouvernance de la sécurité de l'information plus large. Mettre en place des processus d'audit réguliers pour évaluer la conformité et l'efficacité des contrôles de sécurité. Collaborer avec des auditeurs externes pour garantir une évaluation objective et indépendante de la sécurité de l'information.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Conformité aux politiques, règles et normes de sécurité de l'information</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Conformité aux politiques, règles et normes de sécurité de l\'information') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Identifier les politiques, règles et normes de sécurité de l'information applicables à votre organisation. Établir des procédures pour assurer la conformité à ces directives. Communiquer les politiques de sécurité de l'information à tous les membres du personnel et fournir des formations régulières sur les meilleures pratiques de sécurité.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des politiques de sécurité de l'information détaillées et claires pour guider les pratiques de sécurité de votre organisation. Veiller à ce que ces politiques soient alignées sur les réglementations et les normes de sécurité pertinentes. Établir des mécanismes de suivi et de conformité pour évaluer et maintenir la conformité aux politiques.</p>
@elseif($conformite->category_label == 50)
    <p>Améliorer les mesures de conformité aux politiques, règles et normes de sécurité de l'information. Renforcer la sensibilisation du personnel aux politiques de sécurité de l'information et offrir une formation continue sur les pratiques de sécurité. Effectuer des évaluations régulières de conformité pour identifier les écarts et prendre des mesures correctives appropriées.</p>
@elseif($conformite->category_label == 75)
    <p>Renforcer la conformité aux politiques, règles et normes de sécurité de l'information en mettant en place des processus plus rigoureux. Effectuer des audits internes réguliers pour évaluer la conformité et l'efficacité des pratiques de sécurité. Collaborer avec des experts externes pour obtenir des évaluations indépendantes de la conformité.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
 </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 8px;">Procédures d'exploitation documentées</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Procédures d\'exploitation documentées') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Identifier les processus et les activités clés de votre organisation qui nécessitent des procédures d'exploitation documentées. Documenter ces procédures de manière claire et détaillée, en incluant les étapes, les responsabilités et les exigences spécifiques. Assurez-vous que les procédures documentées sont facilement accessibles à tous les membres du personnel concerné.</p>
@elseif($conformite->category_label == 25)
    <p>Développer et maintenir une bibliothèque centralisée de procédures d'exploitation documentées pour toutes les activités critiques de votre organisation. Veillez à ce que les procédures soient régulièrement mises à jour pour refléter les changements opérationnels. Assurez-vous que tous les membres du personnel concerné sont formés sur l'utilisation des procédures documentées.</p>
@elseif($conformite->category_label == 50)
    <p>Améliorer les procédures d'exploitation documentées en les alignant sur les meilleures pratiques de l'industrie et les normes de qualité. Mettre en place des mécanismes de suivi pour s'assurer que les procédures sont suivies de manière consistante. Effectuer des revues régulières des procédures pour identifier les opportunités d'amélioration.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser les procédures d'exploitation documentées en mettant en place des processus de gestion de la qualité et de l'amélioration continue. Effectuer des audits réguliers pour évaluer la conformité et l'efficacité des procédures. Encourager les commentaires des employés pour identifier les lacunes et les points d'amélioration dans les procédures documentées.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
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