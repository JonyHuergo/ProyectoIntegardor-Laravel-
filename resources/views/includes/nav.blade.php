<!-- Navigation -->
<nav class="sticky-top">
    <ul class="menu text-center">
        <li class="{{ Request::is( '/') ? 'active' : '' }}"><a href="{{url('/')}}">Principal</a></li><li class="{{ Request::is( 'canchas') ? 'active' : '' }}"><a href="{{url('canchas')}}">Canchas</a></li><li class="{{ Request::is( 'preguntas') ? 'active' : '' }}"><a href="{{url('preguntas')}}">Preguntas</a></li>
    </ul>
</nav>
<!-- Navigation END -->