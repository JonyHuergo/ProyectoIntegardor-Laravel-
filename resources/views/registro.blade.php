@extends('layouts.default')
@section('title', 'Registrarse')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/common.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/registroStyle.css') }}">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
@endsection
@section('content')
<div class="banner">
      <br>
      <div class="area">

        <form role="form" id="registr" action="registro" method="post" enctype="multipart/form-data" novalidate>
          <div class="form-group">
            <label class="control-label" for="nombre">Nombre</label>
            <br/>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= isset($_POST['nombre']) ? $_POST['nombre'] : ""; ?>" placeholder="Ingrese Nombre">
            <br/>
          </div>

          <div class="form-group">
            <label class="control-label" for="apellido">Apellido</label>
            <br/>
            <input type="text" class="form-control" id="apellido" name="apellido" value="<?= isset($_POST['apellido']) ? $_POST['apellido'] : ""; ?>" placeholder="Ingrese Apellido">
            <br/>
          </div>

          <div class="form-group">
            <label class="control-label" for="username">Nombre de Usuario</label>
            <br/>
            <input type="text" class="form-control" id="username" name="username" value="<?= isset($_POST['username']) ? $_POST['username'] : ""; ?>" placeholder="Ingrese Nombre de Usuario">
            <br/>
          </div>

          <div class="form-group">
            <label class="control-label" for="email">Email</label>
            <br/>
            <input type="email" class="form-control" id="email" name="email" value="<?= isset($_POST['email']) ? $_POST['email'] : ""; ?>" placeholder="Ingrese Email">
            <br/>
          </div>

          <div class="form-group">
            <label class="control-label" for="cemail">Confirmar Email</label>
            <br/>
            <input type="email" class="form-control" id="cemail" name="cemail" value="" placeholder="Ingrese Confirmación Email">
            <br/>
          </div>

          <div class="form-group">
            <label class="control-label" for="password">Contraseña</label>
            <br/>
            <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese Contraseña">
            <br/>
          </div>

          <div class="form-group">
            <label class="control-label" for="cpassword">Confirmar Contraseña</label>
            <br/>
            <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Ingrese Confirmación Contraseña">
            <br/>
          </div>

          <div class="form">
            <label class="control-label">Avatar</label>
            <br/>
            <input type="file" name="avatar" class="custom-file"/>
            <br/>
          </div>
          {{ csrf_field() }}

          <input class="boton pull-right" type="submit" name="botonSubmit" value="Registrarme"/>
        </form>
      </div>
    </div>
{!! JsValidator::formRequest('App\Http\Requests\RegisterRequest', '#registr'); !!}
@endsection


