<!DOCTYPE html>
<html>
<head>
    
    <title>Statistiques</title>
    
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
                        
                                    
                        <a href="{{ route('home') }}" style="margin-left: 10px; margin-top: -10px;font-size: 20px; box-shadow: 0 10px 6px rgba(0, 0, 0, 0.1);color:#1877F2;">Accueil</a>
                                    <a href="{{ route('projet') }}" style="font-size: 20px; margin-top: -10px;margin-left: 10px; box-shadow: 0 10px 6px rgba(0, 0, 0, 0.1);color:#1877F2;">Projets</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"style="color: #1877F2;">{{ __('Déconnexion') }}</a> 

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                           
                        @endguest
                    </ul>
                   </div>
            </div>
       
    <form method="POST" action="{{ route('statistiqueauditeur') }}">
        @csrf

        <div style="margin-top:10px;">
            <label for="name_organisation">Nom de l'organisation</label>
            <input type="text" name="name_organisation" id="name_organisation" placeholder="Entrez le nom de l'organisme"  style="height:20px; width:180px;">
        </div>

        <div>
            <input type="checkbox" name="choisir_le_name_model[]" value="mesures relatives aux personnes"> Mesures relatives aux personnes<br>
            <input type="checkbox" name="choisir_le_name_model[]" value="mesures organisationnelles"> Mesures organisationnelles<br>
            <input type="checkbox" name="choisir_le_name_model[]" value="mesures technologiques"> Mesures technologiques<br>
            <input type="checkbox" name="choisir_le_name_model[]" value="Mesures relatives à la sécurité physique et environnementale"> Mesures relatives à la sécurité physique et environnementale<br>
        </div>

        <button type="submit">Afficher les statistiques</button>
    </form>

    @if(isset($conformityPercentages))
   @if($errorMessage)
    <div class="alert alert-danger"  style="color:red";>{{ $errorMessage }}</div>
@endif
        <h3>les statistiques pour l'organisation : {{ $nameOrganisation }}</h2>
        <div id="chart-container" style="width: 30%; width: 550px; margin-top: 20px;  margin-left: 140px;">
            <canvas id="chart"></canvas>
        </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if(isset($conformityPercentages))
                var conformityData = @json($conformityPercentages);

                var labels = Object.keys(conformityData);
                var data = Object.values(conformityData);

                var backgroundColors = data.map(function(percentage) {
                    if (percentage >= 75) {
                        return 'rgba(0, 128, 0, 1)'; // Vert standard
                    } else if (percentage >= 45 && percentage < 75) {
                        return 'rgba(255, 165, 0, 1)'; // Orange standard
                    } else {
                        return 'rgba(255, 0, 0, 1)'; // Rouge standard
                    }
                });

                var borderColor = data.map(function(percentage) {
                    if (percentage >= 75) {
                        return 'rgba(0, 128, 0, 1)'; // Vert (Succès)
                    } else if (percentage >= 45 && percentage < 75) {
                        return 'rgba(255, 165, 0, 1)'; // Orange (Résultat moyen)
                    } else {
                        return 'rgba(255, 0, 0, 1)'; // Rouge (Danger)
                    }
                });

                var ctx = document.getElementById('chart').getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Pourcentage de conformité',
                            data: data,
                            backgroundColor: backgroundColors,
                            borderColor: borderColor,
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                                max: 100,
                                ticks: {
                                    stepSize: 20,
                                    callback: function(value, index, values) {
                                        return value + '%';
                                    }
                                },
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Pourcentage'
                                }
                            },
                            x: {
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Modèles'
                                }
                            }
                        }
                    }
                });
            @endif
        });
    </script>
<div style="margin-top: 10px;">
            
                <div>
                    <span style="display: inline-block; width: 12px; height: 12px; background-color: rgba(0, 128, 0, 1); margin-right: 5px;"></span>
                    Bon résultat
                </div>
                <div>
                    <span style="display: inline-block; width: 12px; height: 12px; background-color: rgba(255, 165, 0, 1); margin-right: 5px;"></span>
                    Résultat moyen
                </div>
                <div>
                    <span style="display: inline-block; width: 12px; height: 12px; background-color: rgba(255, 0, 0, 1); margin-right: 5px;"></span>
                    Mauvais résultat
                </div>
            </div>