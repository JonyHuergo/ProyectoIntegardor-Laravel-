@extends('layouts.default')
@section('title', 'Canchas')
@section('style')
<link rel="stylesheet" href="{{ URL::asset('css/registroStyle.css') }}">
@endsection
@section('content')
<div class="banner">
      <br>

      <div class="area">

            <button class="btn pull-right btn-primary"><a href="registrarCancha">Registrar Cancha</a></button>

            @foreach ($canchas as $cancha)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><b>{{ $cancha->name }}</b></h5>
                    <p class="card-text">Direccion: {{ $cancha->address }}</p>
                    <p class="card-text">Deporte: {{ $cancha->sport }}</p>
                    <p class="card-text">Precio por hora: {{ $cancha->hourly_price }}</p>
                </div>            
            @endforeach
            
            {{ $canchas->links() }}

      </div>


    </div>
@endsection