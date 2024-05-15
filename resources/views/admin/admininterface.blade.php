<!DOCTYPE html>
<html>
<head>
    
    <title>Interface Admin</title>
    
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
                            
                            <div class="welcome-text" style="color: #1877F2; font-size: 24px;">   
                            
                            <a href="{{ route('projetauditeur') }}" style="margin-left: -30px; margin-top: -10px;font-size: 20px;color: #1877F2;">Projets</a>
                                    <a href="{{ route('admin.auditeur') }}" style="font-size: 20px; margin-top: -10px;margin-left: 10px;color: #1877F2;">Auditeurs</a>
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
   <div style="display: flex;">
     
        <div class="container" style="margin-top: 20px; background-color: white; box-shadow: 0 10px 6px rgba(0, 0, 0, 0.1); width: 8000000px; height: 400px;">
            <div style="font-size: 20px;color: white; margin-left: 10px; ">
                <br>
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="color: #1877F2;margin-top: -30px;">Créer un nouveau auditeur</a>
                <div style="margin-left:130px;">
                <img src="http://localhost:8000/image.png" alt="Description de la plateforme de conformité" style="width: 20%; height: 20%;margin-left: 600px;margin-top: -30px;">
                </div>
            </div>

            <div style="margin-left:10px;">

        <p id="typed-paragraph" style="width:700px; white-space: pre-line; overflow: hidden; border-right: .15em solid; font-family: monospace; animation: typing 3s steps(40, end);"></p>
        <script>
    const paragraph = "Bienvenue sur la plateforme d'évaluation en ligne de la conformité ISO 27001 ! En tant qu'administrateur, vous disposez de fonctionnalités avancées pour gérer efficacement les projets et les auditeurs. Voici un aperçu des liens disponibles dans votre interface :\n\n- Liste des projets : Consultez tous les projets en cours.\n- Liste des auditeurs : Accédez à la liste des auditeurs enregistrés.\n- Statistiques des projets : Visualisez les statistiques des projets réalisés.\n- Créer un nouvel auditeur : Ajoutez un nouvel auditeur à la plateforme.\n\nEn tant qu'administrateur, vous avez également accès aux résultats de tous les projets d'évaluation de la norme ISO 27001.";

    let index = 0;
    const typedParagraph = document.getElementById('typed-paragraph');

    function type() {
      if (index < paragraph.length) {
        typedParagraph.innerHTML += paragraph.charAt(index);
        index++;
        setTimeout(type, 40);
      }
    }

    type();
  </script>
  </div>
    </div>
  
</div>
    </div>
    
    </div>
    
</div>
</div>




