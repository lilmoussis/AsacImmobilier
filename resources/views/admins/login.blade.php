@extends('base')

@section('login')
    {{-- {{@bcrypt('admin')}} --}}
    <h1>Login Admin</h1>
    @if($message=Session::get('error'))
        <div class="">{{$message}}</div>
    @endif
    <form action="{{ route('admins.loginform')}}" method="post">
        @csrf
        <input type="text" required name="username" id="" placeholder="Nom d'Utilisateur"><br>
        <input type="password" required name="password" id="" placeholder="Mot de passe"><br>
        <button type="submit">
            Se connecter
        </button>
    </form>
@endsection