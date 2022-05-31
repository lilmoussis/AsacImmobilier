@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    
    <h1>Ajouter un appartement</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <form action="{{route('admins.appartements.update',$id)}}" method="post">
        @csrf
        <select name="immeubleid" id="">
            @foreach ($immeubles as $immeuble)
                <option value="{{$immeuble->id}}">{{$immeuble->nom}}</option>
            @endforeach
        </select>
        <br>
        <input type="number" name="numetage" placeholder="Etage" value="{{$appartements->etage}}" required><br>
        <input type="number" name="numappart" placeholder="numappart" value="{{$appartements->numappart}}" required><br>
        <input type="number" name="superficie" placeholder="superficie" value="{{$appartements->superficie}}" required><br>
        <input type="number" name="nbrechambre" placeholder="nbrechambre" value="{{$appartements->nbrechambre}}" required><br>
        <input type="number" name="prix" placeholder="prix" value="{{$appartements->prix}}" required><br>
        <input type="text" name="etat" placeholder="Etat" value="{{$appartements->etat}}" required><br>
        <button type="submit">Enregistrer</button>
    </form>
@endsection