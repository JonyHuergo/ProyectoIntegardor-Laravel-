@extends('layouts.default')
@section('title', 'Preguntas Frecuentes')
@section('style')
<link rel="stylesheet" href="{{ URL::asset('css/preguntasStyle.css') }}">
@endsection
@section('content')
<section>
        <div class="cuerpo row">

          <div class="preguntas col-sm-6">
            <span><h1>Preguntas frecuentes </h1></span>
            <br>
            <ol type="I">
              <li><strong>¿Quiénes somos?</strong>
                <br>Somos un equipo entusiasta con ganas de poner al alcance de todos la posibilidad de alquilar desde cualquier lugar la cancha del deporte que desee. Tenés las ganas, no las desaproveches, reservá ya y ponete a jugar!</li>
              <li><strong>Quiero hacer una reserva, ¿Qué medios de pago aceptan? </strong>
                <br>Aceptamos Mercado Pago y todas las formas de pago que ellos aceptan; podés pagar con tarjeta de crédito, RapiPago y Pago Fácil a través de MercadoPago. Conocé las promociones vigentes ingresando en: <a href="http://www.mercadopago.com.ar/cuotas" target="_blank">www.mercadopago.com.ar/cuotas</a></li>
                <li><strong>¿Puedo realizar cambios en mi reserva? </strong>
                  <br>Si, podés cambiar tu reserva hasta 1 día antes de la fecha de la misma.</li>
              <li><strong>¿Se puede cancelar una vez reservado? </strong>
                <br>Podrás cancelar tu reserva hasta 1 día antes de la fecha de la misma. Si reservaste de forma errada contactanos inmediatamente para ver si podemos realizar la cancelación dentro de la media hora siguiente.</li>
              <li><strong>¿Qué pasa si no puedo asistir a mi reserva? </strong>
                <br>Si no podés asistir lamentablemente abonarás el 100% de la misma por lo que asegurate de poder ir.</li>
              <li><strong>¿Puedo hacer más de una reserva? </strong>
                <br>Si, podés hacer la cantidad de reservás que quieras, considera que la misma se abona en su totalidad al momento de efectuarla.</li>
                <li><strong>¿Existe algún tipo de abono mensual con valores diferenciados para clientes habitués? </strong>
                  <br>¡Si, al contratar 10 reservas en un mismo mes calendario, la 11 va por nuestra cuenta!</li>
              <li><strong>Tengo una cancha/complejo de canchas, cómo las incluyo? </strong>
                <br>Mandanos un mail a <a href="mailto:contacto@gmail.com?subject="> contacto@gmail.com</a>  para poder iniciar el registro de la misma. Es muy fácil!</li>
            </ol>
          </div>

          <div class="col-sm-3 dibujos">
            <img src="{{ URL::asset('imagenes/futbol_dibujo.jpg') }}">
            <img src="{{ URL::asset('imagenes/tenis_dibujo.jpg') }}">
            <img src="{{ URL::asset('imagenes/futbol_dibujo.jpg') }}">
            <img src="{{ URL::asset('imagenes/tenis_dibujo.jpg') }}">
            <img src="{{ URL::asset('imagenes/futbol_dibujo.jpg') }}">
            <img src="{{ URL::asset('imagenes/tenis_dibujo.jpg') }}">
          </div>


        </div>
      </section>
@endsection
