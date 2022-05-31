@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Liste directeur</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <a href="{{route('admins.directeurs.create')}}">Ajouter</a>
    <table border="1">
        <thead>
            <tr>
                <th>CNI</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Signature</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($directeurs as $directeur)
                <tr>
                    <td>{{$directeur->cni}}</td>
                    <td>{{$directeur->nom}}</td>
                    <td>{{$directeur->prenom}} </td>
                    <td>{{$directeur->adresse}}</td>
                    <td>{{$directeur->telephone}}</td>
                    <td>{{$directeur->signature}}</td>
                    <td>
                        <a href="{{route('admins.directeurs.edit', $directeur->id)}}">Modifier</a> 
                        <a href="{{route('admins.directeurs.destroy', $directeur->id)}}" onclick="return confirm('Sur de supprimer')">Supprimer</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        
    </table>
@endsection