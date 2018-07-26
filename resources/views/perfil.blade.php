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
    @if(isset($usuario))
    <h1 class="text-center">{{$usuario->username}}</h1>
    <h1 class="text-center">{{$usuario->first_name}} {{$usuario->last_name}}</h1>
    <h1 class="text-center">{{$usuario->email}}</h1>
    <a href="editarUsuario/{{$usuario->id}}"><button class="btn btn-primary" id="admin-buttons">Editar Perfil</button></a>


    @endif
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
