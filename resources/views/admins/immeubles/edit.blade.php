@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Ajouter un immeuble</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <form action="{{route('admins.immeubles.update',$id)}}" method="post">
        @csrf
        <input type="text" name="nom" placeholder="Nom" value="{{$immeubles->$nom}}" required><br>
        <input type="text" name="adresse" placeholder="adresse" value="{{$immeubles->$adresse}}" required><br>
        <button type="submit">Enregistrer</button>
    </form>
@endsection