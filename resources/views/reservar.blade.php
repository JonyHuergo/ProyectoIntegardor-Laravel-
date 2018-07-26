@extends('layouts.default')
@section('title', 'Registrar Cancha')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/common.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/registroStyle.css') }}">
@endsection
@section('content')
<div class="banner">
      <br>

      <div class="area">
          @if($errors->has('date'))

            <div class="alert alert-danger">

              {{ $errors->first('date') }}

            </div>
          
        @endif
        <form role="form" action="{{URL::current()}}" id="registrar" method="post" enctype="multipart/form-data">
          <div>
            <label for="date">Fecha y Hora</label>
            <br/>
            <input type="datetime-local" class="" id="name" name="date" value="<?= isset($_POST['date']) ? $_POST['date'] : ""; ?>" placeholder="Ingrese la fecha de la reserva">
            <br/>
          </div>
          {{ csrf_field() }}

          <input class="boton pull-right" type="submit" name="botonSubmit" value="Reservar">
        </form>
      </div>
    </div>
@endsection