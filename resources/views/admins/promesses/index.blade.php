@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Liste promesse</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <a href="{{route('admins.promesses.create')}}">Ajouter</a>
    <table border="1">
        <thead>
            <tr>
                <th>Avocat</th>
                <th>Appartement</th>
                <th>Client</th>
                <th>PrixHT</th>
                <th>TVA</th>
                <th>TTC</th>
                <th>Avance</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($promesses as $promesse)
                <tr>
                    <td>{{$promesse->avocatid}}</td>
                    <td>{{$promesse->visiteid}}</td>
                    <td>{{$promesse->prixht}} </td>
                    <td>{{$promesse->tva}}</td>
                    <td>{{$promesse->prixttc}}</td>
                    <td>{{$promesse->avance}} </td>
                    <td>{{$promesse->etat}}</td>
                    <td>
                        <a href="{{route('admins.promesses.edit', $promesse->id)}}">Modifier</a> 
                        <a href="{{route('admins.promesses.destroy', $promesse->id)}}" onclick="return confirm('Sur de supprimer')">Supprimer</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        
    </table>
@endsection