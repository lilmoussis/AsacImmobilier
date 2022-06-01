@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Liste client</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <a href="{{route('admins.clients.create')}}" class="btn btn-primary btn-block" style="width: 100PX">Ajouter</a>
    <div class="col-lg-12">
    <div class="card">
        
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
        <thead>
            <tr>
                <th>CNI</th>
                <th>Nom</th>
                <th>Prenom(s)</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Profession</th>
                <th>Signature</th>
                <th>Actions</th>
            </tr>
        </thead>
         <tbody  class="align-items-center">
            @foreach($clients as $client)
                <tr>
                    <td>{{$client->cni}}</td>
                    <td>{{$client->nom}}</td>
                    <td>{{$client->prenom1 . " " . $client->prenom2}} </td>
                    <td>{{$client->adresse}}</td>
                    <td>{{$client->telephone}}</td>
                    <td>{{$client->profession}}</td>
                    <td>{{$client->signature}}</td>
                    <td>
                        <a href="{{route('admins.clients.edit', $client->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a> 
                        <a href="{{route('admins.clients.destroy', $client->id)}}" onclick="return confirm('Sur de supprimer')" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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