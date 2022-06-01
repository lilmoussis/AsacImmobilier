@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Liste promesse</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
    <a href="{{route('admins.promesses.create')}}" class="btn btn-primary btn-block" style="width: 100PX">Ajouter</a>
    <div class="col-lg-12">
    <div class="card">
        
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
        <thead>
            <tr>
                <th>Avocat</th>
                <th>Appartement</th>
                <th>Client</th>
                <th>PrixHT</th>
                <th>TVA</th>
                <th>TTC</th>
                <th>Avance</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
        </thead>
         <tbody  class="align-items-center">
            @foreach($promesses as $promesse)
                <tr>
                    <td>{{$promesse->avocatid}}</td>
                    <td>{{$promesse->appartementid}}</td>
                    <td>{{$promesse->clientid}}</td>
                    <td>{{$promesse->prixht}} </td>
                    <td>{{$promesse->tva}}</td>
                    <td>{{$promesse->prixttc}}</td>
                    <td>{{$promesse->avance}} </td>
                    <td>{{$promesse->etat}}</td>
                    <td>
                        <a href="{{route('admins.promesses.edit', $promesse->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a> 
                        <a href="{{route('admins.promesses.destroy', $promesse->id)}}" onclick="return confirm('Sur de supprimer')" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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