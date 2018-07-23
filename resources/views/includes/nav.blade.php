<!-- Navigation -->
<nav class="sticky-top">
    <ul class="menu text-center">
        <li class="{{ Request::is( '/') ? 'active' : '' }}"><a href="/">Principal</a></li><li class="{{ Request::is( 'canchas') ? 'active' : '' }}"><a href="canchas">Canchas</a></li><li class="{{ Request::is( 'preguntas') ? 'active' : '' }}"><a href="preguntas">Preguntas</a></li>
    </ul>
</nav>
<!-- Navigation END -->