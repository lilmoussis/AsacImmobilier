@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Ajouter un promesse</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <form action="{{route('admins.promesses.store')}}" method="post">
        @csrf
        @foreach ($promesses as $promesse)
        <select name="" id=""></select>
        <br>
        <input type="number" name="prixht" placeholder="prixht" id="prixht" required><br>
        <input type="number" id="tva" name="tva" placeholder="tva" required><br>
        <input type="number" id="prixttc" name="prixttc" placeholder="remarque" required><br>
        <input type="number" name="avance" placeholder="avance" required><br>
        <input type="text" name="etat" placeholder="etat" required><br>
        <button type="submit">Enregistrer</button>
    </form>
@endsection