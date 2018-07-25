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
      <div>
        <h4>Filtros</h4>

        <form method="GET">
          <label for="name">Buscar por nombre</label>
          <input type="text" id="name" name="sport">



          <label for="sport">Deporte</label>
          <select id="sport" name="sport">
            <option value="Futbol">Futbol</option>
            <option value="Tenis">Tenis</option>
            <option value="Hockey">Hockey</option>
          </select>

          <br>

          <label>Precio</label>
          <br>
          <label for="minimo">Minimo:</label>
          <input type="number" name="minimo" min="0" step="10">
          <label for="maximo">Máximo:</label>
          <input type="number" name="maximo" min="0" step="10">

          <input type="submit" value="Buscar">
        </form>
      </div>
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
