{{--@extends('layouts.app')--}}
@extends('layouts.default')

{{--@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection--}}

@php
    session_start();
    if(isset($_SESSION["registrado"])){
    header("Location: paginaPrincipal");
    }
@endphp
@section('title', 'Ingresar')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/ingresarStyle.css') }}">
@endsection
@section('content')
<section>
                    <div class="text-center">
                        <h1>Ingresa</h1>
                        <form class="row" action="{{ route('login') }}" aria-label="{{ __('Login') }}" method="post">
                            {{ csrf_field() }}
                            <input type='hidden' name='submitted' id='submitted' value='1' />
                            <span>
                            <label class="col-xl-6">Email</label>
                            <input class="col-xl-6 form-control" type="text" name="username" id='username' value="<?php if(isset($_COOKIE["usuario"])){ echo $_COOKIE["usuario"];} else if($_POST){ if(!$errores["usuario"]){ echo $_POST["usuario"];}}?>">
                            </span>
                            <span>
                            <label for="password" class="col-xl-6">Contraseña</label>
                            <input class="col-xl-6 form-control" type="password" name="password" id='password' value="<?php if(isset($_COOKIE["password"])){ echo $_COOKIE["password"];}?>" id='password' maxlength="50">
                            </span>
                            <section class="col-xl-6">
                                <label for="recordarme">Recordarme</label>
                                <input class="recordarme" type="checkbox" name="recordarme" value="1">
                            </section>
                            <input class="boton" type="submit" value="Ingresar">
                          </form>
                          <a href="#">Olvidé mi contraseña</a>
                    </div>
                </section>
@stop
