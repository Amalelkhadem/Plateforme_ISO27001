@extends('layouts.app')

@section('content')
    <style>
        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .purple-button {
            display: block;
            margin-bottom: 10px;
            padding: 10px 20px;
            background-color: #663399;
            color: white;
            text-decoration: none;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .purple-button:hover {
            background-color: #4c297d;
        }
    </style>

    <div class="container" style="display: flex; justify-content: center;">
    <div class="button-container" style="background-color: #B3D4FF; border: 1px solid #ccc; padding: 10px; border-radius: 6px;height: 400px;">
        <h1 style="color: black; margin-bottom: 60px;font-size: 30px;">Les contrôles de sécurité de l'ISO 27001</h1>
    

    
    <div class="button-container " >
        <div style="margin-bottom: 20px;">
            <div style="margin-bottom: 20px;">
                <button onclick="window.location.href='{{ route('mesures.organisationnelles') }}'" class="purple-button" style="background-color: #1150B0; color: white; border: none; border-radius: 5px; padding: 10px 20px; font-size: 16px; cursor: pointer;">Mesures organisationnelles</button>
            </div>
            <div style="margin-bottom: 20px;">
                <button onclick="window.location.href='{{ route('MesuresPersonnes') }}'" class="purple-button" style="background-color: #1150B0; color: white; border: none; border-radius: 5px; padding: 10px 20px; font-size: 16px; cursor: pointer;">Mesures relatives aux personnes</button>
            </div>
            <div style="margin-bottom: 20px;">
                <button onclick="window.location.href='{{ route('MesuresSécurité') }}'" class="purple-button" style="background-color: #1150B0; color: white; border: none; border-radius: 5px; padding: 10px 20px; font-size: 16px; cursor: pointer;">Mesures relatives à la sécurité physique et environnementale</button>
            </div>
            <div>
                <button onclick="window.location.href='{{ route('MesuresTechnologiques') }}'" class="purple-button" style="background-color: #1150B0; color: white; border: none; border-radius: 5px; padding: 10px 20px; font-size: 16px; cursor: pointer;">Mesures Technologiques</button>
            </div>
        </div> </div></div>
 <div style="border: 1px solid transparent; margin-left: 10px; width: 300px; height: 400px;margin-bottom: 20px">
            <img src="http://localhost:8000/iso27001.png" alt="Description de la plateforme de conformité" style="width: 100%; height: 100%;">
        </div>
    </div>
    
</div>

</div>

</div>

    </div>
@endsection