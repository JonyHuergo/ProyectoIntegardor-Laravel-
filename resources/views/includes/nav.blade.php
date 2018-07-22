<!-- Navigation -->
<nav class="sticky-top">
    <ul class="menu text-center">
    <li class="{{ Request::is( '/') ? 'active' : '' }}"><a href="/">Principal</a></li>
    <li class="{{ Request::is( 'canchas') ? 'active' : '' }}"><a href="canchas">Canchas</a></li>
    <li class="{{ Request::is( 'preguntas') ? 'active' : '' }}"><a href="preguntas">Preguntas</a></li>
    <li class="{{ Request::is( 'registro') ? 'active' : '' }}"><a href="registro">Registrarse</a></li>
    <li class="{{ Request::is( 'login') ? 'active' : '' }}"><a href="login">Ingresar</a></li>
    </ul>
</nav>
<!-- Navigation END -->