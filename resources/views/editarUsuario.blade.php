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
            <input type="text" class="form-control" id="first_name" name="first_name" value="<?= isset($_POST['first_name']) ? $_POST['first_name'] : $usuario->first_name; ?>" placeholder="Ingrese el nombre del usuario">
            <br/>
          </div>

          <div>
            <label for="address">Apellido</label>
            <br/>
            <input type="text" class="form-control" id="last_name" name="last_name" value="<?= isset($_POST['last_name']) ? $_POST['last_name'] : $usuario->last_name; ?>" placeholder="Ingrese el apellido">
            <br/>
          </div>

          <div>
            <label for="sport">Nombre de usuario</label>
            <br/>
            <input type="text" class="form-control" id="username" name="username" value="<?= isset($_POST['username']) ? $_POST['username'] : $usuario->username; ?>" placeholder="Ingrese el nombre de usuario">
            <br/>
          </div>
          {{ csrf_field() }}

          <input class="boton pull-right" type="submit" name="botonSubmit" value="Guardar"/>
        </form>
      </div>


    </div>
@endsection
