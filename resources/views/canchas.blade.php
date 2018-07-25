@extends('layouts.default')
@section('title', 'Canchas')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/common.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/canchasStyle.css') }}">
@endsection
@section('content')
<div id="banner">
      <br>

      <div class="area">

        <h1 class="text-center">Canchas</h1>

        
        @if($canchas[0]===null)
            <p>No se encontraron canchas registradas</p>
        @else
            @foreach ($canchas as $cancha)
            <a href="canchas/{{$cancha->id}}">
            <div class="card cancha">
                <div class="card-body">
                    <h5 class="card-title"><b>{{ $cancha->name }}</b></h5>
                    <p class="card-text">Direccion: {{ $cancha->address }}</p>
                    <p class="card-text">Deporte: {{ $cancha->sport }}</p>
                    <p class="card-text">Precio por hora: ${{ $cancha->hourly_price }}</p>
                </div>   
            </div>
            </a>         
            @endforeach
        @endif
        <a href="registrarCancha"><button class="boton">Registrar Cancha</button></a>
        {{ $canchas->links() }}

      


    </div>
@endsection