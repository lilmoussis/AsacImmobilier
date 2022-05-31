@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Liste client</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <a href="{{route('admins.clients.create')}}">Ajouter</a>
    <table border="1">
        <thead>
            <tr>
                <th>CNI</th>
                <th>Nom</th>
                <th>Prenom(s)</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Profession</th>
                <th>Signature</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{$client->cni}}</td>
                    <td>{{$client->nom}}</td>
                    <td>{{$client->prenom1 . " " . $client->prenom2}} </td>
                    <td>{{$client->adresse}}</td>
                    <td>{{$client->telephone}}</td>
                    <td>{{$client->profession}}</td>
                    <td>{{$client->signature}}</td>
                    <td>
                        <a href="{{route('admins.clients.edit', $client->id)}}">Modifier</a> 
                        <a href="{{route('admins.clients.destroy', $client->id)}}" onclick="return confirm('Sur de supprimer')">Supprimer</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        
    </table>
@endsection