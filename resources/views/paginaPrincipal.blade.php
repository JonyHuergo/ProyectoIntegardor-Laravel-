@extends('layouts.default')
@section('title', 'Alquiler de Canchas')
@section('style')
  <link rel="stylesheet" href="{{ URL::asset('css/paginaPrincipalStyle.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/paginaPrincipalStyleMobile.css') }}">
@endsection

@section('content')
<section>
      <div class="banner">
        <img src="{{ URL::asset('imagenes/banner.jpg') }}">
          <div class="container">
            <div class="titulo text-center"><h1>Canchas Ya!</h1></div>
            <div class="reservar"><h2> ¡Reservá ahora!</h2>
            </div>
            <span class="texto">Que estas esperando, consegui tu cancha ya!</span>
            <a href="#"><div class="boton"><span>Reservar ahora</span></div></a>
          </div>
      </div>
    </section>
      <div class="container">

        <div class="tipos-de-canchas">
          <div class="card">
            <img class="card-img-top" src="{{ URL::asset('imagenes/hockey.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><b>Canchas de Hockey</b></h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
              <a href="#" class="btn">Ver canchas</a>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="{{ URL::asset('imagenes/futbol.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><b>Canchas de Fútbol</b></h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
              <a href="#" class="btn">Ver canchas</a>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="{{ URL::asset('imagenes/tenis.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><b>Canchas de Tenis</b></h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
              <a href="#" class="btn">Ver canchas</a>
            </div>
          </div>
        </div>
      </div>
@endsection



