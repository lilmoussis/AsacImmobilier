@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Ajouter un Directeur</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <form action="{{route('admins.directeurs.store')}}" method="post">
        @csrf
        <input type="text" name="nom" placeholder="Nom" required><br>
        <input type="text" name="prenom" placeholder="Prenom" required><br>
        <input type="text" name="adresse" placeholder="Adresse" required><br>
        <input type="text" name="telephone" placeholder="telephone" required><br>
        <input type="text" name="cni" placeholder="cni" required><br>
        <input type="text" name="signature" placeholder="signature"><br>
        <button type="submit">Enregistrer</button>
    </form>
@endsection