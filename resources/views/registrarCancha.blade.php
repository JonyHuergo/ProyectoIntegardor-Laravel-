@extends('layouts.default')
@section('title', 'Registrar Cancha')
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
        <form role="form" action="registrarCancha" id="registrar" method="post" enctype="multipart/form-data">
          <div>
            <label for="name">Nombre</label>
            <br/>
            <input type="text" class="form-control" id="name" name="name" value="<?= isset($_POST['name']) ? $_POST['name'] : ""; ?>" placeholder="Ingrese el nombre de la cancha">
            <br/>
          </div>

          <div>
            <label for="address">Dirección</label>
            <br/>
            <input type="text" class="form-control" id="address" name="address" value="<?= isset($_POST['address']) ? $_POST['address'] : ""; ?>" placeholder="Ingrese la dirección">
            <br/>
          </div>

          <div>
            <label for="sport">Deporte</label>
            <br/>
            <select id="sport" name="sport">
                <option value="Futbol">Fútbol</option>
                <option value="Tenis">Tenis</option>
                <option value="Hockey">Hockey</option>
              </select>
            <br/>
          </div>

          <div>
            <label for="hourly_price">Tarifa por hora</label>
            <br/>
            <input type="number" class="form-control" id="hourly_price" name="hourly_price" value="<?= isset($_POST['hourly_price']) ? $_POST['hourly_price'] : ""; ?>" placeholder="Ingrese la tarifa por hora">
            <br/>
          </div>
          {{ csrf_field() }}

          <input class="boton pull-right" type="submit" name="botonSubmit" value="Registrar"/>
        </form>
      </div>
    </div>
    {!! JsValidator::formRequest('App\Http\Requests\CanchasRegisterRequest', '#registrar'); !!}
@endsection