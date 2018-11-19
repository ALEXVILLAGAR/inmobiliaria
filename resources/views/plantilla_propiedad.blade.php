@extends('layouts.app')
        


      @section('content')
<div class="container ">
    <div class="row mi_container">
        <div class="col-md-12">
            <h1 class="col-md-offset-0 col-md-12">
                @yield('tipo') - ciudad
            </h1>
        </div>
        <div class="col-md-12">
            <br>
                <br>
                    <div class="col-md-8" id="hero-wrapper">
                        <div class="carousel-wrapper">
                            <div class="carousel slide carousel-fade" id="hero-carousel">
                                <ol class="carousel-indicators">
                                    <li class="active" data-slide-to="0" data-target="#hero-carousel">
                                    </li>
                                    <li data-slide-to="1" data-target="#hero-carousel">
                                    </li>
                                    <li data-slide-to="2" data-target="#hero-carousel">
                                    </li>
                                    <li data-slide-to="3" data-target="#hero-carousel">
                                    </li>
                                    <li data-slide-to="4" data-target="#hero-carousel">
                                    </li>
                                    <li data-slide-to="5" data-target="#hero-carousel">
                                    </li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src=" http://fillmurray.com/1200/500">
                                        </img>
                                    </div>
                                    <div class="item">
                                        <img src="http://www.placecage.com/1170/500">
                                        </img>
                                    </div>
                                    <div class="item">
                                        <img src=" http://fillmurray.com/1100/400">
                                        </img>
                                    </div>
                                    <div class="item">
                                        <img src="http://www.placecage.com/1170/600">
                                        </img>
                                    </div>
                                    <div class="item">
                                        <img src=" http://fillmurray.com/1190/650">
                                        </img>
                                    </div>
                                    <div class="item">
                                        <img src="http://www.placecage.com/1200/550">
                                        </img>
                                    </div>
                                </div>
                                <a class="left carousel-control" data-slide="prev" href="#hero-carousel">
                                    <i class="fa fa-chevron-left left">
                                    </i>
                                </a>
                                <a class="right carousel-control" data-slide="next" href="#hero-carousel">
                                    <i class="fa fa-chevron-right right">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ubicar_derecha">
                        <h2 class="col-md-offset-0">
                            Contacto
                        </h2>
                        <hr class="mi_hr"/>
                        <h6 class="col-md-offset-0">
                            Si estás interesado en este inmueble, comunicate con nosotros a través de los siguientes medios:
                        </h6>
                        <br>
                            <h5 class="col-md-offset-0">
                                Teléfonos
                            </h5>
                            <h6 class="col-md-offset-0">
                                311 3729785 - Cristian David Ramírez Jaramillo
                            </h6>
                            <br>
                                <h6 class="col-md-offset-0">
                                    3013973443 - Arturo Escobar Tobón
                                </h6>
                                <br>
                                    <h5 class="col-md-offset-0">
                                        Correo Electrónico
                                    </h5>
                                    <h6 class="col-md-offset-0">
                                        <strong>
                                            aycinmobiliaria2018@gmail.com
                                        </strong>
                                    </h6>
                                    <br>
                                        <h5 class="col-md-offset-0">
                                            Código del Inmueble
                                        </h5>
                                        <h6 class="col-md-offset-0">
                                            85d33c32-be9b-4a5e-9ac5-0ad3e9b54941
                                        </h6>
                                    </br>
                                </br>
                            </br>
                        </br>
                    </div>
                </br>
            </br>
        </div>
        <div class="col-md-12">
            <br>
                <br>
                    <h3 class="col-md-offset-0">
                        Detalles del inmueble
                    </h3>
                    <hr class="mi_hr "/>
                </br>
            </br>
        </div>
        <div class="col-md-4">
            <h4 class="col-md-offset-0">
                Ubicación
            </h4>
            <h6 class="col-md-offset-0 text-dark">
                Guarne
            </h6>
        </div>
        <div class="col-md-4">
            <h4 class="col-md-offset-0">
                Área
            </h4>
            <h6 class="col-md-offset-0 text-dark">
                1.280 m2
            </h6>
        </div>
    </div>
    <br>
        <br>
            <div class="row">
                @yield('caracteristicas')
            </div>
            <br>
                <br>
                    @include('footer')
                </br>
            </br>
        </br>
    </br>
</div>
@endsection
