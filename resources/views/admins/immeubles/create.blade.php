@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Ajouter un immeuble</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <form  action="{{route('admins.immeubles.store')}}" method="post">
        @csrf
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="text" name="nom" placeholder="Nom" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="text" name="adresse" placeholder="adresse" required><br>
        <button   type="submit" style="width:100px; margin-left:200px" class="btn btn-primary btn-block">Enregistrer</button>
    </form>
</div>
    </div>
@endsection