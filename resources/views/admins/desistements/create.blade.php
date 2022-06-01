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
        <select class="form-control w-50" name="immeubleid" id="">
            @foreach ($promesses as $promesse)
                <option value="{{$promesse->id}}">{{$promesse->appartementid}}</option>
            @endforeach
        </select>
        <br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="number" name="numero" placeholder="numero" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="text" name="cause" placeholder="Cause" required><br>
        <button   type="submit" style="width:100px; margin-left:200px"  class="btn btn-primary btn-block">Enregistrer</button>
    </form>
</div>
    </div>
@endsection