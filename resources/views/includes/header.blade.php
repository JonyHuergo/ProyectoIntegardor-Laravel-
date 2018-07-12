<!-- Header -->
<div class="container">
        <div class="logo"><img src="{{ URL::asset('imagenes/logo2.png') }}"></div>
      </div>
        <nav class="sticky-top">
          <div>
              <ul class="menu text-center">
                <li class="{{ Request::is( 'paginaPrincipal') ? 'active' : '' }}"><a href="paginaPrincipal">Principal</a></li>
                <li class="{{ Request::is( 'preguntas') ? 'active' : '' }}"><a href="preguntas">Preguntas</a></li>
                <li class="{{ Request::is( 'registro') ? 'active' : '' }}"><a href="registro">Registrarse</a></li>
                <li class="{{ Request::is( 'ingresar') ? 'active' : '' }}"><a href="ingresar">Ingresar</a></li>
              </ul>
          </div>
        </nav>
<!-- Header END -->