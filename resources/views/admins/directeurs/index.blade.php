@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <a href="{{route('admins.directeurs.create')}}" class="btn btn-primary btn-block" style="width: 100PX" class="btn btn-primary btn-block" style="width: 100PX">Ajouter</a>
    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Liste des directeurs</h4>
        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
        <thead>
            <tr>
                <th>CNI</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Signature</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody  class="align-items-center">
            @foreach($directeurs as $directeur)
                <tr>
                    <td>{{$directeur->cni}}</td>
                    <td>{{$directeur->nom}}</td>
                    <td>{{$directeur->prenom}} </td>
                    <td>{{$directeur->adresse}}</td>
                    <td>{{$directeur->telephone}}</td>
                    <td>{{$directeur->signature}}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{route('admins.directeurs.edit', $directeur->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                            <a href="{{route('admins.directeurs.destroy', $directeur->id)}}"  onclick="return confirm('Sur de supprimer')" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                        </div>
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