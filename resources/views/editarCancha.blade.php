@extends('layouts.default')
@section('title', 'Editar Cancha')
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
            <input type="text" class="form-control" id="name" name="name" value="<?= isset($_POST['name']) ? $_POST['name'] : $cancha->name; ?>" placeholder="Ingrese el nombre de la cancha">
            <br/>
          </div>

          <div>
            <label for="address">Dirección</label>
            <br/>
            <input type="text" class="form-control" id="address" name="address" value="<?= isset($_POST['address']) ? $_POST['address'] : $cancha->address; ?>" placeholder="Ingrese la dirección">
            <br/>
          </div>

          <div>
            <label for="sport">Deporte</label>
            <br/>
            <select id="sport" name="sport">
                <option value="Futbol" @if($cancha->sport === "Futbol") selected="selected"@endif>Fútbol</option>
                <option value="Tenis" @if($cancha->sport === "Tenis") selected="selected"@endif>Tenis</option>
                <option value="Hockey" @if($cancha->sport === "Hockey") selected="selected"@endif>Hockey</option>
              </select>
            <br/>
          </div>

          <div>
            <label for="hourly_price">Tarifa por hora</label>
            <br/>
            <input type="number" class="form-control" id="hourly_price" name="hourly_price" value="<?= isset($_POST['hourly_price']) ? $_POST['hourly_price'] : $cancha->hourly_price; ?>" placeholder="Ingrese la tarifa por hora">
            <br/>
          </div>
          {{ csrf_field() }}

          <input class="boton pull-right" type="submit" name="botonSubmit" value="Registrar"/>
        </form>
      </div>


    </div>
@endsection