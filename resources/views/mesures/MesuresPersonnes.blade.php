@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-8" style="background-color: #E0F0FF; border-radius: 8px; padding: 20px; margin: 0 auto; width: 950px;">
            
               <div style="text-align: center;">
                       <h1 style="color: #333; font-size: 24px; margin-bottom: 20px;">Mesures relatives aux personnes</h1>
</div>
        <table class="table" style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr>
                    <th style="padding: 10px; border: 1px solid #ccc; background-color: #E6E6E6; font-weight: bold;">Numéro</th>
                    <th style="padding: 10px; border: 1px solid #ccc; background-color: #E6E6E6; font-weight: bold;">Titre</th>
                    <th style="padding: 10px; border: 1px solid #ccc; background-color: #E6E6E6; font-weight: bold;">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rules as $rule)
                    <tr>
                        <td style="padding: 10px; border: 1px solid #ccc; color: #333;">{{ $rule['numero'] }}</td>
                        <td style="padding: 10px; border: 1px solid #ccc; color: #333;">{{ $rule['titre'] }}</td>
                        <td style="padding: 10px; border: 1px solid #ccc; color: #333;">{{ $rule['description'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection