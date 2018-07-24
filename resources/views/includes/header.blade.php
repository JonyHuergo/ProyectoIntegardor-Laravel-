<!-- Header -->

<div class="contenedor row">

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
            <a href="{{url('registro')}}" class="btn" id="registro">Registrarse</a>
        </div>
        <div class="card">
            <p class="card-text">Ya tengo una cuenta</p>
            <a href="{{url('login')}}" class="btn" id="ingreso">Ingresar</a>
        </div>
      </div>
  </div>
  @else
  <div class="card text-center col-md-5 offset-md-3 user-card">
    <div class="card-header">
      {{Auth::user()->username}}
    </div>
    <div class="card-group">
      <div class="card">
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
      <div class="card">
        <img src="imagenes/avatars/{{Auth::user()->avatar}}">
      </div>
    </div>
    
  </div>
  @endif
</div>
<!-- Header END -->
