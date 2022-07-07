@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Liste appartement</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <a href="{{route('admins.appartements.create')}}" class="btn btn-primary btn-block" style="width: 100PX">Ajouter</a>
    <div class="col-lg-12">
    <div class="card">
        
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
        <thead>
            <tr>
                <th>Immeuble</th>
                <th>Num Appart(s)</th>
                <th>Superficie</th>
                <th>Etage</th>
                <th>Chambre(s)</th>
                <th>Prix</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
        </thead>
         <tbody  class="align-items-center">
            @foreach($appartements as $appartement)
                <tr>
                    <td>{{$appartement->nom}}</td>
                    <td>{{$appartement->numappart}} </td>
                    <td>{{$appartement->superficie}}</td>
                    <td>{{$appartement->numetage}}</td>
                    <td>{{$appartement->nbrechambre}}</td>
                    <td>{{$appartement->prix}}</td>
                    <td>{{$appartement->etat}}</td>
                    <td>
                        <a href="{{route('admins.appartements.edit', $appartement->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a> 
                        <a href="{{route('admins.appartements.destroy', $appartement->id)}}" onclick="return confirm('Sur de supprimer')" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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