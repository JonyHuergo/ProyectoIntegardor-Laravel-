@extends('layouts.default')
@section('title', 'Ingresar')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/common.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/ingresarStyle.css') }}">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
@endsection
@section('content')
<section>
    <div class="text-center">
        <h1>Ingresa</h1>
        <form class="row" method="POST" action="{{ route('login') }}" id="login">

            {{ csrf_field() }}

            @if(session()->has('login_error'))

                <div class="alert alert-success">

                  {{ session()->get('login_error') }}

                </div>
                
            @endif
             
            <label for="identity" class="col-xl-6 control-label">Email o Usuario</label>

            <div class="col-xl-6">
                <input id="identity" type="identity" class="form-control" name="identity" value="{{ old('identity') }}" autofocus>

                  @if ($errors->has('identity'))

                    <span class="help-block">
                        <strong>{{ $errors->first('identity') }}</strong>
                    </span>

                  @endif

            </div>
            <span></span>
            <label for="password" class="col-xl-6 control-label">Contraseña</label>
            <div class="col-xl-6">
                <input id="password" type="password" class="form-control" name="password">

                  @if ($errors->has('password'))

                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>

                  @endif

            </div>
              
            <section class="col-xl-6">
                <label for="remember">Recordarme</label>
                <input type="checkbox" name="remember" class="recordarme" {{ old('remember') ? 'checked' : '' }}>
            </section>
            
            <input class="boton" type="submit" value="Ingresar">   
            
        </form>
        {{--<a href="{{ route('password.request') }}">{{ __('Olvidé mi contraseña') }}</a>--}}
    </div>
</section>
{!! JsValidator::formRequest('App\Http\Requests\UserRequest', '#login'); !!}
@stop
