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
        <td style="border: 1px solid black; padding: 8px;">Périmètres de sécurité physique</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Périmètres de sécurité physique') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir une politique de sécurité physique clairement définie. Cette politique devrait inclure des directives sur la protection des locaux physiques, l'accès aux zones sensibles, la surveillance et la détection des intrusions, ainsi que les mesures à prendre en cas d'incident.</p>
@elseif($conformite->category_label == 25)
    <p>Mettre en place des contrôles de sécurité physique de base pour protéger les locaux et les actifs de l'organisation. Cela peut inclure l'installation de systèmes de verrouillage sécurisés, la mise en place de procédures d'identification et d'autorisation pour l'accès aux zones sensibles, et la surveillance des zones à l'aide de caméras de sécurité.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer les mesures de sécurité physique en mettant en place des dispositifs de détection des intrusions, tels que des systèmes d'alarme et des capteurs de mouvement. Effectuer des évaluations régulières des risques pour identifier les vulnérabilités potentielles et mettre en place des mesures de protection appropriées.
</p>
@elseif($conformite->category_label == 75)
    <p>Améliorer la sécurité physique en effectuant des audits réguliers pour évaluer l'efficacité des mesures de sécurité mises en place. Assurer la formation continue des employés sur les procédures de sécurité physique, mettre en place des procédures d'urgence claires et tester régulièrement les plans de continuité des activités.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Contrôle d'accès physique</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Contrôle d\'accès physique') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir un système de contrôle d'accès physique complet pour les locaux de l'organisme. Cela peut inclure l'installation de dispositifs de sécurité tels que des serrures électroniques, des cartes d'accès ou des systèmes de reconnaissance biométrique pour limiter l'accès aux zones sensibles.</p>
@elseif($conformite->category_label == 25)
    <p>Mettre en place des contrôles de base pour le contrôle d'accès physique. Par exemple, installer des serrures sur les portes des locaux, utiliser des badges d'identification pour les employés et les visiteurs, et mettre en place des procédures pour superviser et gérer l'accès aux zones sensibles.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer les mesures de contrôle d'accès physique en mettant en place un système de surveillance vidéo pour les zones sensibles, en utilisant des systèmes d'alarme pour détecter les intrusions et en mettant en œuvre des politiques d'autorisation formelles pour l'accès aux zones restreintes.
</p>
@elseif($conformite->category_label == 75)
    <p>Améliorer les mesures de contrôle d'accès physique en effectuant des évaluations régulières des risques pour identifier les vulnérabilités et en mettant en place des mesures de protection supplémentaires.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Sécurisation des bureaux, des salles et des équipements</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Sécurisation des bureaux, des salles et des équipements') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Mettez en place des contrôles de sécurité appropriés pour les bureaux, les salles et les équipements. Identifiez les zones sensibles et restreignez l'accès aux personnes autorisées uniquement. Utilisez des serrures, des systèmes de contrôle d'accès et des caméras de surveillance pour renforcer la sécurité physique. Développez des procédures pour la gestion des visiteurs et assurez-vous que tous les employés sont conscients des règles de sécurité.</p>
@elseif($conformite->category_label == 25)
    <p>Renforcez les mesures de sécurité physique en identifiant les vulnérabilités et en y remédiant. Améliorez les systèmes de contrôle d'accès en utilisant des technologies plus avancées telles que l'authentification à deux facteurs. Mettez en place des procédures de vérification régulières pour vous assurer que les bureaux, les salles et les équipements sont correctement sécurisés.</p>
@elseif($conformite->category_label == 50)
    <p>Continuez à améliorer la sécurité physique en mettant en œuvre des contrôles plus stricts. Renforcez les procédures de vérification pour garantir que seules les personnes autorisées ont accès aux zones sensibles. Établissez des politiques pour la gestion des visiteurs et la protection des équipements. Sensibilisez les employés aux meilleures pratiques en matière de sécurité physique.
</p>
@elseif($conformite->category_label == 75)
    <p>Continuez à effectuer des contrôles réguliers pour maintenir la sécurité physique. Renforcez la sensibilisation des employés à la sécurité et encouragez une culture de la sécurité dans l'organisation.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Surveillance de la sécurité physique</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Surveillance de la sécurité physique') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Évaluer les besoins de surveillance de la sécurité physique de votre organisation. Cela peut inclure la surveillance des accès aux locaux, la vidéosurveillance, les systèmes d'alarme, etc. Mettre en place des mesures de surveillance appropriées en fonction de ces besoins, en utilisant des technologies et des procédures adéquates.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des politiques et des procédures de surveillance de la sécurité physique pour guider les pratiques de votre organisation. Assurez-vous que les politiques et les procédures sont claires, compréhensibles et facilement accessibles à tous les membres du personnel concerné. Former le personnel sur les procédures de surveillance et les meilleures pratiques de sécurité physique.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la surveillance de la sécurité physique en mettant en place des systèmes de surveillance avancés, tels que des caméras de sécurité haute résolution, des capteurs de mouvement et des systèmes d'alarme sophistiqués. Assurer une surveillance continue des locaux et des zones sensibles. Effectuer des évaluations régulières pour identifier les vulnérabilités de sécurité physique.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la surveillance de la sécurité physique en intégrant les systèmes de surveillance avec d'autres mesures de sécurité, telles que le contrôle d'accès et la surveillance des activités en ligne. Mettre en place des mécanismes de réponse rapide en cas d'incident de sécurité physique. Effectuer des audits réguliers pour évaluer l'efficacité des mesures de surveillance de la sécurité physique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Protection contre les menaces physiques et environnementales</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Protection contre les menaces physiques et environnementales') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Identifier les menaces physiques et environnementales potentielles qui pourraient affecter la sécurité de votre organisation. Cela peut inclure des menaces telles que les incendies, les inondations, les catastrophes naturelles, le vol, etc. Mettre en place des mesures de protection appropriées, telles que des systèmes de détection d'incendie, des systèmes de sauvegarde des données, des dispositifs de verrouillage et des mesures de sécurité physique.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des politiques et des procédures de protection contre les menaces physiques et environnementales. Assurez-vous que les politiques et les procédures sont claires, compréhensibles et facilement accessibles à tous les membres du personnel concerné. Former le personnel sur les mesures de protection et les meilleures pratiques en matière de sécurité.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer les mesures de protection contre les menaces physiques et environnementales en mettant en place des systèmes de sécurité avancés, tels que des systèmes de détection d'intrusion, des systèmes de surveillance des alarmes et des systèmes de sauvegarde redondants. Établir des procédures d'urgence pour faire face aux situations critiques. Effectuer des tests réguliers des mesures de protection.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser les mesures de protection contre les menaces physiques et environnementales en intégrant les systèmes de sécurité avec d'autres mesures, telles que la surveillance en temps réel, la surveillance des conditions environnementales et la planification de la continuité des activités. Effectuer des évaluations régulières et des audits pour identifier les vulnérabilités et les opportunités d'amélioration.</p>
@endif
@endif
</td>
    </tr>

    <tr>
        <td style="border: 1px solid black; padding: 8px;">Travail en zones sécurisées</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Travail en zones sécurisées') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p> Mettez en place des zones sécurisées conformément aux exigences de la norme ISO 27001. Identifiez les lacunes actuelles, élaborez un plan d'action et mettez en œuvre des contrôles physiques et logiques appropriés.</p>
@elseif($conformite->category_label == 25)
    <p>Améliorez les zones sécurisées existantes en renforçant les contrôles physiques et logiques, en délimitant clairement les zones et en mettant en place des politiques et des procédures pour guider les employés.</p>
@elseif($conformite->category_label == 50)
    <p>Maintenez et améliorez les contrôles des zones sécurisées en les testant régulièrement, en renforçant la sensibilisation des employés et en fournissant une formation continue.</p>
@elseif($conformite->category_label == 75)
    <p>Continuez à maintenir et à auditer les contrôles des zones sécurisées, fournissez une formation régulière aux employés et restez à jour sur les nouvelles menaces et les meilleures pratiques.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Bureau clair et écran clair</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Bureau clair et écran clair') !== false;
});

@endphp
@if($conformite)
@if($conformite->category_label == 0)
    <p>Organiser votre bureau de manière à ce qu'il soit propre, bien rangé et dégagé de tout encombrement. Assurez-vous que les documents sensibles sont correctement stockés et que les informations confidentielles ne sont pas visibles par des personnes non autorisées.</p>
@elseif($conformite->category_label == 25)
    <p>Mettre en place des politiques pour encourager les employés à maintenir leur bureau propre et bien rangé. Fournir des outils de rangement appropriés, tels que des classeurs, des bacs de rangement et des étagères. Sensibiliser les employés à l'importance de maintenir un environnement de travail propre.</p>
@elseif($conformite->category_label == 50)
    <p>Établir des procédures pour la gestion des documents et des informations sur le bureau. Cela peut inclure des politiques de numérisation et de stockage électronique des documents, ainsi que des protocoles pour l'élimination sécurisée des documents confidentiels. Encourager les employés à utiliser des écrans de confidentialité pour protéger les informations sensibles affichées à l'écran.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser l'organisation du bureau en mettant en place des systèmes de gestion documentaire électronique pour réduire la quantité de papier utilisé. Promouvoir l'utilisation d'écrans de confidentialité pour prévenir les regards indiscrets. Effectuer des audits réguliers pour s'assurer que les politiques et les procédures sont suivies de manière cohérente.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Implantation et protection des équipements</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Implantation et protection des équipements') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Évaluer l'emplacement physique des équipements de votre organisation et identifier les risques potentiels liés à leur implantation. Assurez-vous que les équipements sensibles ou critiques sont situés dans des zones sécurisées et protégées contre l'accès non autorisé.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des politiques et des procédures pour l'implantation et la protection des équipements. Cela peut inclure des directives sur l'emplacement approprié des équipements, les mesures de sécurité physiques à mettre en place, et les protocoles de protection des équipements contre le vol, les dommages ou la manipulation non autorisée.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la sécurité des équipements en mettant en place des mécanismes de verrouillage et de surveillance appropriés. Cela peut inclure l'utilisation de serrures, de caméras de sécurité, de systèmes d'alarme, de contrôles d'accès et de marquages de sécurité. Veiller à ce que les employés soient formés sur les procédures de sécurité et les meilleures pratiques pour la protection des équipements.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la protection des équipements en établissant des procédures de contrôle d'accès strictes, en utilisant des technologies de sécurité avancées telles que la biométrie ou la surveillance vidéo intelligente, et en effectuant des évaluations régulières des risques et des vulnérabilités. Mettre en place des mesures de sauvegarde appropriées pour prévenir la perte de données ou les interruptions de service en cas d'incident.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Sécurité des actifs hors site</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Sécurité des actifs hors site') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Identifier les actifs de l'organisation qui sont hors site, tels que les données stockées dans le cloud, les équipements utilisés à distance, les documents ou les biens stockés à l'extérieur des locaux de l'entreprise. Évaluer les risques associés à ces actifs et mettre en place des mesures de sécurité appropriées.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des politiques et des procédures pour la sécurité des actifs hors site. Cela peut inclure des directives sur la gestion des données dans le cloud, la sécurisation des équipements utilisés à distance, le stockage sécurisé des documents hors site et les protocoles pour la protection des biens lorsqu'ils sont déplacés à l'extérieur des locaux de l'entreprise.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la sécurité des actifs hors site en utilisant des mesures de protection supplémentaires. Cela peut inclure le chiffrement des données stockées dans le cloud, l'utilisation de connexions sécurisées pour accéder aux équipements à distance, l'utilisation de systèmes de suivi ou de géolocalisation pour les biens hors site, et la mise en place de contrats de sécurité avec les fournisseurs de stockage hors site.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la sécurité des actifs hors site en effectuant des évaluations régulières des risques, en mettant en place des audits de sécurité pour les fournisseurs de stockage hors site, en renforçant les politiques de sécurité des données et en fournissant une formation continue aux employés sur les meilleures pratiques pour la protection des actifs hors site.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Supports de stockage</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Supports de stockage') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Identifier les supports de stockage utilisés dans votre organisation, tels que les disques durs, les clés USB, les DVD ou les bandes magnétiques. Évaluer les risques associés à ces supports de stockage et mettre en place des mesures de sécurité appropriées.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des politiques et des procédures pour la gestion des supports de stockage. Cela peut inclure des directives sur l'utilisation autorisée des supports de stockage, la classification des données stockées, les mesures de sécurité physiques et logiques à mettre en place, et les protocoles pour la destruction sécurisée des supports de stockage obsolètes.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la sécurité des supports de stockage en utilisant des mesures de protection supplémentaires. Cela peut inclure le chiffrement des données stockées sur les supports de stockage, l'utilisation de mots de passe ou d'authentification pour accéder aux données, la sauvegarde régulière des données sur des supports alternatifs, et la mise en place de contrôles d'accès physiques pour les supports de stockage sensibles.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la sécurité des supports de stockage en mettant en place des procédures strictes pour le contrôle et la gestion des supports de stockage. Cela peut inclure l'utilisation de logiciels de gestion des supports de stockage, la traçabilité des supports de stockage pour prévenir la perte ou le vol, la formation régulière des employés sur les politiques de gestion des supports de stockage, et l'audit régulier des pratiques de gestion des supports de stockage.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Utilitaires de prise en charge</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Utilitaires de prise en charge') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Identifier les utilitaires de prise en charge utilisés dans votre organisation, tels que les outils de sauvegarde, les outils de surveillance réseau ou les outils de gestion des correctifs. Évaluer les risques associés à ces utilitaires et mettre en place des mesures de sécurité appropriées.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des politiques et des procédures pour l'utilisation des utilitaires de prise en charge. Cela peut inclure des directives sur l'installation et la configuration sécurisée des utilitaires, l'attribution des droits d'accès aux utilitaires, la surveillance de leur utilisation et la formation des utilisateurs sur les bonnes pratiques.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la sécurité des utilitaires de prise en charge en utilisant des mesures de protection supplémentaires. Cela peut inclure la mise à jour régulière des utilitaires avec les derniers correctifs de sécurité, l'utilisation de l'authentification forte pour accéder aux utilitaires, la limitation des privilèges d'accès aux utilitaires et la surveillance de leur utilisation.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la sécurité des utilitaires de prise en charge en mettant en place des processus de gestion rigoureux. Cela peut inclure l'évaluation régulière des utilitaires utilisés, la supervision de leur utilisation, l'audit des droits d'accès aux utilitaires, la sensibilisation des utilisateurs aux risques associés aux utilitaires et la formation des administrateurs sur les meilleures pratiques de gestion.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Sécurité du câblage</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Sécurité du câblage') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Identifier les câblages utilisés dans votre organisation, tels que les câbles réseau, les câbles d'alimentation ou les câbles de communication. Évaluer les risques associés à ces câblages et mettre en place des mesures de sécurité appropriées.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des politiques et des procédures pour la sécurité du câblage. Cela peut inclure des directives sur l'installation et le routage sécurisés des câbles, la protection physique des câbles contre l'accès non autorisé, la documentation appropriée des câblages et la formation des employés sur les bonnes pratiques de gestion des câbles.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la sécurité du câblage en utilisant des mesures de protection supplémentaires. Cela peut inclure l'utilisation de câbles blindés pour réduire les risques d'interception ou d'interférence électromagnétique, l'utilisation de dispositifs de verrouillage pour empêcher le débranchement non autorisé des câbles, et la surveillance régulière de l'intégrité des câbles.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la sécurité du câblage en mettant en place des processus de gestion et de maintenance rigoureux. Cela peut inclure l'identification et le marquage appropriés des câbles, l'audit régulier de l'infrastructure de câblage, la mise en place de contrôles d'accès physique pour les locaux où se trouvent les câbles sensibles, et la formation continue des employés sur les meilleures pratiques de sécurité du câblage.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Entretien du matériel</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Entretien du matériel') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Identifier le matériel utilisé dans votre organisation, tels que les ordinateurs, les serveurs, les périphériques et les équipements réseau. Évaluer les risques associés à ce matériel et mettre en place des mesures d'entretien appropriées.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des politiques et des procédures pour l'entretien du matériel. Cela peut inclure des directives sur la planification et la réalisation régulières des opérations de maintenance, la sauvegarde régulière des données, la gestion des mises à jour logicielles, et la formation des utilisateurs sur les bonnes pratiques d'entretien.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer l'entretien du matériel en utilisant des mesures de protection supplémentaires. Cela peut inclure l'utilisation de solutions de surveillance à distance pour détecter les problèmes matériels, la mise en place d'un programme de remplacement régulier des composants obsolètes, l'application de mesures de refroidissement adéquates pour prévenir la surchauffe, et la mise en place de politiques de gestion des incidents matériels.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser l'entretien du matériel en mettant en place des processus de gestion et de maintenance rigoureux. Cela peut inclure la tenue d'un inventaire à jour du matériel, la réalisation régulière d'audits de sécurité matérielle, la formation continue du personnel technique sur les meilleures pratiques d'entretien, et l'établissement de contrats de maintenance avec des fournisseurs qualifiés.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Élimination ou réutilisation sécurisée de l'équipement</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Élimination ou réutilisation sécurisée de l\'équipement') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Identifier l'équipement informatique et électronique utilisé dans votre organisation, tels que les ordinateurs, les serveurs, les périphériques et les dispositifs de stockage. Évaluer les risques associés à l'élimination ou à la réutilisation de cet équipement et mettre en place des mesures de sécurité appropriées.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des politiques et des procédures pour l'élimination ou la réutilisation sécurisée de l'équipement. Cela peut inclure des directives sur la suppression sécurisée des données stockées sur les équipements, la désactivation et la suppression des informations personnelles ou sensibles, la réinitialisation des paramètres d'usine, et la documentation appropriée des processus d'élimination ou de réutilisation.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la sécurité de l'élimination ou de la réutilisation de l'équipement en utilisant des mesures de protection supplémentaires. Cela peut inclure l'utilisation de logiciels de suppression de données certifiés, la destruction physique des supports de stockage, la mise en place de protocoles de vérification de la suppression des données, et la formation des employés sur les meilleures pratiques d'élimination ou de réutilisation sécurisée.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la sécurité de l'élimination ou de la réutilisation de l'équipement en mettant en place des processus de gestion rigoureux. Cela peut inclure l'utilisation de services professionnels d'élimination ou de réutilisation sécurisée de l'équipement, la tenue d'un registre détaillé des équipements éliminés ou réutilisés, la réalisation d'audits réguliers de conformité, et la sensibilisation continue des employés aux risques liés à l'élimination ou à la réutilisation de l'équipement.</p>
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