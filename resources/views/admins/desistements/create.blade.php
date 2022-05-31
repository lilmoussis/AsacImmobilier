@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Ajouter un Desistement</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <form action="{{route('admins.desistements.store')}}" method="post">
        @csrf
        {{-- <select name="immeubleid" id="">
            @foreach ($immeubles as $immeuble)
                <option value="{{$immeuble->id}}">{{$immeuble->nom}}</option>
            @endforeach
        </select> --}}
        <br>
        <input type="button" value="Numero" onclick="form.alea.value=parseInt(Math.random()*100);">
Nombre généré : <input type="text" name="numero" size=10>
        <input type="text" name="cause" placeholder="Cause" required><br>
        <button type="submit">Enregistrer</button>
    </form>
@endsection