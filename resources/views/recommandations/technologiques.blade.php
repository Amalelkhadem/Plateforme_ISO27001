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
        <td style="border: 1px solid black; padding: 8px;">Sécurité des équipements des utilisateurs terminaux</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Sécurité des équipements des utilisateurs terminaux') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Identifier les équipements des utilisateurs terminaux utilisés dans votre organisation, tels que les ordinateurs portables, les smartphones, les tablettes et les périphériques mobiles. Évaluer les risques associés à ces équipements et mettre en place des mesures de sécurité appropriées.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des politiques et des procédures pour la sécurité des équipements des utilisateurs terminaux. Cela peut inclure des directives sur l'utilisation de mots de passe forts, l'activation du chiffrement des données, l'installation de logiciels de sécurité à jour, et la sensibilisation des utilisateurs aux menaces de sécurité.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la sécurité des équipements des utilisateurs terminaux en utilisant des mesures de protection supplémentaires. Cela peut inclure l'utilisation de solutions de gestion des appareils mobiles pour contrôler et sécuriser les smartphones et les tablettes, la mise en place de pare-feu et d'antivirus sur les ordinateurs portables, et l'utilisation de la biométrie ou de l'authentification à deux facteurs pour renforcer l'accès aux équipements.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la sécurité des équipements des utilisateurs terminaux en mettant en place des processus de gestion rigoureux. Cela peut inclure la formation régulière des utilisateurs sur les meilleures pratiques de sécurité, la surveillance de l'utilisation des équipements, l'application des mises à jour de sécurité et des correctifs logiciels, et la mise en place de politiques de réponse aux incidents de sécurité.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Droits d'accès privilégiés</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Droits d\'accès privilégiés') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Identifier les droits d'accès privilégiés accordés aux utilisateurs dans votre organisation, tels que les administrateurs système, les administrateurs de base de données et les super-utilisateurs. Évaluer les risques associés à ces droits et mettre en place des mesures de sécurité appropriées.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des politiques et des procédures pour la gestion des droits d'accès privilégiés. Cela peut inclure des directives sur la classification des privilèges, la limitation de l'accès privilégié aux seules personnes qui en ont besoin, la mise en place de contrôles d'authentification et d'autorisation rigoureux, et la surveillance des activités des utilisateurs privilégiés.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la sécurité des droits d'accès privilégiés en utilisant des mesures de protection supplémentaires. Cela peut inclure la mise en place de mécanismes de journalisation et d'audit pour suivre les actions des utilisateurs privilégiés, la mise en œuvre de processus de revue régulière des droits d'accès, la segmentation des privilèges pour limiter les actions possibles, et l'utilisation de technologies telles que la gestion des accès à privilèges (PAM) pour renforcer la sécurité des comptes privilégiés.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la gestion des droits d'accès privilégiés en mettant en place des processus de gestion rigoureux. Cela peut inclure l'utilisation de solutions de gestion des identités et des accès (IAM) pour centraliser et contrôler les droits d'accès, la formation continue des administrateurs sur les meilleures pratiques de gestion des privilèges, la revue régulière des droits d'accès privilégiés, et l'application de principes de moindre privilège pour réduire les risques associés aux droits excessifs.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Restriction d'accès à l'information</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Restriction d\'accès à l\'information') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Identifier les informations sensibles ou confidentielles dans votre organisation, telles que les données personnelles des clients, les secrets commerciaux ou les informations stratégiques. Évaluer les risques associés à ces informations et mettre en place des mesures de sécurité appropriées pour restreindre leur accès.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des politiques et des procédures pour la restriction d'accès à l'information. Cela peut inclure des directives sur la classification de l'information, la définition des niveaux d'accès appropriés, la mise en place de contrôles d'authentification et d'autorisation, et la sensibilisation des employés à l'importance de la protection de l'information.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la sécurité de la restriction d'accès à l'information en utilisant des mesures de protection supplémentaires. Cela peut inclure la mise en place de pare-feu et de systèmes de détection des intrusions pour contrôler l'accès aux informations sensibles, la mise en œuvre de contrôles de sécurité sur les systèmes de stockage et de partage de fichiers, et la limitation des droits d'accès en fonction du principe du moindre privilège.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la restriction d'accès à l'information en mettant en place des processus de gestion rigoureux. Cela peut inclure l'utilisation de solutions de gestion des droits numériques pour contrôler et surveiller l'accès aux informations sensibles, la réalisation d'audits réguliers de conformité, la formation continue des employés sur les politiques et procédures de sécurité de l'information, et la sensibilisation à la protection de la vie privée et à la conformité aux lois et réglementations relatives à la confidentialité des données.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Accès au code source</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Accès au code source') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Identifier les composants logiciels utilisés dans votre organisation et évaluer la nécessité d'accéder au code source de ces composants. Déterminer les risques associés à l'accès au code source et mettre en place des mesures de sécurité appropriées pour protéger l'intégrité et la confidentialité du code source.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des politiques et des procédures pour gérer l'accès au code source. Cela peut inclure des directives sur l'attribution des droits d'accès, la définition des responsabilités des personnes autorisées à accéder au code source, la mise en place de contrôles d'authentification et de journalisation, et la protection physique et logique des environnements où le code source est stocké.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la sécurité de l'accès au code source en utilisant des mesures de protection supplémentaires. Cela peut inclure l'utilisation de technologies de gestion des sources pour contrôler et suivre l'accès au code source, la mise en œuvre de procédures de revue du code pour détecter les vulnérabilités et les erreurs de programmation, et la mise en place de contrôles de sécurité pour empêcher toute modification non autorisée du code source.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la gestion de l'accès au code source en mettant en place des processus de gestion rigoureux. Cela peut inclure l'utilisation de systèmes de contrôle de version pour suivre les modifications apportées au code source, la formation continue des développeurs sur les meilleures pratiques de sécurité du code, la réalisation d'audits réguliers de sécurité du code et la mise en place de politiques de divulgation responsable pour signaler les vulnérabilités découvertes.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Authentification sécurisée</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Authentification sécurisée') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Évaluer les méthodes d'authentification utilisées dans votre organisation et identifier les vulnérabilités potentielles. Mettre en place des mesures de sécurité appropriées pour renforcer l'authentification et protéger les comptes des utilisateurs contre les accès non autorisés.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des politiques et des procédures pour l'authentification sécurisée. Cela peut inclure l'utilisation de mots de passe forts, la définition de règles de complexité des mots de passe, la mise en place de mécanismes de verrouillage de compte après un certain nombre de tentatives infructueuses, et l'encouragement des utilisateurs à utiliser des méthodes d'authentification à plusieurs facteurs.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la sécurité de l'authentification en utilisant des mesures de protection supplémentaires. Cela peut inclure l'utilisation de technologies d'authentification biométrique, l'implémentation de solutions de gestion des identités et des accès (IAM) pour centraliser et gérer les informations d'authentification, et l'intégration de protocoles d'authentification sécurisés tels que OAuth ou SAML.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser l'authentification sécurisée en mettant en place des processus de gestion rigoureux. Cela peut inclure la surveillance régulière des journaux d'authentification pour détecter les tentatives d'accès non autorisées, la formation continue des utilisateurs sur les bonnes pratiques en matière de sécurité des mots de passe, l'utilisation de solutions d'authentification à distance pour contrôler l'accès aux ressources internes, et l'intégration de mécanismes d'authentification adaptatifs pour détecter les comportements suspects.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Gestion de la capacité</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Gestion de la capacité') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Évaluer les besoins actuels et futurs en matière de capacité de votre infrastructure informatique. Identifier les goulots d'étranglement potentiels et les risques liés à une capacité insuffisante. Mettre en place des mesures pour surveiller et gérer efficacement la capacité afin de répondre aux demandes croissantes.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des politiques et des procédures pour la gestion de la capacité. Cela peut inclure l'établissement de critères de performance et d'indicateurs clés de performance (KPI) pour surveiller la capacité, la collecte et l'analyse régulières des données de performance, et la planification des ressources en fonction des besoins prévus.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la gestion de la capacité en utilisant des mesures de protection supplémentaires. Cela peut inclure l'utilisation de technologies de virtualisation et de conteneurisation pour optimiser l'utilisation des ressources, la mise en place de mécanismes d'équilibrage de charge pour répartir la demande de manière équilibrée, et l'automatisation des processus de provisionnement et de mise à l'échelle des ressources.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la gestion de la capacité en mettant en place des processus de gestion rigoureux. Cela peut inclure l'utilisation de solutions de surveillance et de gestion des performances pour anticiper les problèmes de capacité, la réalisation d'analyses prédictives pour estimer les besoins futurs, la mise en place de plans d'urgence pour faire face à des situations de demande exceptionnellement élevée, et la coordination avec les équipes opérationnelles pour garantir une réponse efficace aux besoins de capacité.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Protection contre les logiciels malveillants</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Protection contre les logiciels malveillants') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Évaluer les risques de logiciels malveillants dans votre environnement informatique. Mettre en place des mesures de sécurité appropriées pour protéger les systèmes et les données contre les logiciels malveillants, tels que l'installation d'un logiciel antivirus et d'un pare-feu, ainsi que la sensibilisation des utilisateurs aux bonnes pratiques de sécurité.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des politiques et des procédures pour la protection contre les logiciels malveillants. Cela peut inclure la définition de règles de sécurité pour l'utilisation d'applications et de périphériques externes, la mise en place de mécanismes de détection des logiciels malveillants en temps réel, et la réalisation régulière de mises à jour de sécurité pour les logiciels et les systèmes.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la protection contre les logiciels malveillants en utilisant des mesures de protection supplémentaires. Cela peut inclure la mise en place de systèmes de prévention des intrusions, l'utilisation de solutions de sandboxing pour isoler les applications potentiellement dangereuses, et la réalisation régulière d'analyses de vulnérabilités et de tests de pénétration.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la protection contre les logiciels malveillants en mettant en place des processus de gestion rigoureux. Cela peut inclure la formation régulière des utilisateurs sur la détection et la prévention des logiciels malveillants, la mise en place de mécanismes de réponse aux incidents de sécurité, la réalisation d'audits de sécurité réguliers, et la surveillance proactive des menaces et des vulnérabilités.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Gestion des vulnérabilités techniques</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Gestion des vulnérabilités techniques') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Évaluer les vulnérabilités techniques présentes dans votre environnement informatique. Mettre en place des mesures de gestion des vulnérabilités pour identifier, évaluer et traiter les vulnérabilités de manière proactive, en appliquant les correctifs appropriés et en mettant à jour les systèmes et les logiciels.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des politiques et des procédures pour la gestion des vulnérabilités techniques. Cela peut inclure l'établissement d'une équipe dédiée à la gestion des vulnérabilités, la définition des responsabilités et des processus de signalement des vulnérabilités, et la mise en place d'un processus de suivi des correctifs et des mises à jour.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la gestion des vulnérabilités techniques en utilisant des mesures de protection supplémentaires. Cela peut inclure l'utilisation de scanners de vulnérabilités pour identifier les failles de sécurité, la mise en place d'une gestion centralisée des correctifs, et l'adoption de bonnes pratiques de configuration sécurisée pour les systèmes et les applications.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la gestion des vulnérabilités techniques en mettant en place des processus de gestion rigoureux. Cela peut inclure l'intégration de la gestion des vulnérabilités dans le cycle de développement logiciel, la réalisation régulière d'audits de sécurité, la formation continue du personnel sur les bonnes pratiques de sécurité, et la surveillance proactive des nouvelles vulnérabilités et des avis de sécurité.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Gestion de la configuration</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Gestion de la configuration') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir une politique de gestion de la configuration qui définit les processus et les procédures pour gérer les configurations des actifs informatiques. Cela peut inclure la documentation des configurations de référence, l'identification et le contrôle des modifications de configuration, et la gestion des versions des actifs logiciels et matériels.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des processus et des procédures pour la gestion de la configuration. Cela peut inclure l'établissement d'un système de gestion de la configuration, la définition des rôles et des responsabilités, et la mise en place de mécanismes de contrôle des modifications.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la gestion de la configuration en utilisant des mesures de protection supplémentaires. Cela peut inclure l'utilisation d'outils de gestion de la configuration, la mise en place de contrôles d'accès, et la réalisation d'audits réguliers.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la gestion de la configuration en intégrant des processus de gestion rigoureux. Cela peut inclure l'automatisation des processus, l'utilisation d'outils de gestion de configuration avancés, et l'établissement de mécanismes de surveillance et de reporting.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Suppression de l'information</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Suppression de l\'information') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir une politique de suppression de l'information qui définit les procédures et les mécanismes pour supprimer de manière sécurisée les informations non nécessaires ou obsolètes. Cela peut inclure l'utilisation de méthodes de suppression appropriées, telles que l'effacement sécurisé des supports de stockage ou la destruction physique des documents.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures et des lignes directrices pour la suppression sécurisée de l'information. Cela peut inclure l'identification des informations à supprimer, l'établissement de règles de rétention des données, et l'utilisation de techniques de suppression appropriées pour garantir la confidentialité et l'intégrité des données.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la suppression de l'information en utilisant des mesures de protection supplémentaires. Cela peut inclure la mise en œuvre de processus de suppression automatisés, l'utilisation de méthodes de suppression certifiées, et la réalisation d'audits réguliers pour s'assurer de la conformité aux politiques de suppression.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la suppression de l'information en mettant en place des processus de gestion rigoureux. Cela peut inclure l'intégration de la suppression de l'information dans le cycle de vie des données, la formation du personnel sur les bonnes pratiques de suppression, et l'utilisation de technologies avancées pour garantir la suppression sécurisée des données sensibles.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Masquage des données</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Masquage des données') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir une politique de masquage des données qui définit les procédures et les techniques pour masquer les données sensibles ou confidentielles. Cela peut inclure l'utilisation de méthodes de masquage, telles que l'anonymisation ou la pseudonymisation, pour protéger la confidentialité des données lors de leur utilisation en environnements de développement ou de test.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures et des lignes directrices pour le masquage des données. Cela peut inclure l'identification des données à masquer, l'établissement de règles de masquage, et l'utilisation de techniques de masquage appropriées pour préserver la confidentialité des données sensibles.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer le masquage des données en utilisant des mesures de protection supplémentaires. Cela peut inclure l'utilisation d'outils de masquage des données, l'application de techniques de masquage avancées, et la réalisation de tests réguliers pour s'assurer de l'efficacité du masquage.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser le masquage des données en mettant en place des processus de gestion rigoureux. Cela peut inclure l'intégration du masquage des données dans le cycle de vie des données, la formation du personnel sur les bonnes pratiques de masquage, et l'utilisation de technologies avancées pour garantir l'efficacité et l'efficience du masquage.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Prévention des fuites de données</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Prévention des fuites de données') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir une politique de prévention des fuites de données qui définit les procédures et les contrôles pour empêcher la divulgation non autorisée des données sensibles ou confidentielles. Cela peut inclure l'utilisation de technologies telles que le chiffrement des données, les pare-feu, l'authentification forte, et des politiques de sécurité strictes pour protéger les données contre les fuites.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures et des lignes directrices pour la prévention des fuites de données. Cela peut inclure l'identification des points de fuite potentiels, l'établissement de politiques de classification des données, et la mise en place de contrôles pour détecter et prévenir les fuites de données.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la prévention des fuites de données en utilisant des mesures de protection supplémentaires. Cela peut inclure la mise en place de solutions de prévention des fuites de données (DLP), l'application de politiques de contrôle strictes pour le transfert et le stockage des données sensibles, et la sensibilisation continue du personnel aux risques et aux bonnes pratiques de prévention des fuites de données.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la prévention des fuites de données en mettant en place des processus de gestion rigoureux. Cela peut inclure la surveillance continue des activités liées aux données, l'établissement de mécanismes d'alerte précoce pour détecter les fuites potentielles, et l'amélioration continue des contrôles de prévention des fuites de données en fonction des évaluations de risques et des incidents passés.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Sauvegarde de l'information</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Sauvegarde de l\'information') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir une politique de sauvegarde de l'information qui définit les procédures et les mécanismes pour sauvegarder et restaurer les informations de manière régulière et fiable. Cela peut inclure l'identification des informations à sauvegarder, la fréquence des sauvegardes, les méthodes de stockage sécurisées, et les tests de restauration pour vérifier l'intégrité des sauvegardes.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures et des lignes directrices pour la sauvegarde de l'information. Cela peut inclure la planification des sauvegardes, l'utilisation de technologies de sauvegarde appropriées, la définition des responsabilités pour la gestion des sauvegardes, et la documentation des procédures de restauration.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la sauvegarde de l'information en utilisant des mesures de protection supplémentaires. Cela peut inclure la duplication des sauvegardes pour une redondance, le chiffrement des sauvegardes sensibles, la sauvegarde sur des supports hors site ou dans le cloud, et la mise en place de contrôles d'accès stricts aux sauvegardes.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la sauvegarde de l'information en mettant en place des processus de gestion rigoureux. Cela peut inclure l'automatisation des sauvegardes, la surveillance des sauvegardes pour détecter les erreurs ou les échecs, et l'amélioration continue des politiques et des procédures de sauvegarde en fonction des évaluations de risques et des incidents passés.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Redondance des installations de traitement de l'information</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Redondance des installations de traitement de l\'information') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir une politique de redondance des installations de traitement de l'information qui définit les exigences et les mesures pour assurer la disponibilité continue des systèmes et des services critiques. Cela peut inclure la mise en place de configurations redondantes, la répartition de la charge, la duplication des composants clés, et la planification de la continuité des activités en cas de défaillance.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures et des lignes directrices pour la redondance des installations de traitement de l'information. Cela peut inclure l'identification des systèmes critiques, l'évaluation des risques liés à la disponibilité, la conception de solutions redondantes et la mise en place de mécanismes de basculement en cas de panne.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la redondance des installations de traitement de l'information en utilisant des mesures de protection supplémentaires. Cela peut inclure la mise en place de systèmes de secours, l'utilisation de technologies de virtualisation pour la haute disponibilité, l'utilisation de clusters ou de grappes de serveurs, et la réalisation de tests réguliers pour s'assurer de la résilience du système.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la redondance des installations de traitement de l'information en mettant en place des processus de gestion rigoureux. Cela peut inclure la surveillance continue des systèmes redondants, l'évaluation régulière de la capacité et des performances, et l'amélioration continue des mécanismes de redondance en fonction des évaluations de risques et des incidents passés.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Journalisation (Logs)</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Journalisation (Logs)') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir une politique de journalisation (logs) qui définit les exigences pour la collecte, la conservation et la gestion des journaux de sécurité. Cela peut inclure la définition des événements à journaliser, la durée de conservation des journaux, les mécanismes de protection des journaux contre la modification ou la suppression non autorisées, et l'utilisation d'outils de gestion des journaux.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures et des lignes directrices pour la journalisation (logs). Cela peut inclure la configuration des systèmes pour collecter les journaux, l'analyse régulière des journaux pour détecter les incidents de sécurité, la réponse aux incidents basée sur les journaux, et la documentation des procédures de gestion des journaux.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la journalisation (logs) en utilisant des mesures de protection supplémentaires. Cela peut inclure la centralisation des journaux dans un système de gestion des informations de sécurité (SIEM), l'utilisation de techniques de corrélation des journaux pour détecter les schémas d'attaques, la mise en place de contrôles d'accès stricts aux journaux, et la réalisation de tests réguliers pour vérifier l'intégrité des journaux.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la journalisation (logs) en mettant en place des processus de gestion rigoureux. Cela peut inclure l'automatisation de la collecte et de l'analyse des journaux, la formation du personnel sur l'interprétation des journaux, et l'amélioration continue des politiques et des procédures de journalisation en fonction des évaluations de risques et des incidents passés.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Surveillance des activités</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Surveillance des activités') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir une politique de surveillance des activités qui définit les exigences et les procédures pour la surveillance continue des activités informatiques. Cela peut inclure la définition des événements à surveiller, les outils de surveillance à utiliser, les seuils d'alerte à définir, et les actions à entreprendre en cas d'activités suspectes ou non autorisées.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures et des lignes directrices pour la surveillance des activités. Cela peut inclure la configuration des outils de surveillance, la collecte et l'analyse régulières des journaux d'activité, la détection des anomalies ou des schémas d'activité suspects, et la documentation des actions à prendre en réponse à des événements de surveillance.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la surveillance des activités en utilisant des mesures de protection supplémentaires. Cela peut inclure la mise en place de systèmes de détection d'intrusion (IDS) ou de prévention d'intrusion (IPS), l'utilisation de techniques d'analyse comportementale pour détecter les activités anormales, l'intégration de la surveillance des activités avec un système de gestion des informations de sécurité (SIEM), et la formation du personnel sur la reconnaissance des comportements suspects.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la surveillance des activités en mettant en place des processus de gestion rigoureux. Cela peut inclure l'automatisation de la surveillance des activités, la mise en place de tableaux de bord et de rapports de surveillance, la formation continue du personnel sur les meilleures pratiques de surveillance, et l'amélioration continue des politiques et des procédures de surveillance en fonction des évaluations de risques et des incidents passés.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Synchronisation d'horloge</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Synchronisation d\'horloge') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir une politique de synchronisation d'horloge qui définit les exigences pour la synchronisation précise et fiable des horloges des systèmes informatiques. Cela peut inclure l'utilisation de protocoles de synchronisation standardisés, tels que NTP (Network Time Protocol), la configuration de serveurs de temps de référence, et la définition de la tolérance acceptable pour la synchronisation des horloges.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures et des lignes directrices pour la synchronisation d'horloge. Cela peut inclure la configuration des serveurs de temps, la vérification régulière de la synchronisation des horloges, la résolution des problèmes de synchronisation, et la documentation des procédures de synchronisation d'horloge.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la synchronisation d'horloge en utilisant des mesures de protection supplémentaires. Cela peut inclure l'utilisation de serveurs de temps redondants pour une disponibilité accrue, la mise en place de mécanismes de surveillance de la synchronisation d'horloge, l'utilisation de sources de temps externes fiables, et la réalisation de tests réguliers pour vérifier la précision de la synchronisation.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la synchronisation d'horloge en mettant en place des processus de gestion rigoureux. Cela peut inclure l'automatisation de la synchronisation d'horloge, la surveillance continue de la précision de la synchronisation, la synchronisation des horloges sur l'ensemble du réseau informatique, et l'amélioration continue des politiques et des procédures de synchronisation d'horloge en fonction des évaluations de risques et des incidents passés.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Utilisation de programmes utilitaires privilégiés</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Utilisation de programmes utilitaires privilégiés') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir une politique d'utilisation de programmes utilitaires privilégiés qui définit les exigences pour l'utilisation sécurisée des programmes utilitaires avec des privilèges élevés. Cela peut inclure l'identification des programmes utilitaires privilégiés autorisés, la gestion des privilèges d'accès à ces programmes, la documentation des procédures d'utilisation, et la formation du personnel sur l'utilisation sécurisée des programmes utilitaires.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures et des lignes directrices pour l'utilisation de programmes utilitaires privilégiés. Cela peut inclure l'autorisation préalable pour l'utilisation de ces programmes, la traçabilité des activités liées à leur utilisation, la supervision appropriée lors de l'exécution de ces programmes, et la gestion des mises à jour et des correctifs de sécurité associés.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer l'utilisation de programmes utilitaires privilégiés en utilisant des mesures de protection supplémentaires. Cela peut inclure la mise en place de contrôles de sécurité techniques pour limiter l'accès à ces programmes, l'utilisation de mécanismes d'audit pour enregistrer les activités liées à leur utilisation, et l'application de contrôles de sécurité supplémentaires, tels que la validation des signatures numériques des programmes utilitaires.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser l'utilisation de programmes utilitaires privilégiés en mettant en place des processus de gestion rigoureux. Cela peut inclure l'automatisation de la gestion des privilèges pour ces programmes, la surveillance continue de leur utilisation, l'évaluation régulière des risques associés, et l'amélioration continue des politiques et des procédures d'utilisation en fonction des évaluations de risques et des incidents passés.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Installation de logiciels sur des systèmes opérationnels</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Installation de logiciels sur des systèmes opérationnels') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir une politique d'installation de logiciels sur des systèmes opérationnels qui définit les procédures et les exigences pour l'installation sécurisée des logiciels. Cela peut inclure l'autorisation préalable pour l'installation de logiciels, l'utilisation de sources fiables pour les logiciels, la vérification de l'intégrité des logiciels avant l'installation, et la documentation des procédures d'installation.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures et des lignes directrices détaillées pour l'installation de logiciels sur des systèmes opérationnels. Cela peut inclure la configuration des paramètres de sécurité lors de l'installation, la validation des dépendances et des prérequis du logiciel, la vérification de la compatibilité avec les autres logiciels et les systèmes existants, et la documentation des étapes d'installation.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer l'installation de logiciels sur des systèmes opérationnels en utilisant des mesures de protection supplémentaires. Cela peut inclure la mise en place de contrôles techniques pour prévenir l'installation de logiciels non autorisés, l'utilisation de mécanismes de vérification de l'intégrité des logiciels, la limitation des privilèges d'installation aux utilisateurs autorisés, et la réalisation de tests de sécurité après l'installation.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser l'installation de logiciels sur des systèmes opérationnels en mettant en place des processus de gestion rigoureux. Cela peut inclure l'automatisation des procédures d'installation, la gestion centralisée des logiciels et des mises à jour, l'utilisation de listes blanches pour restreindre les logiciels autorisés, et l'amélioration continue des politiques et des procédures d'installation en fonction des évaluations de risques et des incidents passés.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Sécurité des réseaux</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Sécurité des réseaux') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir une politique de sécurité des réseaux qui définit les exigences et les mesures de sécurité à mettre en place pour protéger les réseaux informatiques. Cela peut inclure l'utilisation de pare-feu pour contrôler le trafic réseau, la configuration de mécanismes d'authentification et de chiffrement pour protéger les communications, la segmentation du réseau pour limiter l'accès, et la documentation des règles et des procédures de sécurité des réseaux.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures et des lignes directrices détaillées pour la sécurité des réseaux. Cela peut inclure la configuration des pare-feu et des dispositifs de sécurité réseau, la mise en œuvre de mécanismes de détection d'intrusion, la gestion des identifiants et des certificats pour l'authentification, la surveillance continue du trafic réseau, et la formation du personnel sur les bonnes pratiques de sécurité des réseaux.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la sécurité des réseaux en utilisant des mesures de protection supplémentaires. Cela peut inclure la mise en place de mécanismes de prévention des intrusions avancés, l'utilisation de technologies de chiffrement robustes, la configuration de systèmes de détection et de prévention des intrusions, l'établissement de politiques strictes de gestion des mots de passe, et la réalisation d'audits de sécurité réguliers.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la sécurité des réseaux en mettant en place des processus de gestion rigoureux. Cela peut inclure l'automatisation des tâches de sécurité réseau, l'utilisation de solutions de gestion centralisée des configurations, la mise en place de mécanismes de surveillance en temps réel, l'analyse régulière des journaux de sécurité, et l'amélioration continue des politiques et des procédures de sécurité des réseaux en fonction des évaluations de risques et des incidents passés.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Sécurité des services réseau</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Sécurité des services réseau') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir une politique de sécurité des services réseau qui définit les exigences et les mesures de sécurité à mettre en place pour protéger les services réseau. Cela peut inclure l'identification des services réseau critiques, la configuration de mécanismes d'authentification et de chiffrement pour protéger les communications, la limitation des privilèges d'accès aux services, et la documentation des règles et des procédures de sécurité des services réseau.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures et des lignes directrices détaillées pour la sécurité des services réseau. Cela peut inclure la configuration sécurisée des services réseau, la gestion des identifiants et des certificats pour l'authentification, la surveillance continue des services réseau, la mise en place de mécanismes de détection d'intrusion, et la formation du personnel sur les bonnes pratiques de sécurité des services réseau.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la sécurité des services réseau en utilisant des mesures de protection supplémentaires. Cela peut inclure la mise en place de pare-feu pour contrôler le trafic vers les services, l'utilisation de technologies de chiffrement robustes pour protéger les données, la configuration de mécanismes de prévention des intrusions, la réalisation de tests de pénétration sur les services, et l'établissement de politiques strictes de gestion des mots de passe.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la sécurité des services réseau en mettant en place des processus de gestion rigoureux. Cela peut inclure l'automatisation des tâches de sécurité liées aux services réseau, la mise en place de mécanismes de surveillance en temps réel, l'analyse régulière des journaux de sécurité des services, l'utilisation de solutions de gestion centralisée des configurations, et l'amélioration continue des politiques et des procédures de sécurité des services réseau en fonction des évaluations de risques et des incidents passés.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Ségrégation des réseaux</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Ségrégation des réseaux') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir une politique de ségrégation des réseaux qui définit les exigences et les mesures de sécurité à mettre en place pour séparer les réseaux selon leur niveau de confiance. Cela peut inclure la définition de zones de confiance, la mise en place de pare-feu pour contrôler les flux de trafic entre les zones, l'utilisation de VLAN pour isoler les segments de réseau, et la documentation des règles et des procédures de ségrégation des réseaux.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures et des lignes directrices détaillées pour la ségrégation des réseaux. Cela peut inclure la conception et l'architecture des réseaux en fonction des zones de confiance, la configuration des pare-feu et des dispositifs de sécurité pour contrôler les flux de trafic, la mise en place de mécanismes d'authentification et d'autorisation pour l'accès aux zones sensibles, et la formation du personnel sur les bonnes pratiques de ségrégation des réseaux.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la ségrégation des réseaux en utilisant des mesures de protection supplémentaires. Cela peut inclure la mise en place de mécanismes de détection d'intrusion pour surveiller les flux de trafic entre les zones, l'utilisation de technologies de chiffrement pour sécuriser les communications entre les zones, la configuration de systèmes de prévention des intrusions pour bloquer les tentatives d'accès non autorisées, et l'établissement de politiques strictes de gestion des accès entre les zones de confiance.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la ségrégation des réseaux en mettant en place des processus de gestion rigoureux. Cela peut inclure l'automatisation des tâches liées à la ségrégation des réseaux, la réalisation d'audits réguliers pour vérifier la conformité aux règles de ségrégation, la mise en place de mécanismes de surveillance en temps réel pour détecter les anomalies, l'analyse régulière des journaux de sécurité, et l'amélioration continue des politiques et des procédures de ségrégation des réseaux en fonction des évaluations de risques et des incidents passés.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Filtrage Web</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Filtrage Web') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir une politique de filtrage Web qui définit les exigences et les mesures de sécurité à mettre en place pour contrôler l'accès aux sites Web et aux contenus Internet. Cela peut inclure l'utilisation de solutions de filtrage Web pour bloquer l'accès à des sites Web malveillants ou non autorisés, la mise en place de règles de filtrage basées sur des catégories de contenu, et la documentation des règles et des procédures de filtrage Web.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures et des lignes directrices détaillées pour le filtrage Web. Cela peut inclure la configuration et la gestion des solutions de filtrage Web, la personnalisation des règles de filtrage en fonction des besoins spécifiques de l'organisation, la mise en place de mécanismes de blocage des téléchargements de fichiers potentiellement dangereux, et la formation du personnel sur les bonnes pratiques de navigation Internet sécurisée.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer le filtrage Web en utilisant des mesures de protection supplémentaires. Cela peut inclure la mise en place de mécanismes de détection de logiciels malveillants pour identifier les sites Web infectés, l'utilisation de technologies d'analyse de contenu pour détecter les menaces émergentes, la configuration de règles de filtrage basées sur des listes blanches ou des listes noires spécifiques, et l'établissement de politiques strictes de gestion des exceptions pour les sites Web nécessaires à l'activité de l'organisation.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser le filtrage Web en mettant en place des processus de gestion rigoureux. Cela peut inclure l'automatisation des tâches liées au filtrage Web, la surveillance continue de l'efficacité des solutions de filtrage, l'analyse régulière des journaux de filtrage pour détecter les tentatives d'accès non autorisées, l'utilisation de solutions de prévention des fuites d'information pour empêcher la divulgation de données sensibles, et l'amélioration continue des politiques et des procédures de filtrage Web en fonction des évaluations de risques et des incidents passés.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Utilisation de la cryptographie</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Utilisation de la cryptographie') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir une politique d'utilisation de la cryptographie qui définit les exigences et les mesures de sécurité à mettre en place pour protéger les informations sensibles au repos et en transit. Cela peut inclure l'identification des informations nécessitant une protection cryptographique, la sélection d'algorithmes et de protocoles appropriés, la gestion des clés de chiffrement, et la documentation des règles et des procédures d'utilisation de la cryptographie.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures et des lignes directrices détaillées pour l'utilisation de la cryptographie. Cela peut inclure la configuration et la gestion des mécanismes de cryptographie, la génération et la distribution sécurisée des clés, l'utilisation de certificats numériques pour l'authentification et la signature électronique, et la formation du personnel sur les bonnes pratiques d'utilisation de la cryptographie.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer l'utilisation de la cryptographie en utilisant des mesures de protection supplémentaires. Cela peut inclure l'utilisation de technologies de chiffrement avancées pour une protection plus robuste des données, l'intégration de solutions de gestion des clés pour une gestion centralisée et sécurisée des clés, la mise en place de mécanismes de détection des attaques cryptographiques, et l'établissement de politiques strictes de gestion du cycle de vie des clés.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser l'utilisation de la cryptographie en mettant en place des processus de gestion rigoureux. Cela peut inclure l'automatisation des tâches liées à la cryptographie, la réalisation d'audits réguliers pour vérifier la conformité aux règles d'utilisation de la cryptographie, l'utilisation de solutions de surveillance de la qualité cryptographique, la formation continue du personnel sur les nouvelles menaces et les bonnes pratiques, et l'amélioration continue des politiques et des procédures d'utilisation de la cryptographie en fonction des évaluations de risques et des incidents passés.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Cycle de vie de développement sécurisé</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Cycle de vie de développement sécurisé') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir une politique de cycle de vie de développement sécurisé qui définit les exigences et les mesures de sécurité à mettre en place tout au long du processus de développement logiciel. Cela peut inclure l'identification des activités de sécurité à intégrer dans chaque phase du cycle de vie, la sensibilisation et la formation du personnel aux bonnes pratiques de développement sécurisé, et la documentation des règles et des procédures relatives au cycle de vie de développement sécurisé.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures et des lignes directrices détaillées pour le cycle de vie de développement sécurisé. Cela peut inclure l'intégration de mesures de sécurité dès la phase de conception, l'utilisation d'outils d'analyse de code source pour identifier les vulnérabilités, l'adoption de bonnes pratiques de codage sécurisé, et la réalisation de revues de code par des pairs pour détecter les erreurs logiques et les vulnérabilités.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer le cycle de vie de développement sécurisé en utilisant des mesures de protection supplémentaires. Cela peut inclure la mise en place de tests de sécurité et de pénétration pour évaluer la résistance de l'application aux attaques, la réalisation d'analyses de sécurité dynamiques pour identifier les vulnérabilités en temps réel, l'utilisation de modèles et de frameworks de sécurité éprouvés, et l'établissement de politiques strictes de gestion des correctifs et des mises à jour de sécurité.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser le cycle de vie de développement sécurisé en mettant en place des processus de gestion rigoureux. Cela peut inclure l'automatisation des tâches liées au cycle de vie de développement sécurisé, l'intégration de tests de sécurité dans les processus de développement continus, la formation continue du personnel sur les nouvelles techniques d'attaque et les bonnes pratiques de développement sécurisé, et l'amélioration continue des politiques et des procédures de cycle de vie de développement sécurisé en fonction des évaluations de risques et des incidents passés.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Exigences relatives à la sécurité des applications</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Exigences relatives à la sécurité des applications') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir des exigences de sécurité pour les applications qui définissent les mesures de protection à mettre en place pour garantir la sécurité des applications développées ou utilisées par l'organisation. Cela peut inclure l'identification des fonctionnalités de sécurité nécessaires, l'intégration de contrôles de sécurité dès la conception, et la documentation des exigences de sécurité spécifiques pour chaque application.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures et des lignes directrices détaillées pour la sécurité des applications. Cela peut inclure l'utilisation de frameworks de sécurité pour le développement d'applications, la réalisation de tests de sécurité des applications avant leur déploiement, l'utilisation de mécanismes d'authentification et de contrôle d'accès appropriés, et la mise en place de mécanismes de gestion des vulnérabilités.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la sécurité des applications en utilisant des mesures de protection supplémentaires. Cela peut inclure la mise en place de mécanismes de détection d'intrusion pour surveiller les activités suspectes, l'utilisation de techniques de chiffrement pour protéger les données sensibles stockées ou transmises par les applications, l'adoption de bonnes pratiques de gestion des sessions et des cookies, et l'établissement de politiques strictes de gestion des correctifs de sécurité pour les applications.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la sécurité des applications en mettant en place des processus de gestion rigoureux. Cela peut inclure l'automatisation des tests de sécurité des applications, la réalisation d'audits réguliers pour vérifier la conformité aux exigences de sécurité, la formation continue du personnel sur les nouvelles menaces et les bonnes pratiques de sécurité des applications, et l'amélioration continue des politiques et des procédures de sécurité des applications en fonction des évaluations de risques et des incidents passés.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Architecture de système sécurisé et principes d'ingénierie</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Architecture de système sécurisé et principes d\'ingénierie') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir des principes d'ingénierie de sécurité et des directives d'architecture de système sécurisé pour garantir que les systèmes d'information sont conçus et mis en œuvre de manière sécurisée. Cela peut inclure l'identification des objectifs de sécurité, la définition des exigences de sécurité pour l'architecture système, la sélection des contrôles de sécurité appropriés, et la documentation des principes et des directives pour guider le processus d'ingénierie.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures et des lignes directrices détaillées pour l'architecture de système sécurisé et les principes d'ingénierie de sécurité. Cela peut inclure l'utilisation de modèles d'architecture de référence pour garantir la cohérence et la sécurité des systèmes, l'adoption de bonnes pratiques d'ingénierie de sécurité telles que la séparation des privilèges et le principe du moindre privilège, et la réalisation d'évaluations de sécurité pour identifier les risques potentiels.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer l'architecture de système sécurisé et les principes d'ingénierie de sécurité en utilisant des mesures de protection supplémentaires. Cela peut inclure l'utilisation de contrôles d'accès avancés tels que l'authentification à deux facteurs, la mise en place de systèmes de détection des intrusions pour surveiller les activités suspectes, l'utilisation de mécanismes de chiffrement pour protéger les données sensibles, et l'intégration de mécanismes de sauvegarde et de reprise après sinistre.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser l'architecture de système sécurisé et les principes d'ingénierie de sécurité en mettant en place des processus de gestion rigoureux. Cela peut inclure l'automatisation des tâches liées à l'architecture et à l'ingénierie de sécurité, la réalisation d'audits réguliers pour vérifier la conformité aux principes et aux directives de sécurité, la formation continue du personnel sur les nouvelles techniques d'attaque et les bonnes pratiques d'ingénierie de sécurité, et l'amélioration continue des politiques et des procédures d'architecture et d'ingénierie de sécurité en fonction des évaluations de risques et des incidents passés.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Programmation (Coding) sécurisée</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Programmation (Coding) sécurisée') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir des pratiques de programmation sécurisée qui définissent les normes et les techniques de codage à suivre pour réduire les vulnérabilités et les risques de sécurité dans le développement logiciel. Cela peut inclure l'utilisation de langages de programmation sécurisés, la mise en œuvre de bonnes pratiques de codage sécurisé telles que la validation des données en entrée, la protection contre les injections SQL et les attaques par script intersite (XSS), et l'utilisation de bibliothèques et de frameworks sécurisés.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures et des lignes directrices détaillées pour la programmation sécurisée. Cela peut inclure l'utilisation d'outils d'analyse statique de code pour détecter les vulnérabilités potentielles, l'adoption de pratiques de gestion des erreurs sécurisées, la protection des informations sensibles telles que les mots de passe et les clés de chiffrement, et la sensibilisation et la formation du personnel sur les bonnes pratiques de programmation sécurisée.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la programmation sécurisée en utilisant des mesures de protection supplémentaires. Cela peut inclure la mise en place de tests de sécurité automatisés pour valider la sécurité du code, l'utilisation de techniques de cryptographie robustes pour protéger les données confidentielles, l'adoption de mécanismes de gestion des sessions et des cookies sécurisés, et l'utilisation de mécanismes de journalisation et de surveillance pour détecter les activités suspectes.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la programmation sécurisée en mettant en place des processus de gestion rigoureux. Cela peut inclure l'intégration de tests de sécurité dans les processus de développement continus, la réalisation d'examens réguliers du code par des pairs pour identifier les vulnérabilités, la formation continue du personnel sur les nouvelles techniques d'attaque et les bonnes pratiques de programmation sécurisée, et l'amélioration continue des politiques et des procédures de programmation sécurisée en fonction des évaluations de risques et des incidents passés.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Tests de sécurité en développement et acceptation</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Tests de sécurité en développement et acceptation') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir des procédures pour réaliser des tests de sécurité tout au long du cycle de développement des applications et des systèmes. Cela peut inclure l'utilisation d'outils de tests de sécurité automatisés pour identifier les vulnérabilités, la réalisation de tests d'intrusion pour évaluer la résistance du système aux attaques, et la mise en place de processus de gestion des vulnérabilités pour remédier aux failles détectées.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures et des lignes directrices détaillées pour les tests de sécurité en développement et acceptation. Cela peut inclure l'utilisation de scénarios de test de sécurité spécifiques pour évaluer les mesures de protection mises en place, la réalisation de tests de pénétration pour identifier les points faibles du système, et la documentation des résultats des tests de sécurité.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer les tests de sécurité en développement et acceptation en utilisant des mesures de protection supplémentaires. Cela peut inclure la réalisation de tests de sécurité automatisés réguliers pour détecter les nouvelles vulnérabilités, l'utilisation de techniques avancées de test de sécurité telles que les tests de charge et les tests de sécurité des API, et l'intégration des tests de sécurité dans les processus d'acceptation avant le déploiement du système.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser les tests de sécurité en développement et acceptation en mettant en place des processus de gestion rigoureux. Cela peut inclure l'automatisation des tests de sécurité et l'intégration continue pour garantir une évaluation régulière de la sécurité, la réalisation d'audits réguliers pour vérifier la conformité aux exigences de sécurité, la formation continue du personnel sur les nouvelles techniques d'attaque et les bonnes pratiques de test de sécurité, et l'amélioration continue des politiques et des procédures de test de sécurité en fonction des évaluations de risques et des incidents passés.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Développement externalisé</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Développement externalisé') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir des critères de sélection et d'évaluation des fournisseurs externes de développement pour s'assurer qu'ils possèdent les compétences et les pratiques de sécurité nécessaires. Cela peut inclure la définition de critères de sécurité spécifiques dans les contrats de développement externalisé, l'évaluation des références et des certifications des fournisseurs, et l'établissement de mécanismes de contrôle pour s'assurer de la conformité aux exigences de sécurité.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures et des lignes directrices détaillées pour le développement externalisé sécurisé. Cela peut inclure la définition de processus de gestion des risques liés à l'externalisation, la protection des informations sensibles partagées avec les fournisseurs externes, et l'établissement de mécanismes de suivi et de reporting pour garantir la conformité aux exigences de sécurité.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer le développement externalisé sécurisé en utilisant des mesures de protection supplémentaires. Cela peut inclure la réalisation d'audits de sécurité chez les fournisseurs externes, la mise en place de mécanismes de contrôle de la qualité du code développé, l'utilisation de mécanismes de chiffrement pour protéger les données en transit, et l'établissement de plans de continuité des activités pour atténuer les risques liés aux fournisseurs externes.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser le développement externalisé sécurisé en mettant en place des processus de gestion rigoureux. Cela peut inclure l'inclusion de clauses de sécurité dans les contrats de développement externalisé, la réalisation d'examens réguliers de la conformité aux exigences de sécurité, la formation continue du personnel sur les risques liés à l'externalisation et les bonnes pratiques de développement sécurisé, et l'amélioration continue des politiques et des procédures de développement externalisé en fonction des évaluations de risques et des incidents passés.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Séparation des environnements de développement, de test et de production</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Séparation des environnements de développement, de test et de production') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir une séparation physique ou logique entre les environnements de développement, de test et de production. Cela peut inclure l'utilisation de serveurs distincts pour chaque environnement, l'attribution de droits d'accès spécifiques à chaque équipe, et la mise en place de mécanismes de contrôle pour empêcher la migration directe du code non testé vers l'environnement de production.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures et des lignes directrices détaillées pour la séparation des environnements. Cela peut inclure l'établissement de politiques de gestion des changements pour contrôler les migrations de code entre les environnements, la mise en place de processus de gestion des configurations pour assurer la cohérence des environnements, et la définition de règles de sécurité spécifiques pour chaque environnement.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la séparation des environnements en utilisant des mesures de protection supplémentaires. Celapeut inclure l'utilisation de technologies de virtualisation ou de conteneurisation pour isoler les environnements, l'application de contrôles de sécurité spécifiques à chaque environnement (par exemple, pare-feu, détection d'intrusion), et la mise en place de processus de surveillance pour détecter toute activité anormale ou non autorisée.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la séparation des environnements en mettant en place des processus de gestion rigoureux. Cela peut inclure l'automatisation des déploiements entre les environnements pour réduire les erreurs humaines, l'utilisation de techniques avancées de virtualisation ou de conteneurisation pour améliorer l'efficacité et la flexibilité, la réalisation d'audits réguliers pour vérifier la conformité aux politiques de séparation des environnements, et l'amélioration continue des processus en fonction des évaluations de risques et des incidents passés.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Gestion du changement</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Gestion du changement') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir un processus de gestion du changement pour contrôler et gérer les modifications apportées aux systèmes, aux applications et aux infrastructures. Cela peut inclure la définition de rôles et de responsabilités clairs, l'établissement de critères de validation et d'approbation pour les changements, et la documentation des procédures et des politiques de gestion du changement.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures et des lignes directrices détaillées pour la gestion du changement. Cela peut inclure l'utilisation d'outils de suivi des changements pour enregistrer et suivre les demandes de modification, la réalisation d'évaluations d'impact et de risque pour chaque changement proposé, et la mise en place de mécanismes de communication et de formation pour sensibiliser les parties prenantes aux changements et à leurs impacts potentiels.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la gestion du changement en utilisant des mesures de protection supplémentaires. Cela peut inclure la mise en place de mécanismes de contrôle des versions pour assurer l'intégrité du code et des configurations, l'établissement de processus de rétrogradation pour revenir à des versions précédentes en cas de problème, et la réalisation de tests de validation rigoureux avant la mise en production des changements.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la gestion du changement en mettant en place des processus de gestion rigoureux. Cela peut inclure l'automatisation des processus de gestion du changement pour améliorer l'efficacité et la traçabilité, la réalisation d'audits réguliers pour vérifier la conformité aux politiques de gestion du changement, l'intégration de la gestion du changement avec d'autres processus tels que la gestion des incidents et la gestion des problèmes, et l'amélioration continue des processus en fonction des évaluations de risques et des incidents passés.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Informations sur les tests</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Informations sur les tests') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir des procédures pour la collecte, l'enregistrement et la gestion des informations sur les tests. Cela peut inclure la définition de critères de test, la création de jeux de données de test représentatifs, et la documentation des résultats des tests effectués. Il est également important de prévoir des mécanismes de suivi pour assurer la traçabilité des tests effectués.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures et des lignes directrices détaillées pour la réalisation des tests. Cela peut inclure l'utilisation d'outils de gestion des tests, la définition de plans de test complets, la mise en place de processus de suivi des anomalies détectées lors des tests, et la documentation des mesures prises pour résoudre ces anomalies.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer les informations sur les tests en utilisant des mesures de protection supplémentaires. Cela peut inclure la réalisation de tests de sécurité pour identifier les vulnérabilités potentielles, l'utilisation de techniques de test avancées telles que les tests de pénétration, et la mise en place de processus de revue et d'approbation indépendants pour garantir la qualité des tests.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser les informations sur les tests en mettant en place des processus de gestion rigoureux. Cela peut inclure l'automatisation des tests pour améliorer l'efficacité et la reproductibilité, l'intégration des tests dans les processus de développement et de déploiement continus, la réalisation d'audits réguliers pour vérifier la conformité aux politiques de gestion des tests, et l'amélioration continue des processus en fonction des évaluations de risques et des incidents passés.</p>
        @elseif($conformite->category_label == 100)
    <p>Bonne pratique.</p>
@endif
@endif
</td>
    </tr>
  <tr>
        <td style="border: 1px solid black; padding: 8px;">Protection des systèmes d'information lors des tests d'audit</td>
        <td style="border: 1px solid black; padding: 8px;">
@php
$conformite = $project->uncheckedCategories->first(function ($category) {
    return strpos($category->phrase_evalue, 'Protection des systèmes d\'information lors des tests d\'audit') !== false;
});
@endphp

@if($conformite)
@if($conformite->category_label == 0)
    <p>Établir des procédures pour assurer la protection des systèmes d'information lors des tests d'audit. Cela peut inclure la définition de mesures de sécurité spécifiques à mettre en place pendant les tests d'audit, telles que l'activation de journaux d'audit, la restriction des droits d'accès aux systèmes sous test, et la mise en place de mécanismes de surveillance pour détecter toute activité anormale.</p>
@elseif($conformite->category_label == 25)
    <p>Développer des procédures et des lignes directrices détaillées pour la protection des systèmes d'information lors des tests d'audit. Cela peut inclure l'utilisation de techniques de test non intrusives pour minimiser les risques pour les systèmes, la réalisation d'évaluations d'impact et de risque avant les tests, et la mise en place de mécanismes de sauvegarde pour rétablir les systèmes en cas de problème.</p>
@elseif($conformite->category_label == 50)
    <p>Renforcer la protection des systèmes d'information lors des tests d'audit en utilisant des mesures de protection supplémentaires. Cela peut inclure l'utilisation de systèmes virtuels ou de copies de sauvegarde pour effectuer les tests, la mise en place de processus de contrôle des changements pour gérer les modifications apportées aux systèmes avant et après les tests, et l'application de contrôles de sécurité spécifiques pour limiter les risques pour les systèmes sous test.</p>
@elseif($conformite->category_label == 75)
    <p>Optimiser la protection des systèmes d'information lors des tests d'audit en mettant en place des processus de gestion rigoureux. Cela peut inclure l'automatisation des tests d'audit pour améliorer l'efficacité et la reproductibilité, la réalisation d'audits réguliers pour vérifier la conformité aux politiques de protection des systèmes d'information lors des tests d'audit, et l'amélioration continue des processus en fonction des évaluations de risques et des incidents passés.</p>
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