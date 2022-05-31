@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Liste appartement</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <a href="{{route('admins.appartements.create')}}">Ajouter</a>
    <table border="1">
        <thead>
            <tr>
                <th>Immeuble</th>
                <th>Num Appart(s)</th>
                <th>Superficie</th>
                <th>Etage</th>
                <th>Chambre(s)</th>
                <th>Prix</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($appartements as $appartement)
                <tr>
                    {{-- @php
                        $immeuble=App\Models\Immeuble::find($appartement->immeubleid)
                    @endphp
                    <td>{{$immeuble->nom}}</td> --}}
                    <td>{{$appartement->numappart}} </td>
                    <td>{{$appartement->superficie}}</td>
                    <td>{{$appartement->etage}}</td>
                    <td>{{$appartement->nbrechambre}}</td>
                    <td>{{$appartement->prix}}</td>
                    <td>{{$appartement->etat}}</td>
                    <td>
                        <a href="{{route('admins.appartements.edit', $appartement->id)}}">Modifier</a> 
                        <a href="{{route('admins.appartements.destroy', $appartement->id)}}" onclick="return confirm('Sur de supprimer')">Supprimer</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        
    </table>
@endsection