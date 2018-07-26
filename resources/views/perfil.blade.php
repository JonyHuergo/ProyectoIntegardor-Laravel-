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
        <span class="col-4 text-center"><h1>{{$usuario->username}}</h1></span>
    </section>
    @if(isset($usuario))
    <h1 class="text-center">{{$usuario->username}}</h1>
    <h1 class="text-center">{{$usuario->first_name}} {{$usuario->last_name}}</h1>
    <h1 class="text-center">{{$usuario->email}}</h1>
    <a href="editarUsuario/{{$usuario->id}}"><button class="btn btn-primary" id="admin-buttons">Editar</button></a>


    @endif
</div>
@endsection
