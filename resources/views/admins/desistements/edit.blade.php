@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Ajouter un Desistement</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <form action="{{route('admins.desistements.update',$id)}}" method="post">
        @csrf
        {{-- <select class="form-control w-50" name="immeubleid" >
            @foreach ($immeubles as $immeuble)
                <option value="{{$immeuble->id}}">{{$immeuble->nom}}</option>
            @endforeach
        </select> --}}
        <br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="button" value="Numero" onclick="form.alea.value=parseInt(Math.random()*100);">
Nombre généré : <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="text" name="numero" size=10>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="text" name="cause" placeholder="Cause" required><br>
        <button   type="submit" style="width:100px; margin-left:200px"  class="btn btn-primary btn-block">Enregistrer</button>
    </form>
</div>
    </div>
@endsection