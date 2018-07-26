@extends('layouts.default')
@section('title', 'Cancha')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/common.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/canchasStyle.css') }}">
@endsection
@section('content')        
    <div id="banner">
        <div class="area">
        @if(Auth::check()&&Auth::user()->is_admin == true)
        <a href="borrarCancha/{{$cancha->id}}"><button class="btn btn-danger pull-right" id="admin-buttons">Borrar</button></a><a href="editarCancha/{{$cancha->id}}"><button class="btn btn-primary pull-right" id="admin-buttons">Editar</button></a>
        @endif
        <br>
        @if(isset($cancha))
        <h1 class="text-center">{{$cancha->name}}</h1>
        <h3>Deporte: {{$cancha->sport}}</h3>
        <h3>Direccion: {{$cancha->address}}</h3>
        <h3>Precio: ${{$cancha->hourly_price}}</h3>
        {{--Aqui deberian ir las imagenes de ser implementadas--}}
        <a href="#"><button class="btn btn-success">Reservar</button></a>
        @endif
        </div>
    </div>
@endsection





