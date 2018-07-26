@extends('layouts.default')
@section('title', 'Editar Usuario')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/common.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/registroStyle.css') }}">
@endsection
@section('content')
<div class="banner">
      <br>

      <div class="area">

          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif


        <form role="form" action="{{URL::current()}}" method="post" enctype="multipart/form-data">
          <div>
            <label for="name">Nombre</label>
            <br/>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= isset($_POST['nombre']) ? $_POST['nombre'] : $usuario->nombre; ?>" placeholder="Ingrese el nombre del usuario">
            <br/>
          </div>

          <div>
            <label for="address">Apellido</label>
            <br/>
            <input type="text" class="form-control" id="apellido" name="apellido" value="<?= isset($_POST['apellido']) ? $_POST['apellido'] : $usuario->apellido; ?>" placeholder="Ingrese el apellido">
            <br/>
          </div>

          <div>
            <label for="sport">Nombre de usuario</label>
            <br/>
            <input type="text" class="form-control" id="username" name="username" value="<?= isset($_POST['username']) ? $_POST['username'] : $usuario->username; ?>" placeholder="Ingrese el nombre de usuario">
            <br/>
          </div>
          {{ csrf_field() }}

          <input class="boton pull-right" type="submit" name="botonSubmit" value="Registrar"/>
        </form>
      </div>


    </div>
@endsection
