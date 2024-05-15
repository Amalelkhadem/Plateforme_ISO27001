<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IsoController extends Controller
{
    /**
     * Show the ISO 27001 rules page.
     *
     * @return \Illuminate\Contracts\View\View
     */
   public function index()
{
    return view('iso');
}

public function mesuresOrganisationnelles()
{
    $rules = [
        [
            'numero' => 'A5.1',
            'titre' => 'Politiques de sécurité de l’information',
            'description' => 'La politique de sécurité de l\'information et les politiques spécifiques à un sujet doivent être définies, approuvées par la direction, publiées, communiquées et reconnues par le personnel concerné et les parties intéressées concernées, et révisées à intervalles planifiés et si des changements importants se produisent.'
        ],
        [
            'numero' => 'A5.2',
            'titre' => 'Rôles et responsabilités en matière de sécurité de l\'information',
            'description' => 'Les rôles et les responsabilités en matière de sécurité de l\'information doivent être définis et attribués en fonction des besoins de l\'organisation.'
        ],
        [
            'numero' => 'A5.3',
            'titre' => 'Séparation des tâches',
            'description' => 'Les tâches conflictuelles et les domaines de responsabilité conflictuels doivent être séparés.'
        ],
        [
            'numero' => 'A5.4',
            'titre' => 'Responsabilités de la direction',
            'description' => 'La direction doit exiger que tout le personnel applique la sécurité de l\'information conformément à la politique de sécurité de l\'information établie, aux politiques et procédures spécifiques à un sujet de l\'organisation.'
        ],
        [
            'numero' => 'A5.5',
            'titre' => 'Contact avec les autorités',
            'description' => 'L’entreprise doit établir et maintenir des contacts avec les autorités compétentes.'
        ],
        [
            'numero' => 'A5.6',
            'titre' => 'Contact avec des groupes d\'intérêts particuliers',
            'description' => 'L\'organisation doit établir et maintenir des contacts avec des groupes d\'intérêts particuliers ou d\'autres forums et associations professionnelles spécialisés dans la sécurité.'
        ],
        [
            'numero' => 'A5.7',
            'titre' => 'Threat intelligence',
            'description' => 'Les informations relatives aux menaces à la sécurité de l\'information doivent être collectées et analysées pour produire des renseignements sur les menaces.'
        ],[
            'numero' => 'A5.8',
            'titre' => 'La sécurité de l\'information dans la gestion de projets',
            'description' => 'La sécurité de l\'information doit être intégrée dans la gestion de projet.'
        ],
        [
            'numero' => 'A5.9',
            'titre' => 'Inventaire des informations et autres actifs associés',
            'description' => 'Un inventaire des informations et des autres actifs associés, y compris les propriétaires, doit être élaboré et maintenu.'
        ],
        [
            'numero' => 'A5.10',
            'titre' => 'Utilisation acceptable des informations et autres actifs associés',
            'description' => 'Les règles d\'utilisation acceptable et les procédures de traitement des informations et autres actifs associés doivent être identifiées, documentées et mises en œuvre.'
        ],
        [
            'numero' => 'A5.11',
            'titre' => 'Restitution d\'actifs',
            'description' => 'Le personnel et les autres parties intéressées, le cas échéant, doivent restituer tous les actifs de l\'organisation en leur possession en cas de changement ou de résiliation de leur emploi, contrat ou accord.'
        ],
        [
            'numero' => 'A5.12',
            'titre' => 'Classement des informations',
            'description' => 'Les informations doivent être classées en fonction des besoins de sécurité de l\'information de l\'organisation sur la base de la confidentialité, de l\'intégrité, de la disponibilité et des exigences pertinentes des parties intéressées.'
        ],
        [
            'numero' => 'A5.13',
            'titre' => 'Labellisation des informations',
            'description' => 'Un ensemble approprié de procédures pour la labellisation des informations doit être développé et mis en œuvre conformément au système de classification des informations adopté par l\'organisation.'
        ],
        [
            'numero' => 'A5.14',
            'titre' => 'Transfert d\'information',
            'description' => 'Des règles, procédures ou accords de transfert d\'informations doivent être en place pour tous les types d\'installations de transfert au sein de l\'organisation et entre l\'organisation et les autres parties.'
        ],
        [
            'numero' => 'A5.15',
            'titre' => 'Contrôle d\'accès',
            'description' => 'Des règles de contrôle de l\'accès physique et logique aux informations et autres actifs associés doivent être établies et mises en œuvre en fonction des exigences de sécurité de l\'entreprise et de l\'information.'
        ],
        [
            'numero' => 'A5.16',
            'titre' => 'Gestion des identités',
            'description' => 'Le cycle de vie complet des identités doit être géré.'
        ],
        [
            'numero' => 'A5.17',
            'titre' => 'Informations d\'authentification',
            'description' => 'L\'attribution et la gestion des informations d\'authentification doivent être contrôlées par un processus de gestion, comprenant des conseils au personnel sur le traitement approprié des informations d\'authentification.'
        ],
        [
            'numero' => 'A5.18',
            'titre' => 'Les droits d\'accès',
            'description' => 'Les droits d\'accès à l\'information et aux autres actifs associés doivent être provisionnés, examinés, modifiés et supprimés conformément à la politique thématique de l\'organisation et aux règles de contrôle d\'accès.'
        ],
        [
            'numero' => 'A5.19',
            'titre' => 'Sécurité de l\'information en relation avec les fournisseurs',
            'description' => 'Des processus et des procédures doivent être définis et mis en œuvre pour gérer les risques de sécurité de l\'information associés à l\'utilisation des produits ou services du fournisseur.'
        ],
        [
            'numero' => 'A5.20',
            'titre' => 'Prise en compte de la sécurité des informations dans les accords avec les fournisseurs',
            'description' => 'Les exigences pertinentes en matière de sécurité de l\'information doivent être établies et convenues avec chaque fournisseur en fonction du type de relation avec le fournisseur.'
        ],
        [
            'numero' => 'A5.21',
            'titre' => 'Gestion de la sécurité de l\'information dans la chaîne d\'approvisionnement des technologies de l\'information et des communications (ICT)',
            'description' => 'Des processus et des procédures doivent être définis et mis en œuvre pour gérer les risques de sécurité de l\'information associés à la chaîne d\'approvisionnement des produits et services (ICT).'
        ],
        [
            'numero' => 'A5.22',
            'titre' => 'Suivi, révision et gestion du changement des services fournisseurs',
            'description' => 'L\'organisation doit surveiller, examiner, évaluer et gérer régulièrement les changements dans les pratiques de sécurité des informations des fournisseurs et la prestation de services.'
        ],
        [
            'numero' => 'A5.23',
            'titre' => 'Sécurité de l\'information pour l\'utilisation de services cloud',
            'description' => 'Les processus d\'acquisition, d\'utilisation, de gestion et de sortie des services cloud doivent être établis conformément aux exigences de l\'organisation en matière de sécurité de l\'information.'
        ],
        [
            'numero' => 'A5.24',
            'titre' => 'Planification et préparation de la gestion des incidents de sécurité de l\'information',
            'description' => 'L\'organisation doit planifier et préparer la gestion des incidents de sécurité de l\'information en définissant, établissant et communiquant les processus, les rôles et les responsabilités de gestion des incidents de sécurité de l\'information.'
        ],
        [
            'numero' => 'A5.25',
            'titre' => 'Évaluation et décision sur les événements liés à la sécurité de l\'information',
            'description' => 'L\'organisation doit évaluer les événements de sécurité de l\'information et décider s\'ils doivent être classés comme des incidents de sécurité de l\'information.'
        ],
        [
            'numero' => 'A5.26',
            'titre' => 'Réponse aux incidents de sécurité de l\'information',
            'description' => 'Les incidents de sécurité de l\'information doivent être traités conformément aux procédures documentées.'
        ],
         [
            'numero' => 'A5.27',
            'titre' => 'Tirer des enseignements des incidents de sécurité de l\'information',
            'description' => 'Les connaissances acquises à partir des incidents de sécurité de l\'information doivent être utilisées pour renforcer et améliorer les contrôles de sécurité de l\'information.'
        ],
        [
            'numero' => 'A5.28',
            'titre' => 'Recueil des preuves',
            'description' => 'L\'organisation devrait établir et mettre en œuvre des procédures pour l\'identification, la collecte, l\'acquisition et la conservation des preuves liées aux événements de sécurité de l\'information.'
        ],
        [
            'numero' => 'A5.29',
            'titre' => 'Sécurité de l\'information en cas de perturbation',
            'description' => 'L\'organisation doit planifier comment maintenir la sécurité de l\'information à un niveau approprié pendant les perturbations.'
        ],
        [
            'numero' => 'A5.30',
            'titre' => 'État de préparation des technologies de l\'information et des communications pour la continuité des activités',
            'description' => 'L\'état de préparation des technologies de l\'information et des communications devrait être planifié, mis en œuvre, maintenu et testé en fonction des objectifs de continuité des activités et des exigences de continuité des technologies de l\'information et des communications.'
        ],
        [
            'numero' => 'A5.31',
            'titre' => 'Exigences légales, statutaires, réglementaires et contractuelles',
            'description' => 'Les exigences légales, statutaires, réglementaires et contractuelles relatives à la sécurité de l\'information et l\'approche de l\'organisation pour répondre à ces exigences doivent être identifiées, documentées et tenues à jour.'
        ],
        [
            'numero' => 'A5.32',
            'titre' => 'Droits de propriété intellectuelle',
            'description' => 'L\'organisme devrait mettre en œuvre des procédures appropriées pour protéger les droits de propriété intellectuelle.'
        ],
        [
            'numero' => 'A5.33',
            'titre' => 'Protection des enregistrements',
            'description' => 'Les enregistrements doivent être protégés contre la perte, la destruction, la falsification, l\'accès non autorisé et la diffusion non autorisée.'
        ],
        [
            'numero' => 'A5.34',
            'titre' => 'Confidentialité et protection des informations personnelles identifiables (PII)',
            'description' => 'L\'organisation doit identifier et respecter les exigences concernant la préservation de la vie privée et la protection des PII conformément aux lois et réglementations applicables et aux exigences contractuelles.'
        ],
        [
            'numero' => 'A5.35',
            'titre' => 'Examen indépendant de la sécurité de l\'information',
            'description' => 'L\'approche de l\'organisation en matière de gestion de la sécurité de l\'information et sa mise en œuvre, y compris les personnes, les processus et les technologies, doivent être revues de manière indépendante à des intervalles planifiés ou lorsque des changements importants se produisent.'
        ],
        [
            'numero' => 'A5.36',
            'titre' => 'Conformité aux politiques, règles et normes de sécurité de l\'information',
            'description' => 'La conformité à la politique de sécurité de l\'information de l\'organisation, aux politiques, règles et normes spécifiques à un sujet doit être régulièrement examinée.'
        ],
        [
            'numero' => 'A5.37',
            'titre' => 'Procédures d\'exploitation documentées',
            'description' => 'Les procédures d\'exploitation des installations de traitement de l\'information doivent être documentées et mises à la disposition du personnel qui en a besoin.'
        ],
    ];

    return view('mesures.mesures_organisationnelles', compact('rules'));
}

    public function MesuresPersonnes()
    {

    $rules = [
        [
            'numero' => 'A6.1',
            'titre' => 'Sélection des candidats',
            'description' => 'Des vérifications du passé des candidats devant devenir du personnel doivent être effectuées avant leur intégration dans l\'organisation et de manière continue, en tenant compte des lois, réglementations et éthiques applicables, et proportionnellement aux exigences commerciales, à la classification des informations auxquelles ils auront accès et aux risques perçus.'
        ],
        [
            'numero' => 'A6.2',
            'titre' => 'Termes et conditions d’embauche',
            'description' => 'Les accords contractuels d\'emploi doivent indiquer les responsabilités du personnel et de l\'organisation en matière de sécurité de l\'information.'
        ],
        [
            'numero' => 'A6.3',
            'titre' => 'Sensibilisation, apprentissage et formation liée à la sécurité de l\'information',
            'description' => 'Le personnel de l\'organisation et les parties intéressées concernées doivent recevoir une sensibilisation, un apprentissage et une formation appropriés en matière de sécurité de l\'information. Ils doivent également être tenus informés régulièrement de la politique de sécurité de l\'information de l\'organisation, ainsi que des politiques et procédures spécifiques à leur domaine d\'activité.'
        ],
        [
            'numero' => 'A6.4',
            'titre' => 'Processus disciplinaire',
            'description' => 'Un processus disciplinaire doit être formalisé et communiqué pour prendre des mesures contre le personnel et les autres parties intéressées concernées qui ont commis une violation de la politique de sécurité de l\'information.'
        ],
        [
            'numero' => 'A6.5',
            'titre' => 'Responsabilités après la cessation ou le changement d\'emploi',
            'description' => 'Les responsabilités et obligations en matière de sécurité de l\'information qui demeurent après la cessation ou le changement d\'emploi doivent être définies, appliquées et communiquées au personnel concerné et aux autres parties intéressées.'
        ],
        [
            'numero' => 'A6.6',
            'titre' => 'Accords de confidentialité ou de non-divulgation',
            'description' => 'Les accords de confidentialité ou de non-divulgation reflétant les besoins de l\'organisation en matière de protection des informations doivent être identifiés, documentés, régulièrement revus et signés par le personnel et les autres parties intéressées concernées.'
        ],
        [
            'numero' => 'A6.7',
            'titre' => 'Le télétravail',
            'description' => 'Des mesures de sécurité doivent être mises en œuvre lorsque le personnel travaille à distance pour protéger les informations consultées, traitées ou stockées en dehors des locaux de l\'organisation.'
        ],
        [
            'numero' => 'A6.8',
            'titre' => 'Rapports sur les événements de sécurité de l\'information',
            'description' => 'L\'organisation doit fournir un mécanisme permettant au personnel de signaler les événements de sécurité de l\'information observés ou suspectés par les canaux appropriés en temps opportun.'
        ],
        
    ];

return view('mesures.MesuresPersonnes', compact('rules'));
}

public function MesuresSécurité()
    {

    $rules = [

        [
            'numero' => 'A7.1',
            'titre' => 'Périmètres de sécurité physique',
            'description' => 'Des périmètres de sécurité doivent être définis et utilisés pour protéger les zones contenant des informations et d\'autres actifs associés.'
        ],
        [
            'numero' => 'A7.2',
            'titre' => 'Contrôle d\'accès physique',
            'description' => 'Les zones sécurisées doivent être protégées par des contrôles d\'entrée et des points d\'accès appropriés.'
        ],
        [
            'numero' => 'A7.3',
            'titre' => 'Sécurisation des bureaux, des salles et des équipements',
            'description' => 'La sécurité physique des bureaux, des salles et des équipements doit être conçue et mise en œuvre.'
        ],
        [
            'numero' => 'A7.4',
            'titre' => 'Surveillance de la sécurité physique',
            'description' => 'Les locaux doivent être surveillés en permanence pour détecter tout accès physique non autorisé.'
        ],
        [
            'numero' => 'A7.5',
            'titre' => 'Protection contre les menaces physiques et environnementales',
            'description' => 'La protection contre les menaces physiques et environnementales, telles que les catastrophes naturelles et autres menaces physiques intentionnelles ou non intentionnelles pour les infrastructures, doit être conçue et mise en œuvre.'
        ],
        [
            'numero' => 'A7.6',
            'titre' => 'Travail en zones sécurisées',
            'description' => 'Des mesures de sécurité pour travailler dans des zones sécurisées doivent être conçues et mises en œuvre.'
        ],
        [
            'numero' => 'A7.7',
            'titre' => 'Bureau clair et écran clair',
            'description' => 'Des règles de bureau claires pour les papiers et les supports de stockage amovibles et des règles d\'écran claires pour les installations de traitement de l\'information doivent être définies et correctement appliquées.'
        ],
        [
            'numero' => 'A7.8',
            'titre' => 'Implantation et protection des équipements',
            'description' => 'L\'équipement doit être placé en toute sécurité et protégé.'
        ],
         [
            'numero' => 'A7.9',
            'titre' => 'Sécurité des actifs hors site',
            'description' => 'Les actifs hors site doivent être protégés.'
        ],
        [
            'numero' => 'A7.10',
            'titre' => 'Supports de stockage',
            'description' => 'Les supports de stockage doivent être gérés tout au long de leur cycle de vie d\'acquisition, d\'utilisation, de transport et d\'élimination conformément au schéma de classification et aux exigences de manipulation de l\'organisation.'
        ],
        [
            'numero' => 'A7.11',
            'titre' => 'Utilitaires de prise en charge',
            'description' => 'Les installations de traitement de l\'information doivent être protégées contre les pannes de courant et autres perturbations causées par des défaillances des services publics de soutien.'
        ],
        [
            'numero' => 'A7.12',
            'titre' => 'Sécurité du câblage',
            'description' => 'Les câbles transportant de l\'énergie, des données ou des services d\'information doivent être protégés contre les interceptions, les interférences ou les dommages.'
        ],
        [
            'numero' => 'A7.13',
            'titre' => 'Entretien du matériel',
            'description' => 'L\'équipement doit être correctement entretenu pour assurer la disponibilité, l\'intégrité et la confidentialité des informations.'
        ],
        [
            'numero' => 'A7.14',
            'titre' => 'Élimination ou réutilisation sécurisée de l\'équipement',
            'description' => 'Les éléments d\'équipement contenant des supports de stockage doivent être vérifiés pour s\'assurer que toutes les données sensibles et les logiciels sous licence ont été supprimés ou écrasés en toute sécurité avant leur élimination ou leur réutilisation.'
        ],
    ];
return view('mesures.MesuresSécurité', compact('rules'));
}

public function MesuresTechnologiques()
    {

    $rules = [
       
        [
            'numero' => 'A8.1',
            'titre' => 'Sécurité des équipements des utilisateurs terminaux',
            'description' => 'Les informations stockées, traitées ou accessibles via les utilisateurs terminaux doivent être protégées.'
        ],
        [
            'numero' => 'A8.2',
            'titre' => 'Droits d\'accès privilégiés',
            'description' => 'L\'attribution et l\'utilisation des droits d\'accès privilégiés doivent être restreintes et gérées.'
        ],
        [
            'numero' => 'A8.3',
            'titre' => 'Restriction d\'accès à l\'information',
            'description' => 'L\'accès à l\'information et aux autres actifs associés doit être restreint conformément à la politique de contrôle d\'accès établie.'
        ],
        [
            'numero' => 'A8.4',
            'titre' => 'Accès au code source',
            'description' => 'L\'accès en lecture et en écriture au code source, aux outils de développement et aux bibliothèques de logiciels doit être correctement géré.'
        ],
        [
            'numero' => 'A8.5',
            'titre' => 'Authentification sécurisée',
            'description' => 'Les technologies et les procédures d\'authentification sécurisées doivent être mises en œuvre en fonction des restrictions d\'accès aux informations et de la politique spécifique au sujet en matière de contrôle d\'accès.'
        ],
        [
            'numero' => 'A8.6',
            'titre' => 'Gestion de la capacité',
            'description' => 'L\'utilisation des ressources doit être surveillée et ajustée en fonction des besoins actuels et attendus en matière de capacité.'
        ],
        [
            'numero' => 'A8.7',
            'titre' => 'Protection contre les logiciels malveillants',
            'description' => 'La protection contre les logiciels malveillants doit être mise en œuvre et soutenue par une sensibilisation appropriée des utilisateurs.'
        ],
        [
            'numero' => 'A8.8',
            'titre' => 'Gestion des vulnérabilités techniques',
            'description' => 'Des informations sur les vulnérabilités techniques des systèmes d\'information utilisés doivent être obtenues, l\'exposition de l\'organisation à ces vulnérabilités doit être évaluée et des mesures appropriées doivent être prises.'
        ],
        [
            'numero' => 'A8.9',
            'titre' => 'Gestion de la configuration',
            'description' => 'Les configurations, y compris les configurations de sécurité, du matériel, des logiciels, des services et des réseaux doivent être établies, documentées, mises en œuvre, surveillées et examinées.'
        ],
        [
            'numero' => 'A8.10',
            'titre' => 'Suppression de l’information',
            'description' => 'Les informations stockées dans les systèmes d\'information, les dispositifs ou tout autre support de stockage doivent être supprimées lorsqu\'elles ne sont plus nécessaires.'
        ],
        [
            'numero' => 'A8.11',
            'titre' => 'Masquage des données',
            'description' => 'Le masquage des données doit être utilisé conformément à la politique thématique de l\'organisation en matière de contrôle d\'accès et à d\'autres politiques thématiques connexes, ainsi qu\'aux exigences de l\'entreprise, en tenant compte de la législation applicable.'
        ],
        [
            'numero' => 'A8.12',
            'titre' => 'Prévention des fuites de données',
            'description' => 'Des mesures de prévention des fuites de données doivent être appliquées aux systèmes, réseaux et autres appareils qui traitent, stockent ou transmettent des informations sensibles.'
        ],
        [
            'numero' => 'A8.13',
            'titre' => 'Sauvegarde de l\'information',
            'description' => 'Des copies de sauvegarde des informations, des logiciels et des systèmes doivent être conservées et régulièrement testées conformément à lapolitique de sauvegarde convenue et spécifique au sujet.'
        ],
        [
            'numero' => 'A8.14',
            'titre' => 'Redondance des installations de traitement de l\'information',
            'description' => 'Les installations de traitement de l\'information doivent être mises en œuvre avec une redondance suffisante pour répondre aux exigences de disponibilité.'
        ],
        [
            'numero' => 'A8.15',
            'titre' => 'Journalisation (Logs)',
            'description' => 'Des journaux qui enregistrent les activités, les exceptions, les défauts et autres événements pertinents doivent être produits, stockés, protégés et analysés.'
        ],
        [
            'numero' => 'A8.16',
            'titre' => 'Surveillance des activités',
            'description' => 'Les réseaux, les systèmes et les applications doivent être surveillés pour détecter tout comportement anormal et des mesures appropriées doivent être prises pour évaluer les incidents potentiels de sécurité des informations.'
        ],
        [
            'numero' => 'A8.17',
            'titre' => 'Synchronisation d\'horloge',
            'description' => 'Les horloges des systèmes de traitement de l\'information utilisés par l\'organisation doivent être synchronisées avec des sources de temps approuvées.'
        ],
        [
            'numero' => 'A8.18',
            'titre' => 'Utilisation de programmes utilitaires privilégiés',
            'description' => 'L\'utilisation de programmes utilitaires capables de contourner les contrôles du système et des applications doit être restreinte et étroitement contrôlée.'
        ],
        [
            'numero' => 'A8.19',
            'titre' => 'Installation de logiciels sur des systèmes opérationnels',
            'description' => 'Des procédures et des mesures doivent être mises en œuvre pour gérer en toute sécurité l\'installation des logiciels sur les systèmes opérationnels.'
        ],
        [
            'numero' => 'A8.20',
            'titre' => 'Sécurité des réseaux',
            'description' => 'Pour protéger l’information dans les réseaux et ses installations de traitement de l\'information contre toute compromission via le réseau.'
        ],
        [
            'numero' => 'A8.21',
            'titre' => 'Sécurité des services réseau',
            'description' => 'Les mécanismes de sécurité, les niveaux de service, et les exigences des services de réseau doivent être identifiés, mis en œuvre et surveillés.'
        ],
        [
            'numero' => 'A8.22',
            'titre' => 'Ségrégation des réseaux',
            'description' => 'Les groupes de services d\'information, d\'utilisateurs et de systèmes d\'information doivent être séparés dans les réseaux de l\'organisation.'
        ],
        [
            'numero' => 'A8.23',
            'titre' => 'Filtrage Web',
            'description' => 'L\'accès aux sites Web externes doit être géré de manière à réduire l\'exposition à des contenus malveillants.'
        ],
        [
            'numero' => 'A8.24',
            'titre' => 'Utilisation de la cryptographie',
            'description' => 'Des règles d\'utilisation efficace de la cryptographie, y compris la gestion des clés cryptographiques, devraient être définies et mises en œuvre.'
        ],
        [
            'numero' => 'A8.25',
            'titre' => 'Cycle de vie de développement sécurisé',
            'description' => 'Des règles pour le développement sécurisé de logiciels et de systèmes doivent être établies et appliquées.'
        ],
        [
            'numero' => 'A8.26',
            'titre' => 'Exigences relatives à la sécurité des applications',
            'description' => 'Les exigences en matière de sécurité de l\'information doivent être identifiées, spécifiées et approuvées lors du développement ou de l\'acquisition d\'applications.'
        ],
        [
            'numero' => 'A8.27',
            'titre' => 'Architecture de système sécurisé et principes d\'ingénierie',
            'description' => 'Les principes d\'ingénierie des systèmes sécurisés doivent être établis, documentés, maintenus et appliqués à toutes les activités de développement de systèmes d\'information.'
        ],
        [
            'numero' => 'A8.28',
            'titre' => 'Programmation (Coding) sécurisée',
            'description' => 'Les principes de coding sécurisé doivent être appliqués au développement de logiciels.'
        ],
        [
            'numero' => 'A8.29',
            'titre' => 'Tests de sécurité en développement et acceptation',
            'description' => 'Les processus de test de sécurité doivent être définis et mis en œuvre dans le cycle de vie du développement.'
        ],
        [
            'numero' => 'A8.30',
            'titre' => 'Développement externalisé',
            'description' => 'L\'organisation doit diriger, surveiller et examiner les activités liées au développement de systèmes externalisés.'
        ],
        [
            'numero' => 'A8.31',
            'titre' => 'Séparation des environnements de développement, de test et de production',
            'description' => 'Les environnements de développement, de test et de production doivent être séparés et sécurisés.'
        ],
        [
            'numero' => 'A8.32',
            'titre' => 'Gestion du changement',
            'description' => 'Les modifications apportées aux installations de traitement de l\'information et aux systèmes d\'information devraient faire l\'objet de procédures de gestion des modifications.'
        ],
        [
            'numero' => 'A8.33',
            'titre' => 'Informations sur les tests',
            'description' => 'Les informations sur les tests doivent être sélectionnées, protégées et gérées de manière appropriée.'
        ],
        [
            'numero' => 'A8.34',
            'titre' => 'Protection des systèmes d\'information lors des tests d\'audit',
            'description' => 'Les tests d\'audit et autres activités d\'assurance impliquant l\'évaluation des systèmes opérationnels doivent être planifiés et convenus entre le testeur et la direction appropriée.'
        ],
    ];



return view('mesures.MesuresTechnologiques', compact('rules'));


}

}