@extends('layouts.app')

@section('content')
<html>
<head>
    <title>Création de projet</title>
</head>
<body>
    <div class="checkbox-list" style="background: linear-gradient(135deg, #E0F0FF 50%, #ADD8E6 50%);  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 8px; padding: 20px; margin: 0 auto; max-width: 700px;">
        <h1 style="font-size: 24px;">Création de projet</h1>
       
        <form action="{{ route('create') }}" method="POST">
            @csrf

            <div style="margin-bottom: 10px;">
                <label for="name_project" style="font-size: 18px;">Nom du projet :</label><br>
                <input type="text" id="name_project" name="name_project" required style="font-size: 18px; padding: 5px;">
            </div>

            <div style="margin-bottom: 10px;">
                <label for="name_organisation" style="font-size: 18px;">Nom de l'organisme :</label><br>
                <input type="text" id="name_organisation" name="name_organisation" required style="font-size: 18px; padding: 5px;">
            </div>

           <div style="margin-bottom: 10px;font-size: 18px;">
    <p>Mesures</p>
    <select id="module" name="modules" onchange="updateOptionsField()">
        <option value="leadership">Mesures organisationnelles</option>
        <option value="policy">Mesures relatives aux personnes</option>
        <option value="organization">Mesures relatives à la sécurité physique et environnementale</option>
        <option value="human-resources">Mesures Technologiques</option>
    </select>
</div>


<script>
    function updateOptionsField() {
        var moduleSelect = document.getElementById("module");
        var optionsField = document.getElementById("optionsField");
        var selectedOption = moduleSelect.options[moduleSelect.selectedIndex].text;
        optionsField.value = selectedOption;
        adjustTextAreaSize();
    }
</script>
            <button type="submit" style=" box-shadow: 0 8px 0px rgba(0, 0, 0, 0.1);padding: 10px 20px; background: linear-gradient(135deg, #ADD8E6 70%, #E0F0FF 30%);font-size: 18px; color: black; border: none; border-radius: 4px; cursor: pointer;">Créer le projet</button>
        </form>
    </div>

    <script>
        function adjustTextAreaSize() {
            var optionsField = document.getElementById("optionsField");
            optionsField.style.height = "auto";
            optionsField.style.height = optionsField.scrollHeight + "px";
        }
    </script>
</body>
</html>
@endsection