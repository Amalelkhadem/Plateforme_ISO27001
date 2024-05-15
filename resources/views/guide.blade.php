@extends('layouts.app')

@section('content')
<div class="checkbox-list" style="background-color: #E0F0FF; border-radius: 8px; padding: 20px; margin: 0 auto; max-width: 850px;">
<h3>Guide d'évaluation de la conformité à la norme ISO 27001</h2>


<p>1. Commencez par examiner l'annexe A de la norme, qui contient 4 contrôles de sécurité :</p>
<ul>
  <li><a href="{{ route('mesures.organisationnelles') }}" style="color: #1877F2; text-decoration: underline;">Mesures Organisationnelles</a></li>
  <li><a href="{{ route('MesuresPersonnes') }}" style="color: #1877F2; text-decoration: underline;">Mesures relatives aux personnes</a></li>
  <li><a href="{{ route('MesuresSécurité') }}" style="color: #1877F2; text-decoration: underline;">Mesures relatives à la sécurité physique et environnementale</a></li>
  <li><a href="{{ route('MesuresTechnologiques') }}" style="color: #1877F2; text-decoration: underline;">Mesures Technologiques</a></li>
</ul>

<p>2. Avant de passer à l'évaluation, créez un projet distinct pour chaque contrôle de sécurité (4 projets au total): <a href="{{ route('create.form') }}" style="color: #1877F2; text-decoration: underline;"> Nouveau projet</a></p>

<p>3. Une fois les projets créés, évaluez chaque contrôle de sécurité individuellement, en commençant par le premier projet et en avançant dans l'ordre : <a href="{{ route('projet') }}" style="color: #1877F2; text-decoration: underline;"> Evaluer le projet</a></p>

<p>4. Une fois que vous avez évalué chaque contrôle de sécurité, les résultats et les recommandations sont affichés devant le contrôle de sécurité correspondant : <a href="{{ route('projet') }}" style="color: #1877F2; text-decoration: underline;"> Voir les résultat de conformité et les récommandations de chaques contrôle de sécurité</a></p>

<p>5. Après avoir évalué les 4 contrôles de sécurité, vous obtenez le pourcentage de conformité globale à la norme : <a href="{{ route('projet') }}" style="color: #1877F2; text-decoration: underline;"> Résultat</a></p>

<p>6. Pour obtenir une vue d'ensemble des résultats de conformité, consultez la page des statistiques qui affiche les résultats de chaque contrôle de sécurité : <a href="{{ route('statistique') }}" style="color: #1877F2; text-decoration: underline;"> Statistiques</a></p>

</div>
@endsection