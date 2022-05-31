@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Liste immeuble</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <a href="{{route('admins.immeubles.create')}}">Ajouter</a>
    <table border="1">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($immeubles as $immeuble)
                <tr>
                    <td>{{$immeuble->nom}}</td>
                    <td>{{$immeuble->adresse}} </td>
                    <td>
                        <a href="{{route('admins.immeubles.edit', $immeuble->id)}}">Modifier</a> 
                        <a href="{{route('admins.immeubles.destroy', $immeuble->id)}}" onclick="return confirm('Sur de supprimer')">Supprimer</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        
    </table>
@endsection