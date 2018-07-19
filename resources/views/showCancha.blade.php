<!DOCTYPE html>
  <html>

    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagenes/logo_chico.png" />

        <link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=ABeeZee|Open+Sans|Righteous" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/common.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/canchasStyle.css') }}">
    </head>

    <body>

     <header>

        <div class="container">
            <div class="logo"><img src="{{ URL::asset('imagenes/logo2.png') }}"></div>
        </div>

        <nav class="sticky-top">
            <div>
                <ul class="menu text-center">
                    <li><a href="../paginaPrincipal">Principal</a></li>
                    <li class="active"><a href="../canchas">Canchas</a></li>
                    <li><a href="../preguntas">Preguntas</a></li>
                    <li><a href="../registro">Registrarse</a></li>
                    <li><a href="../login">Ingresar</a></li>
                </ul>
            </div>
        </nav>

     </header>

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

     <footer class="footer-general">

        <div>
            <ul>
                <li><a href="https://www.instagram.com/?hl=es-la" target="blank"><div class="footer-icons"><i class="fa fa-instagram fa-2x"></i></div></a></li>
                <li><a href="https://twitter.com/?lang=es/" target="blank"><div class="footer-icons"><i class="fa fa-twitter fa-2x"></i></div></a></li>
                <li><a href="https://es-la.facebook.com/" target="blank"><div class="footer-icons"><i class="fa fa-facebook fa-2x"></i></div></a></li>
            </ul>
        </div>

     </footer>

    </body>

  </html>






