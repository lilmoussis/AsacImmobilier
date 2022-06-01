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
        <select class="form-control w-50" name="" ></select>
        <br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="number" name="prixht" placeholder="prixht" value="{{$promesses->$prixht}}" id="prixht" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="number" id="tva" name="tva" placeholder="tva" value="{{$promesses->$tva}}" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="number" id="prixttc" name="prixttc" value="{{$promesses->$prixttc}}" placeholder="remarque" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="number" name="avance" placeholder="avance" value="{{$promesses->$avance}}" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="text" name="etat" placeholder="etat" value="{{$promesses->$etat}}" required><br>
        <button   type="submit" style="width:100px; margin-left:200px"  class="btn btn-primary btn-block">Enregistrer</button>
    </form>
</div>
    </div>
@endsection