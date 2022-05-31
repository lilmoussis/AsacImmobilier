@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Ajouter un Directeur</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <form action="{{route('admins.directeurs.update',$id)}}" method="post">
        @csrf
        <input type="text" name="nom" placeholder="Nom" value="{{$directeurs->nom}}" required><br>
        <input type="text" name="prenom" value="{{$directeurs->prenom}}" placeholder="Prenom" required><br>
        <input type="text" name="adresse" value="{{$directeurs->adresse}}" placeholder="Adresse" required><br>
        <input type="text" name="telephone" value="{{$directeurs->telephone}}" placeholder="telephone" required><br>
        <input type="text" name="cni" placeholder="cni" value="{{$directeurs->cni}}" required><br>
        <input type="text" name="signature" value="{{$directeurs->signature}}" placeholder="signature"><br>
        <button type="submit">Enregistrer</button>
    </form>
@endsection