<!DOCTYPE html>
<html>
<head>
    
    <title>Création de compte auditeur</title>
    
</head>
<body>
   <div class="checkbox-list" style="background-color: #ADD8E6; box-shadow: 0 10px 6px rgba(0, 0, 0, 0.1); border-radius: 6px; width: 900px; padding: 20px; margin: 0 auto; border: 1px solid transparent;">
            <div class="welcome-text" style="background-color:#E6E6E6;  font-size: 24px; display: flex;height:70px; align-items: center;">
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
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
                    <li class="nav-item" style="margin-left:700px; margin-top:-20px;">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Déconnexion') }}</a></li>
        <a href="{{ route('admin.auditeur') }}" style="font-size: 20px; margin-left: 10px; box-shadow: 0 10px 6px rgba(0, 0, 0, 0.1);">Auditeurs</a>
        <a href="{{ route('admin.admininterface') }}" style="margin-left: 10px; font-size: 20px; box-shadow: 0 10px 6px rgba(0, 0, 0, 0.1);">Accueil</a>
        <a href="{{ route('projetauditeur') }}" style="font-size: 20px; margin-left: 10px; box-shadow: 0 10px 6px rgba(0, 0, 0, 0.1);">Projets</a>
        
    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                
            
        @endguest
    </ul>
    
</div>
    </div>
   
<div class="container" style=" display: flex; justify-content: center;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: #E6E6E6; height: 380px;margin-top:20px; width: 400px;text-align: center;">
                <div class="card-header" style="background-color: #BFBFBF; height: 50px; text-align: center; display: flex; align-items: center; justify-content: center;">
    <h4 style="font-size: 25px;">{{ __('Créer un nouveau auditeur') }}</h4>
</div>
<br>
                <div class="card-body">
                   <form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="row mb-3">
        <label for="name" class="col-md-4 col-form-label text-md-end"style="margin-right:210px;">{{ __('Nom:') }}</label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="font-size: 20px;">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div><br>
    </div>
    <div class="row mb-3">
        <label for="email" class="col-md-4 col-form-label text-md-end"style="margin-right:150px;">{{ __('Adresse Email:') }}</label>
        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="font-size: 20px;">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div><br>
    </div>
    <div class="row mb-3">
        <label for="password" class="col-md-4 col-form-label text-md-end"style="margin-right:150px;">{{ __('Mot de passe:') }}</label>
        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="font-size: 20px;">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div><br>
    </div>
    <div class="row mb-3">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-end" style="margin-right:70px;">{{ __('Confirmer le mot de passe:') }}</label>
        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" style="font-size: 20px;">
        </div>
    </div>
    <br>
    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary" style="background-color: #ADD8E6; width: 100px; height:30px;">
                {{ __('Créer') }}
            </button>
        </div>
    </div>
</form>
                </div>
            </div>
        </div>
    </div>
</div>