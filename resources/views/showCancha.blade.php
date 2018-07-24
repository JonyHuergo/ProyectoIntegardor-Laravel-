@extends('layouts.default')
@section('title', 'Cancha')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/common.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/canchasStyle.css') }}">
@endsection
@section('content')
<main>
         
    <div id="banner">
        <div class="area">
        @if(isset($cancha))
        <h1 class="text-center">{{$cancha->name}}</h1>
        <h3>Deporte: {{$cancha->sport}}</h3>
        <h3>Direccion: {{$cancha->address}}</h3>
        <h3>Precio: ${{$cancha->hourly_price}}</h3>
        {{--Aqui deberian ir las imagenes de ser implementadas--}}
        <a href="#"><button>Reservar</button></a>
        @endif
        </div>
    </div>

 </main>
@endsection





