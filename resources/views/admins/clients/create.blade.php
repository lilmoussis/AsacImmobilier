@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Ajouter un client</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <form action="{{route('admins.clients.store')}}" method="post">
        @csrf
        <input type="text" name="nom" placeholder="Nom" required><br>
        <input type="text" name="prenom1" placeholder="Prenom1" required><br>
        <input type="text" name="prenom2" placeholder="Prenom2"><br>
        <input type="text" name="adresse" placeholder="Adresse" required><br>
        <input type="text" name="telephone" placeholder="telephone" required><br>
        <input type="text" name="cni" placeholder="cni" required><br>
        <input type="text" name="profession" placeholder="profession" required><br>
        <input type="text" name="signature" placeholder="signature"><br>
        <button type="submit">Enregistrer</button>
    </form>
@endsection