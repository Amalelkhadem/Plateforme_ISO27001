<!DOCTYPE html>
<html>
<head>
    
    <title>Historiques de transfert des projets</title>
    
</head>
<body>
   <div class="checkbox-list" style="background-color: #ADD8E6; box-shadow: 0 10px 6px rgba(0, 0, 0, 0.1); border-radius: 6px; width: 900px; padding: 20px; margin: 0 auto; border: 1px solid transparent;">
            <div class="welcome-text" style="background-color:#E6E6E6;  font-size: 24px; display: flex;height:70px; align-items: center;">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
          
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto" style="display: flex; align-items: center;">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('Connexion'))
                                <li class="nav-item">
                                    <a class="nav-link link-white" href="{{ route('login') }}" style="color: white;">{{ __('Connexion') }}</a>
                                </li>
                            @endif
                        @else
                            
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        
                         <a href="{{ route('admin.admininterface') }}" style="margin-left: -20px; margin-top: -10px;font-size: 20px;color: #1877F2;">Accueil</a>
                                    <a href="{{ route('admin.auditeur') }}" style="font-size: 20px; margin-top: -10px;margin-left: 10px;color: #1877F2;">Auditeurs</a>
                                    <a href="{{ route('statistique') }}" style=" color: #1877F2;font-size: 20px;">Statistiques</a>
                       
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: #1877F2;margin-left:450px;font-size: 20px;">{{ __('Déconnexion') }}</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>   
                        @endguest
                    </ul>
                </div>
            </div>
             <div class="container">
        <div class="row justify-content-left">
            <div style="text-align: center;">
    <h1>Historiques de transfert des projets</h1>
<div class="container">
    <div class="container">
    <div class="row justify-content-left">
<table style="text-align: center;">
    <thead>
        <tr>
            <th style="padding: 10px; border: 1px solid #ccc; background-color: #E6E6E6; font-weight: bold;">Nom du projet</th>
            <th style="padding: 10px; border: 1px solid #ccc; background-color: #E6E6E6; font-weight: bold;">Pourcentage de conformité</th>
            <th style="padding: 10px; border: 1px solid #ccc; background-color: #E6E6E6; font-weight: bold;">Auditeur émetteur</th>
            <th style="padding: 10px; border: 1px solid #ccc; background-color: #E6E6E6; font-weight: bold;">Auditeur récepteur</th>
            <th style="padding: 10px; border: 1px solid #ccc; background-color: #E6E6E6; font-weight: bold;">Date de transfert</th>
            <th style="padding: 10px; border: 1px solid #ccc; background-color: #E6E6E6; font-weight: bold;">Évaluations</th>
            <th style="padding: 10px; border: 1px solid #ccc; background-color: #E6E6E6; font-weight: bold;">Supprimer</th>
        </tr>
    </thead>
    <tbody>
                    @foreach ($historique as $transfer)
                        <tr>
                            <td style="border: 1px solid black; padding: 8px; background-color: white;">{{ $transfer->nom_projet }}</td>
                            <td style="border: 1px solid black; padding: 8px; background-color: white;">{{ $transfer->pourcentage_conformite }}</td>
                            <td style="border: 1px solid black; padding: 8px; background-color: white;">{{ $transfer->nom_auditeur_emetteur }}</td>
                            <td style="border: 1px solid black; padding: 8px; background-color: white;">{{ $transfer->nom_auditeur_recepteur }}</td>
                            <td style="border: 1px solid black; padding: 8px; background-color: white;">{{ $transfer->date_transfert }}</td>
                             <td style="border: 1px solid black; padding: 8px; background-color: white;">
            @if(isset($transfer->project_id))
                <a href="{{ route('historiqueevaluation', ['id' => $transfer->project_id]) }}">Voir les évaluations</a>
            @endif
        </td>
                           
                            <td style="border: 1px solid black; padding: 8px; background-color: white;">
                                <form action="{{ route('historique.destroy', $transfer->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce projet de l\'historique ?')">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
</table>
</div>
</body>
</html>