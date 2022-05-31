@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Liste visite</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <a href="{{route('admins.visites.create')}}">Ajouter</a>
    <table border="1">
        <thead>
            <tr>
                <th>Client</th>
                <th>Appartemnt</th>
                <th>Remarque</th>
                <th>Décision</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($visites as $visite)
                <tr>
                    @php
                        $client=App\Models\Client::find($visite->clientid)
                    @endphp
                    <td>{{$client->nom . " " . $client->prenom1 . " " . $client->prenom2}}</td>
                    @php
                        $appartement=App\Models\Appartement::find($visite->appartementid)
                    @endphp
                    <td>{{$appartement->numappart}}</td>
                    <td>{{$visite->remarque}} </td>
                    <td>{{$visite->decision}}</td>
                    <td>
                        <a href="{{route('admins.visites.edit', $visite->id)}}">Modifier</a> 
                        <a href="{{route('admins.visites.destroy', $visite->id)}}" onclick="return confirm('Sur de supprimer')">Supprimer</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        
    </table>
@endsection