@extends('base')

@section('login')
    {{-- {{@bcrypt('admin')}}
    
    
    <form action="{{ route('admins.loginform')}}" method="post">
        @csrf
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="text" required name="username"  placeholder="Nom d'Utilisateur"><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="password" required name="password"  placeholder="Mot de passe"><br>
        <button   type="submit" style="width:100px; margin-left:200px"  class="btn btn-primary btn-block">
            Se connecter
        </button>
    </form> --}}

    <div class="authincation h-100" style="margin-top: 150px">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Connectez-vous</h4>
                                    @if($message=Session::get('error'))
                                        <div>{{$message}}</div>
                                    @endif
                                    <form action="{{route('admins.loginform')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Nom d'utilisateur</strong></label>
                                            <input style="border-color: rgb(224, 152, 17)" name="username" type="text" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Mot de passe</strong></label>
                                            <input style="border-color: rgb(224, 152, 17)" type="password" name="password" class="form-control" required>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"  class="btn btn-primary btn-block">Valider</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
@endsection