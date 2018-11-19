<nav class="navbar navbar-expand-lg navbar-light bg-light " id="">
    <h1 class="m-0 logo-header">
        <a href="{{ url('/') }}">
            <img alt="" class="logo" src="{{ asset('img/logo.png') }}"/>
        </a>
    </h1>
    <button class="btn d-lg-none d-xl-blockg" href="#menu-toggle" id="menu-toggle">
        <div id="nav-icon4">
            <span>
            </span>
            <span>
            </span>
            <span>
            </span>
        </div>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav " id="menu">
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/inmuebles') }}">
                    <i class="fas fa-search mr-1">
                    </i>
                    Inmuebles
                </a>
            </li>
            @guest
            <li class="nav-item">
                <a class="nav-link " href="{{ route('login') }}">
                    <i class="fas fa-sign-in-alt mr-1">
                    </i>
                    Ingresar
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('register') }}">
                    <i class="fas fa-user-plus mr-1">
                    </i>
                    Registrarse
                </a>
            </li>
            @else
            <li class="nav-item dropdown">
                <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdownMenuLink" role="button">
                    <i class="fas fa-uldate mr-1">
                    </i>
                    Subir inmueble
                </a>
                <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu">
                    <a class="dropdown-item" href="{{ url('/apartamento') }}">
                        Apartamento
                    </a>
                    <a class="dropdown-item" href="{{ url('/bodega') }}">
                        Bodega
                    </a>
                    <a class="dropdown-item" href="{{ url('/casa') }}">
                        Casa
                    </a>
                    <a class="dropdown-item" href="{{ url('/finca') }}">
                        Finca
                    </a>
                    <a class="dropdown-item" href="{{ url('/lote') }}">
                        Lote
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" v-pre="">
                    {{ Auth::user()->name() }}
                    <span class="caret">
                    </span>
                </a>
                <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu">
                    <p class="dropdown-item">
                        {{ Auth::user()->email }}
                    </p>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
            @endguest
            <li class="nav-item dropdown">
                <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdownMenuLink" role="button">
                    <i class="fas fa-globe mr-1">
                    </i>
                    Lenguaje
                </a>
                <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu">
                    <a class="dropdown-item" href="#">
                        Español
                    </a>
                    <a class="dropdown-item" href="#">
                        Ingles
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>