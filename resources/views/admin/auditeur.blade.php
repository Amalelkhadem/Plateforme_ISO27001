<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-RVg+RNJz5n2V5W2D9BfzzfzLSty2yLKDzDm7v6G/FQ4J7hZz1z5ODu8WwRHMCA6x" crossorigin="anonymous">
    <title>Auditeurs</title>
    
</head>
<body>
   <div class="checkbox-list" style="background-color: #ADD8E6; box-shadow: 0 10px 6px rgba(0, 0, 0, 0.1); border-radius: 6px; width: 900px; padding: 20px; margin: 0 auto; border: 1px solid transparent;">
            <div class="welcome-text" style="background-color:#E6E6E6;  font-size: 24px; display: flex;height:70px; align-items: center;">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
                    <ul class="navbar-nav ms-auto" style="display: flex; align-items: center;">
                        @guest
                            @if (Route::has('Connexion'))
                                <li class="nav-item">
                                    <a class="nav-link link-white" href="{{ route('login') }}" style="color: white;">{{ __('Connexion') }}</a>
                                </li>
                            @endif
                        @else
                            
    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <a href="{{ route('admin.admininterface')}}"style="font-size: 20px;margin-top:-10px;margin-left: -20px;color: #1877F2;">Acceuil</a>                                   
        <a href="{{ route('projetauditeur') }}" style="margin-top: -10px;font-size: 20px;color: #1877F2;">Projets</a>                                   
        <a href="{{ route('statistique') }}" style=" color: #1877F2;font-size: 20px;">Statistiques</a>                      
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: #1877F2;margin-left:500px;font-size: 20px;">{{ __('Déconnexion') }}</a>
    </div>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                
                           
                        @endguest
                    </ul>
                   
                </div>
            </div>
        
    <div class="container">
        <div class="row justify-content-left">
            <div style="text-align: center;">
                <h1>Liste des auditeurs</h1>

               <form action="{{ route('admin.auditeur') }}" method="GET" style="margin-right: 190px;">
        <input type="text" name="search" placeholder="Entrez le nom de l'auditeur ici" style="height:30px; width:180px;">
        <button type="submit" style="height:35px;margin-right: 20px;">Rechercher</button>
    </form><br>             

                <table class="table table-bordered" style="text-align: center; margin-left: 120px;">
<thead>
    <tr>
        <th style="border: 1px solid black; padding: 10px; background-color: #E6E6E6; font-weight: bold;">Nom</th>
        <th style="border: 1px solid black; padding: 10px; background-color: #E6E6E6; font-weight: bold;">Email</th>
        <th style="border: 1px solid black; padding: 10px; background-color: #E6E6E6; font-weight: bold;">Projets / Organisation</th>
        <th style="border: 1px solid black; padding: 10px; background-color: #E6E6E6; font-weight: bold;">Date de création</th>
        <th style="border: 1px solid black; padding: 10px; background-color: #E6E6E6; font-weight: bold;">Modifier</th>
        <th style="border: 1px solid black; padding: 10px; background-color: #E6E6E6; font-weight: bold;">Supprimer</th>
    </tr>
</thead>
<tbody>
    @foreach ($users as $user)
    <tr>
        <td style="border: 1px solid black; padding: 8px; background-color: white;">{{ $user->name }}</td>
        <td style="border: 1px solid black; padding: 8px; background-color: white;">{{ $user->email }}</td>
        <td style="border: 1px solid black; padding: 8px; background-color: white;">
    @php
        $projectCounts = [];
        foreach ($user->projects as $project) {
            $organizationName = $project->name_organisation;
            if (!isset($projectCounts[$organizationName])) {
                $projectCounts[$organizationName] = 0;
            }
            $projectCounts[$organizationName]++;
        }
    @endphp

    @foreach ($projectCounts as $organizationName => $count)
        {{ $count }} projets: {{ $organizationName }}<br>
    @endforeach
</td>
        <td style="border: 1px solid black; padding: 8px; background-color: white;">{{ $user->created_at->format('d/m/Y') }}</td>
        <td style="border: 1px solid black; padding: 8px; background-color: white;">
            <a href="{{ route('admin.user.edit', $user->id) }}">Modifier</a>
        </td>
        <td style="border: 1px solid black; padding: 8px; background-color: white;">
            <form id="delete-form-{{ $user->id }}" action="{{ route('admin.user.delete', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="event.preventDefault(); if (confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')) document.getElementById('delete-form-{{ $user->id }}').submit();">
                    <i class="fas fa-trash-alt"></i> 
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
    </div>
</body>
</html>