<!-- Header -->
<div class="container row">

  <div class="logo col-md-4" id="logo">
    <a href="/"><img src="{{ URL::asset('imagenes/logo2.png') }}"></a>
  </div>

  @if(!Auth::check())
  <div class="card text-center col-md-5 offset-md-3 user-card">
      <div class="card-header">
        Todavia no ingresaste
      </div>
      <div class="card-group">
        <div class="card">
            <p class="card-text">No estoy registrado</p>
            <a href="registro" class="btn registro-ingreso">Registrarse</a>
        </div>
        <div class="card">
            <p class="card-text">Ya tengo una cuenta</p>
            <a href="login" class="btn registro-ingreso">Ingresar</a>
        </div>
      </div>
  </div>
  @else
  <div class="card text-center col-md-5 offset-md-3 user-card">
    <div class="card-header">
      Usuario
    </div>
  </div>
  @endif
</div>
<!-- Header END -->
