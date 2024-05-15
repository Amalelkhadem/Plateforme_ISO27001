@extends('layouts.app')

@section('content')
  <div class="container">
       
<p>Veuillez évaluer chaque mesure en fonction de son niveau de conformité à la norme ISO 27001.</p>
    <div class="checkbox-list" style="background: linear-gradient(135deg, #ADD8E6 25%, #E0F0FF 75%); box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 8px; padding: 20px; margin: 0 auto; max-width: 1200px;">
    
    
    <table style="border-collapse: collapse;">
       
        <tr>
            <td style="border: 1px solid black; padding: 8px;">0%</td>
            <td style="border: 1px solid black; padding: 8px;">Non conforme. Aucune exigence de sécurité n'a été mise en place pour cette mesure de la norme ISO 27001.</td>
        </tr>
       
        <tr>
            <td style="border: 1px solid black; padding: 8px;">25%</td>
            <td style="border: 1px solid black; padding: 8px;">Non conforme avec des lacunes significatives. Certaines exigences de sécurité sont en place, mais des améliorations majeures sont nécessaires pour se conformer pleinement à cette mesure de sécurité.</td>
        </tr>
        <tr>
            <td style="border: 1px solid black; padding: 8px;">50%</td>
            <td style="border: 1px solid black; padding: 8px;">Partiellement conforme avec des lacunes modérées. Des exigences de sécurité sont en place, mais des améliorations substantielles sont nécessaires pour atteindre une conformité complète à cette mesure.</td>
        </tr>
        <tr>
            <td style="border: 1px solid black; padding: 8px;">75%</td>
            <td style="border: 1px solid black; padding: 8px;">Partiellement conforme avec quelques lacunes mineures. La plupart des exigences de sécurité sont en place, mais des ajustements mineurs sont nécessaires pour se conformer pleinement à cette mesure de sécurité.</td>
        </tr>
      
        <tr>
            <td style="border: 1px solid black; padding: 8px;">100%</td>
            <td style="border: 1px solid black; padding: 8px;">Conforme. Toutes les exigences de cette mesure de la norme ISO 27001 sont satisfaites.</td>
        </tr>
    </table>
    </div>
     

   </div>
   
@endsection
