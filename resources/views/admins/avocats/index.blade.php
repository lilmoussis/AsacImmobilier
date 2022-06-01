@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Liste Avocat</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <a href="{{route('admins.avocats.create')}}" class="btn btn-primary btn-block" style="width: 100PX">Ajouter</a>
    <div class="col-lg-12">
    <div class="card">
        
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom(s)</th>
                <th>Adresse</th>
                <th>Telephone(s)</th>
                <th>Num. Autorisation</th>
                <th>Signature</th>
                <th>Actions</th>
            </tr>
        </thead>
         <tbody  class="align-items-center">
            @foreach($avocats as $avocat)
                <tr>
                    <td>{{$avocat->nom}}</td>
                    <td>{{$avocat->prenom}} </td>
                    <td>{{$avocat->adresse}}</td>
                    <td>{{$avocat->telephone1 . " / " . $avocat->telephone2 . " / " . $avocat->telephone3 }}</td>
                    <td>{{$avocat->numautorisation}}</td>
                    <td>{{$avocat->signature}}</td>
                    <td>
                        <a href="{{route('admins.avocats.edit', $avocat->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a> 
                        <a href="{{route('admins.avocats.destroy', $avocat->id)}}" onclick="return confirm('Sur de supprimer')" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
           @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection