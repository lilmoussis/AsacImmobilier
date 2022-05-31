@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Ajouter un avocat</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <form action="{{route('admins.avocats.update',$id)}}" method="post">
        @csrf
        <input type="text" name="nom" placeholder="Nom" value="{{$avocats->nom}}" required><br>
        <input type="text" name="prenom" placeholder="Prenom" value="{{$avocats->prenom}}" required><br>
        <input type="text" name="adresse" placeholder="Adresse" value="{{$avocats->adresse}}" required><br>
        <input type="number" name="telephone1" placeholder="telephone1" value="{{$avocats->telephone1}}" required><br>
        <input type="number" name="telephone2" value="{{$avocats->telephone2}}" placeholder="telephone2"><br>
        <input type="number" name="telephone3" value="{{$avocats->telephone3}}" placeholder="telephone3"><br>
        <input type="text" name="numautorisation" value="{{$avocats->numautorisation}}" placeholder="Numéro autorisation" required><br>
        <input type="text" name="signature" value="{{$avocats->signature}}" placeholder="signature"><br>
        <button type="submit">Enregistrer</button>
    </form>
@endsection