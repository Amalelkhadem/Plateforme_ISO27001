@extends('layouts.app')

@section('content')
<div class="container">
    <div style="text-align: left; border: 1px solid transparent; padding: 1px; max-width: 900px; height: 0px;">
    </div>

    <div style="display: flex;margin-right: 0px;">
        <div style="flex: 1; margin-right: 10px; margin-left: 0px; margin-top: 0px;">
            <div class="checkbox-list" style="background: linear-gradient(135deg, #ADD8E6 25%, #E0F0FF 75%); box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 8px; padding: 20px; margin: 0 auto; max-width: 750px;">
            <p style="color: #1877F2; font-size: 20px;">AuditISO27001</p>
            <p style="font-weight: bold; color: black; font-size: 30px;">Une plateforme en ligne complète pour une évaluation efficace de la conformité à la norme ISO 27001</p>
            <p style="color: #333333; font-size: 14px; margin-top: 64px; font-weight: bold;">Accédez à notre plateforme, pour être conforme et garantir la sécurité</p>
             @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="display: inline-block; padding: 10px 30px; background-color: black; color: white; border: 2px solid darkgreen;margin-top: 0px; border-radius: 20px;">Essaiez maintenant</a>
                    @endif
            </div>
            
        </div>
        <div style="flex: 1;margin-bottom: 0px;">
            <div style="border: 1px solid transparent;margin-left: 50px; padding: 1px; max-width: 1000px; height: 450px;">
                <img src="{{ asset('ImageAbout.jpeg') }}" alt="image about" style="width: 100%; height: 100%;">
            </div>
        </div>
        
    </div>
    
    
    
</div>
@endsection

@section('scripts')
    <script src="{{ asset('react-app/js/runtime-main.js') }}"></script>
    <script src="{{ asset('react-app/js/main.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function AboutPage() {
                return null; // Retourner null car vous n'avez pas de contenu spécifique ici
            }

            ReactDOM.render(
                React.createElement(AboutPage),
                document.getElementById('react-app-container')
            );
        });
    </script>
@endsection