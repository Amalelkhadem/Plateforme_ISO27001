<!DOCTYPE html>
<html>
<head>
    
    <title>Projets</title>
    
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
    <h1>Liste des projets des auditeurs</h1>
<div class="container">
    <div class="container">
    <div class="row justify-content-left">
            
               

    <form action="{{ route('projects.search') }}" method="GET" style="margin-right: 400px;">
        <input type="text" name="search" placeholder="Rechercher par nom de projet, organisation, mesure ou auditeur"style="height:30px; width:400px;">
        <button type="submit" style="height:35px;">Rechercher</button>
    </form><br>
    <div style="margin-left: -100px; width:600px;">
        <p style="display: inline-block; margin-left: 10px;">Consulter l'historique de transfert des projets :</p>

    <button onclick="window.location.href='{{ route('historique') }}'" style="display: inline-block;">Historiques</button>
</div>

    <table style="text-align: center;">
    <thead>
        <tr>
            <th style="padding: 10px; border: 1px solid #ccc; background-color: #E6E6E6; font-weight: bold;">Nom du projet</th>
            <th style="padding: 10px; border: 1px solid #ccc; background-color: #E6E6E6; font-weight: bold;">Organisation</th>
            <th style="padding: 10px; border: 1px solid #ccc; background-color: #E6E6E6; font-weight: bold;">Mesure</th>
            <th style="padding: 10px; border: 1px solid #ccc; background-color: #E6E6E6; font-weight: bold;">Pourcentage de conformité</th>
            <th style="padding: 10px; border: 1px solid #ccc; background-color: #E6E6E6; font-weight: bold;">Auditeur</th>
            <th style="padding: 10px; border: 1px solid #ccc; background-color: #E6E6E6; font-weight: bold;">Date de création</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($sessions as $session)
    @php
        $project = $projects->firstWhere('id', $session->project_id);
    @endphp
            <tr>
                
<td style="border: 1px solid black; padding: 8px; background-color: white;">{{ $project->name_project }}</td>

<td style="border: 1px solid black; padding: 8px; background-color: white;">{{ $project->name_organisation }}</td>

<td style="border: 1px solid black; padding: 8px; background-color: white;">{{ $project->name_model }}</td>

<td style="border: 1px solid black; padding: 8px; background-color: white;">
    @if ($project && $project->conformity_percentage)
        {{ $project->conformity_percentage}}
        <form action="{{ route('updateSession', $session->id) }}" method="POST">
            @csrf
            <p style="font-size:13px; color:red;margin-bottom:10px;margin-top:-5px;"></p>
            <select name="selected_user_id" style=" background-color: #1877F2; color:white;border-radius: 6px;margin-bottom:-15px;">
                <option value="" disabled selected>Transférer à</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            <button type="submit" style=" background-color: #1877F2;color:white;border-radius: 6px; ">OK</button>
        </form>
    @endif
</td>


<td style="border: 1px solid black; padding: 8px; background-color: white;">
    @foreach ($project->users as $user)
        {{ $user->name }}<br>
    @endforeach
</td>

<td style="border: 1px solid black; padding: 8px; background-color: white;">{{ $project->created_at->format('d/m/Y') }}</td>
</tr>
        @endforeach
    </tbody>
</table>
</div>
</body>
</html>