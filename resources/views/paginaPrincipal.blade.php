@extends('layouts.default')
@section('title', 'Alquiler de Canchas')
@section('style')
  <link rel="stylesheet" href="{{ URL::asset('css/paginaPrincipalStyle.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/paginaPrincipalStyleMobile.css') }}">
@endsection

@section('content')
<section>
  <div id="slider-home" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#slider-home" data-slide-to="0" class="active"></li>
    <li data-target="#slider-home" data-slide-to="1"></li>
    <li data-target="#slider-home" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ URL::asset('imagenes/banner.jpg') }}?auto=yes&bg=777&fg=555&text=First slide" alt="Reserva tu cancha">
      <div class="container">
        <div class="titulo text-center"><h1>Canchas Ya!</h1></div>
        <div class="reservar"><h2> ¡Reservá ahora!</h2>
        </div>
        <span class="texto">Que estas esperando, consegui tu cancha ya!</span>
        <a href="#"><div class="boton"><span>Reservar ahora</span></div></a>
      </div>
    </div><!-- carousel-item #1-->

    <div class="carousel-item">
      <img class="d-block w-100" src="http://via.placeholder.com/1920x1080?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
      <div class="container">
        <div class="titulo text-center"><h1>Canchas Ya!</h1></div>
        <div class="reservar"><h2> ¡Reservá ahora!</h2>
        </div>
        <span class="texto">Que estas esperando, consegui tu cancha ya!</span>
        <a href="#"><div class="boton"><span>Reservar ahora</span></div></a>
      </div>
    </div><!-- carousel-item #2-->

    <div class="carousel-item">
      <img class="d-block w-100" src="http://via.placeholder.com/1920x1080?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
      <div class="container">
        <div class="titulo text-center"><h1>Canchas Ya!</h1></div>
        <div class="reservar"><h2> ¡Reservá ahora!</h2>
        </div>
        <span class="texto">Que estas esperando, consegui tu cancha ya!</span>
        <a href="#"><div class="boton"><span>Reservar ahora</span></div></a>
      </div>
    </div><!-- carousel-item #3-->

  </div><!-- carousel-inner-->

    <a class="carousel-control-prev" href="#slider-home" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#slider-home" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
    </a>

  </div><!-- slider-home-->
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
