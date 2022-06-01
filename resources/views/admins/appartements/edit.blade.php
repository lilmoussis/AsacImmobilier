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
        <select class="form-control w-50" name="immeubleid" >
            @foreach ($immeubles as $immeuble)
                <option value="{{$immeuble->id}}">{{$immeuble->nom}}</option>
            @endforeach
        </select>
        <br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="number" name="numetage" placeholder="Etage" value="{{$appartements->numetage}}" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="number" name="numappart" placeholder="numappart" value="{{$appartements->numappart}}" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="number" name="superficie" placeholder="superficie" value="{{$appartements->superficie}}" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="number" name="nbrechambre" placeholder="nbrechambre" value="{{$appartements->nbrechambre}}" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="number" name="prix" placeholder="prix" value="{{$appartements->prix}}" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="text" name="etat" placeholder="Etat" value="{{$appartements->etat}}" required><br>
        <button   type="submit" style="width:100px; margin-left:200px"  class="btn btn-primary btn-block">Enregistrer</button>
    </form>
</div>
    </div>
@endsection