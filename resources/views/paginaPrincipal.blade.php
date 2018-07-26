@extends('layouts.default')
@section('title', 'Alquiler de Canchas')
@section('style')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/common.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/paginaPrincipalStyle.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/paginaPrincipalStyleMobile.css') }}">
@endsection

@section('content')

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
      <img class="d-block w-100" src="{{ URL::asset('imagenes/canchas-1.jpg') }}?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
      <div class="container">
        <div class="titulo text-center"><h1>Canchas Ya!</h1></div>
        <div class="reservar"><h2> ¡Reservá ahora!</h2>
        </div>
        <span class="texto">Que estas esperando, consegui tu cancha ya!</span>
        <a href="#"><div class="boton"><span>Reservar ahora</span></div></a>
      </div>
    </div><!-- carousel-item #2-->

    <div class="carousel-item">
      <img class="d-block w-100" src="{{ URL::asset('imagenes/canchas-2.jpg') }}?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
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


      <div class="container">
        <div class="tipos-de-canchas">
          <div class="card categorias">
            <img class="card-img-top" src="{{ URL::asset('imagenes/hockey.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><b>Canchas de Hockey</b></h5>
              <p class="card-text">Hockey sobre sobre cesped, hockey sobre patines y hockey sala, todo en nuestra pagina. ¿Que esperas?, reserva tu cancha ya!</p>
              <br>
              <div class="card-footer">
                  <a href="#" class="btn">Ver canchas</a>
              </div>
            </div>
          </div>
          <div class="card categorias">
            <img class="card-img-top" src="{{ URL::asset('imagenes/futbol.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><b>Canchas de Fútbol</b></h5>
              <p class="card-text">El deporte rey tambien esta presente en Canchas Ya<sup>™</sup>. Fútbol 5, fútbol 8, fútbol 11, sobre pasto, cesped sintetico, cemento, todo esta acá. Reserva ya! </p>
              <br>
              <div class="card-footer">
                  <a href="#" class="btn">Ver canchas</a>
              </div>
            </div>
          </div>
          <div class="card categorias">
            <img class="card-img-top" src="{{ URL::asset('imagenes/tenis.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><b>Canchas de Tenis</b></h5>
              <p class="card-text">El gran Guillermo Vilas una vez dijo "el pasto es para las vacas" y en Canchas Ya<sup>™</sup> le hicimos caso, asi que en nuestro sitio podras encontrar mucho polvo de ladrillo y cemento, pero nada de pasto</p>
              <div class="card-footer">
                  <a href="#" class="btn">Ver canchas</a>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
