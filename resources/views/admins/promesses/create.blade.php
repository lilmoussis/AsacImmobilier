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
        @foreach ($avocats as $avocat)
        <select class="form-control w-50" name="" >
            <option value="{{$avocat->id}}">{{$avocat->nom . " " . $avocat->prenom}}</option>
        </select>
        @endforeach
        <br>
        @foreach ($clients as $client)
        <select class="form-control w-50" name="" >
            <option value="{{$client->id}}">{{$client->nom . " " . $client->prenom1 . " " . $client->prenom2}}</option>
        </select>
        <br>
        @endforeach
        @foreach ($appartements as $appartement)
        <select class="form-control w-50" name="" >
            <option value="{{$appartement->id}}">{{$appartement->numappart}}</option>
        </select>
        @endforeach
        
        <br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="number" name="prixht" placeholder="prixht" id="prixht" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="number" id="tva" name="tva" placeholder="tva" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="number" id="prixttc" name="prixttc" placeholder="remarque" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="number" name="avance" placeholder="avance" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="text" name="etat" placeholder="etat" required><br>
        <button   type="submit" style="width:100px; margin-left:200px"  class="btn btn-primary btn-block">Enregistrer</button>
        
    </form>
</div>
    </div>
@endsection