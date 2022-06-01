@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Ajouter un visite</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <form action="{{route('admins.visites.store')}}" method="post">
        @csrf
        <select class="form-control w-50" name="clientid" >
            @foreach ($clients as $client)
                <option value="{{$client->id}}">{{$client->nom . " " . $client->prenom1 . " " . $client->prenom2}}</option>
            @endforeach
        </select><br>
        <select class="form-control w-50" name="appartementid" >
            @foreach ($appartements as $appartement)
                <option value="{{$appartement->id}}">{{$appartement->numappart}}</option>
            @endforeach
        </select><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="text" name="remarque" placeholder="remarque" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="text" name="decision" placeholder="decision" required><br>
        <button   type="submit" style="width:100px; margin-left:200px"  class="btn btn-primary btn-block">Enregistrer</button>
    </form>
</div>
    </div>
@endsection