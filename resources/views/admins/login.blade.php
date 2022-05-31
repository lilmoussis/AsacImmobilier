@extends('base')

@section('login')
    {{-- {{@bcrypt('admin')}}
    
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
    </form> --}}

    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<img src="images/logo-full.png" alt="">
									</div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="{{ route('admins.loginform')}}">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Utilisateur</strong></label>
                                            <input type="username" class="form-control" value=">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" value="Password">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                               <div class="custom-control custom-checkbox ml-1">
													<input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
													<label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
												</div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="page-register.html">Sign up</a></p>
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