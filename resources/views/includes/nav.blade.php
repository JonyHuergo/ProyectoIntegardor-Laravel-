<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-light navbar-light">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggled" aria-controls="navbarToggled" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse " id="navbarToggled">
@if(Auth::check())
@php ($avatar = Auth::user()->avatar)
<ul class=" navbar-nav navbar-left">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ URL::asset('imagenes/avatars/'.$avatar) }}" width=36px height=36px class="border border-success rounded-circle user-img">
                    {{Auth::user()->username}}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                        <img src="{{ URL::asset('imagenes/avatars/'.$avatar) }}" width=90px height=90px class="border border-success rounded-circle">
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong>{{Auth::user()->username}}</strong></p>
                                        <p class="text-left small">{{Auth::user()->email}}</p>
                                        <p class="text-left">
                                            <a href="{{url('perfil')}}" class="btn btn-success btn-block btn-sm">Visitar Perfil</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" class="btn btn-danger btn-block">{{ __('Cerrar Sesion') }}
                                            </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            @endif
    <ul class="text-center navbar-nav  ml-auto">
        <li class="{{ Request::is( '/') ? 'active' : '' }} nav-item"><a href="{{url('/')}}" class="nav-link">Principal</a></li>
        <li class="{{ Request::is( 'canchas') ? 'active' : '' }} nav-item"><a href="{{url('canchas')}}" class="nav-link">Canchas</a></li>
        <li class="{{ Request::is( 'preguntas') ? 'active' : '' }} nav-item"><a href="{{url('preguntas')}}" class="nav-link">Preguntas</a></li>
        @if(!Auth::check())
        <li class="{{ Request::is( 'registro') ? 'active' : '' }} nav-item"><a href="{{url('registro')}}" class="nav-link">Registrarse</a></li>
        <li class="{{ Request::is( 'login') ? 'active' : '' }} nav-item"><a href="{{url('login')}}" class="nav-link">Ingresar</a></li>
        @endif
    </ul>
    
</div>
</nav>
<!-- Navigation END -->