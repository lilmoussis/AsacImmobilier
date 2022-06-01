@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Ajouter un avocat</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <form action="{{route('admins.avocats.store')}}" method="post">
        @csrf
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="text" name="nom" placeholder="Nom" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="text" name="prenom" placeholder="Prenom" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="text" name="adresse" placeholder="Adresse" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="number" name="telephone1" placeholder="telephone1" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="number" name="telephone2" placeholder="telephone2"><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="number" name="telephone3" placeholder="telephone3"><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="text" name="numautorisation" placeholder="Numéro autorisation" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="text" name="signature" placeholder="signature"><br>
        <button   type="submit" style="width:100px; margin-left:200px"  class="btn btn-primary btn-block">Enregistrer</button>
    </form>
</div>
    </div>
@endsection