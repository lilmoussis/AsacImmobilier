@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Ajouter un promesse</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <form action="{{route('admins.promesses.update',$id)}}" method="post">
        @csrf
        @foreach ($promesses as $promesse)
        <select name="" id=""></select>
        <br>
        <input type="number" name="prixht" placeholder="prixht" value="{{$promesses->$prixht}}" id="prixht" required><br>
        <input type="number" id="tva" name="tva" placeholder="tva" value="{{$promesses->$tva}}" required><br>
        <input type="number" id="prixttc" name="prixttc" value="{{$promesses->$prixttc}}" placeholder="remarque" required><br>
        <input type="number" name="avance" placeholder="avance" value="{{$promesses->$avance}}" required><br>
        <input type="text" name="etat" placeholder="etat" value="{{$promesses->$etat}}" required><br>
        <button type="submit">Enregistrer</button>
    </form>
@endsection