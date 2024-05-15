@extends('layouts.app')

@section('content')
    <div class="container" style="background: linear-gradient(135deg, #E0F0FF 50%, #ADD8E6 50%); margin: 0 auto; width: 950px; height: 1050px;">
        <h1>Guide d'implémentation de la norme ISO 27001</h1>

        <p>
            Bienvenue dans le guide d'implémentation de la norme ISO 27001. Ce guide vous aidera à mettre en place un système de gestion de la sécurité de l'information solide et conforme aux exigences de la norme.
        </p>

        <h2>Structure du guide</h2>
        <ul>
            <li>Étape 1 : Planification</li>
            <li>Étape 2 : Évaluation des risques</li>
            <li>Étape 3 : Mise en œuvre des contrôles</li>
            <li>Étape 4 : Formation du personnel</li>
            <li>Étape 5 : Surveillance et amélioration continue</li>
        </ul>

        <h2>Étape 1 : Planification</h2>
        <p>
            Dans cette étape, vous devez établir une équipe de projet, définir les objectifs de l'implémentation et identifier les ressources nécessaires. Vous devez également élaborer un plan détaillé pour guider le processus d'implémentation.
        </p>

        <h2>Étape 2 : Évaluation des risques</h2>
        <p>
            L'évaluation des risques est une étape cruciale pour identifier les actifs d'information, évaluer les menaces et les vulnérabilités, et hiérarchiser les risques. Vous devez utiliser des méthodologies appropriées pour mener cette évaluation et documenter les résultats. <a href="{{ route('projet') }}" style="color: #1877F2; text-decoration: underline;">Evaluer</a>
        </p>

        <h2>Étape 3 : Mise en œuvre des contrôles</h2>
        <p>
            Cette étape implique la mise en place des contrôles de sécurité nécessaires pour protéger les informations contre les menaces identifiées. Vous devez suivre les recommandations de l'annexe A de la norme ISO 27001 et adapter les contrôles à votre contexte spécifique. <a href="{{ route('iso') }}" style="color: #1877F2; text-decoration: underline;">Annexe A</a>
        </p>

        <h2>Étape 4 : Formation du personnel</h2>
        <p>
            Le personnel joue un rôle crucial dans la sécurité de l'information. Vous devez fournir une formation et une sensibilisation adéquates à tout le personnel concerné afin de garantir la compréhension des politiques et des procédures de sécurité.
        </p>

        <h2>Étape 5 : Surveillance et amélioration continue</h2>
        <p>
            Une fois que le système de gestion de la sécurité de l'information est en place, vous devez le surveiller régulièrement, effectuer des audits internes et des évaluations de conformité. Utilisez ces résultats pour améliorer continuellement votre SMSI et assurer la conformité à long terme.
        </p>

        <h2>Ressources supplémentaires</h2>
        <p>
            Pour en savoir plus sur l'implémentation de la norme ISO 27001, consultez les ressources suivantes :
        </p>
        <ul>
            <li><a href="https://www.example.com/guide-complet-iso27001" target="_blank">Guide complet sur l'ISO 27001</a></li>
            <li><a href="https://www.example.com/formation-iso27001" target="_blank">Formation en ligne sur l'ISO 27001</a></li>
            <li><a href="https://www.example.com/exemple-politique-securite" target="_blank">Exemple de politique de sécurité</a></li>
        </ul>
    </div>
@endsection