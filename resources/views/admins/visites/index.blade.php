@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Liste visite</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <a href="{{route('admins.visites.create')}}" class="btn btn-primary btn-block" style="width: 100PX">Ajouter</a>
    <div class="col-lg-12">
    <div class="card">
        
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
        <thead>
            <tr>
                <th>Client</th>
                <th>Appartemnt</th>
                <th>Remarque</th>
                <th>Décision</th>
                <th>Actions</th>
            </tr>
        </thead>
         <tbody  class="align-items-center">
            @foreach($visites as $visite)
                <tr>
                    <td>{{$visite->nom . " " . $visite->prenom1 . " " . $visite->prenom2}}</td>
                    <td>{{$visite->numappart}}</td>
                    <td>{{$visite->remarque}} </td>
                    <td>{{$visite->decision}}</td>
                    <td>
                        <a href="{{route('admins.visites.edit', $visite->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a> 
                        <a href="{{route('admins.visites.destroy', $visite->id)}}" onclick="return confirm('Sur de supprimer')" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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