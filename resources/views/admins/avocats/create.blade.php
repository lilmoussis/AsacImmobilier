@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Ajouter un avocat</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <form action="{{route('admins.avocats.store')}}" method="post">
        @csrf
        <input type="text" name="nom" placeholder="Nom" required><br>
        <input type="text" name="prenom" placeholder="Prenom" required><br>
        <input type="text" name="adresse" placeholder="Adresse" required><br>
        <input type="number" name="telephone1" placeholder="telephone1" required><br>
        <input type="number" name="telephone2" placeholder="telephone2"><br>
        <input type="number" name="telephone3" placeholder="telephone3"><br>
        <input type="text" name="numautorisation" placeholder="Numéro autorisation" required><br>
        <input type="text" name="signature" placeholder="signature"><br>
        <button type="submit">Enregistrer</button>
    </form>
@endsection