@extends('layouts.default')
@section('title', 'Bienvenido')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/common.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/perfil.css') }}">
@endsection
@section('content')
<div id="banner">
    <section class="user-data row">
        <div class="col-4"><img src="{{ URL::asset('imagenes/avatars/'.$usuario->avatar) }}"></div>
        <span class="col-4 text-center nombre"><h1>{{$usuario->username}}</h1></span>
    </section>
    <section class="user-data">
        <h3 class="text-center">Reservas</h3>
        @foreach ($reservas as $reserva)  
        @php
            $cancha_id = $reserva->field_id;
            $cancha = App\Field::find($cancha_id);
        @endphp
        <div class="card reserva"><h5>Cancha:{{$cancha->name}}</h5><h5>Fecha:{{$reserva->date}}</h5></div>
        <br>
        @endforeach
    </section>
</div> 
@endsection