@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Liste appartement</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <a href="{{route('admins.desistements.create')}}">Ajouter</a>
    <table border="1">
        <thead>
            <tr>
                <th>Numero Appart(s)</th>
                <th>Cause</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($desistements as $desistement)
                <tr>
                    {{-- @php
                        $immeuble=App\Models\Immeuble::find($appartement->immeubleid)
                    @endphp
                    <td>{{$immeuble->nom}}</td> --}}
                    <td>{{$desistement->numero}}</td>
                    <td>{{$desistement->cause}}</td>
                    <td>
                        <a href="{{route('admins.desistements.edit', $desistement->id)}}">Modifier</a> 
                        <a href="{{route('admins.desistements.destroy', $desistements->id)}}" onclick="return confirm('Sur de supprimer')">Supprimer</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        
    </table>
@endsection