@extends('layouts.app')

@section('content')
<div class="checkbox-list" style="background: linear-gradient(135deg, #E0F0FF 50%, #ADD8E6 50%); box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 8px; padding: 20px; margin: 0 auto; max-width: 950px;">
   
    <div class="checkbox-list" style="background: linear-gradient(135deg, #ADD8E6 63%, #E0F0FF 37%); box-shadow: 0 10px 6px rgba(0, 0, 0, 0.1); border-radius: 6px;width: 900px;  padding: 20px; margin: 0 auto;border: 1px solid transparent; ">
        <div class="welcome-text" style="color: #1877F2; font-size: 24px;">
            {{ __('Bienvenue, ') }} {{ Auth::user()->name }}
        </div>
        <p style="color: black; font-size: 20px;">Explorez votre espace privé et gérez vos évaluations ISO 27001 en toute simplicité.</p>
    </div><br>
    
    <div class="row justify-content-center">
        <div style="border: 1px solid transparent; margin-left: 10px; width: 250px; height: 250px;margin-bottom: 20px">
            <img src="http://localhost:8000/der.jpg" alt="Description de la plateforme de conformité" style="width: 100%; height: 100%;">
        </div> 
    <div class="col-md-8">
        <div class="container" style="background-color: #E0F0FF;box-shadow: 0 20px 20px rgba(0, 0, 0, 0.1); margin-right: 25px;width:250px;height: 250px;">
            
                <a href="{{ route('iso') }}" style="font-size: 16px;box-shadow: 0 10px 6px rgba(0, 0, 0, 0.1);">Annexe A</a><br>
                      
            <div style="margin-top: 10px;font-size: 16px; width: 140px; height: 35px;">
                <a href="{{ route('projet') }}" style="font-size: 16px;box-shadow: 0 10px 6px rgba(0, 0, 0, 0.1);">Projets</a> 

            <div style="margin-top: 10px;font-size: 16px; width: 140px; height: 35px;">
            
                <a href="{{ route('archived-projects') }}" style="font-size: 16px;box-shadow: 0 10px 6px rgba(0, 0, 0, 0.1);">Projets archivés</a>
                       
           
                       
            <div style="margin-top: 10px;font-size: 16px; width: 140px; height: 35px;">

                <a href="{{ route('statistiqueauditeur') }}" style="font-size: 16px;box-shadow: 0 10px 6px rgba(0, 0, 0, 0.1);">Statistiques</a> 
           
            
        </div>
        
           
    </div>
</div>
@endsection

@section('styles')
<style>
    .welcome-container {
        margin-top: 20px;
        border: 1px solid black;
        padding: 10px;
    }

    .spacer {
        margin-bottom: 20px;
    }
</style>
@endsection