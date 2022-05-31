@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Ajouter un client</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <form action="{{route('admins.clients.update', $id)}}" method="post">
        @csrf
        <input type="text" name="nom" placeholder="Nom" value="{{ $client->nom}}" required><br>
        <input type="text" name="prenom1" placeholder="Prenom1" value="{{ $client->prenom1}}" required><br>
        <input type="text" name="prenom2" placeholder="Prenom2" value="{{ $client->prenom2}}"><br>
        <input type="text" name="adresse" placeholder="Adresse" value="{{ $client->adresse}}" required><br>
        <input type="text" name="telephone" placeholder="telephone" value="{{ $client->telephone}}" required><br>
        <input type="text" name="cni" placeholder="cni" value="{{ $client->cni}}" required><br>
        <input type="text" name="profession" placeholder="profession" value="{{ $client->profession}}" required><br>
        <input type="text" name="signature" placeholder="signature" value="{{ $client->signature}}"><br>
        <button type="submit">Enregistrer</button>
    </form>
@endsection