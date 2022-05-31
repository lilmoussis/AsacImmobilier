@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Liste Avocat</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <a href="{{route('admins.avocats.create')}}">Ajouter</a>
    <table border="1">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom(s)</th>
                <th>Adresse</th>
                <th>Telephone(s)</th>
                <th>Num. Autorisation</th>
                <th>Signature</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($avocats as $avocat)
                <tr>
                    <td>{{$avocat->nom}}</td>
                    <td>{{$avocat->prenom}} </td>
                    <td>{{$avocat->adresse}}</td>
                    <td>{{$avocat->telephone1 . " / " . $avocat->telephone2 . " / " . $avocat->telephone3 }}</td>
                    <td>{{$avocat->numautorisation}}</td>
                    <td>{{$avocat->signature}}</td>
                    <td>
                        <a href="{{route('admins.avocats.edit', $avocat->id)}}">Modifier</a> 
                        <a href="{{route('admins.avocats.destroy', $avocat->id)}}" onclick="return confirm('Sur de supprimer')">Supprimer</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        
    </table>
@endsection