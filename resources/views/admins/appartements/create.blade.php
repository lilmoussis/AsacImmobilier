@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    
    <h1>Ajouter un appartement</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <form action="{{route('admins.appartements.store')}}" method="post">
        @csrf
        <select class="" name="immeubleid" id="">
            @foreach ($immeubles as $immeuble)
                <option value="{{$immeuble->id}}">{{$immeuble->nom}}</option>
            @endforeach
        </select>
        <br>
        <input type="number" name="numetage" placeholder="Etage" required><br>
        <input type="number" name="numappart" placeholder="numappart" required><br>
        <input type="number" name="superficie" placeholder="superficie" required><br>
        <input type="number" name="nbrechambre" placeholder="nbrechambre" required><br>
        <input type="number" name="prix" placeholder="prix" required><br>
        <input type="text" name="etat" placeholder="Etat" required><br>
        <button type="submit">Enregistrer</button>
    </form>
@endsection