@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Ajouter un visite</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <form action="{{route('admins.visites.update',$id)}}" method="post">
        @csrf
        <select name="clientid" id="">
            @foreach ($clients as $client)
                <option value="{{$client->id}}">{{$client->nom . " " . $client->prenom1 . " " . $client->prenom2}}</option>
            @endforeach
        </select><br>
        <select name="appartementid" id="">
            @foreach ($appartements as $appartement)
                <option value="{{$appartement->id}}">{{$appartement->numappart}}</option>
            @endforeach
        </select><br>
        <input type="text" name="remarque" placeholder="remarque" value="{{$visites->$remarque}}" required><br>
        <input type="text" name="decision" placeholder="decision" value="{{$visites->$decision}}" required><br>
        <button type="submit">Enregistrer</button>
    </form>
@endsection