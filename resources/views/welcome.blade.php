@extends('layouts.app')

  @section('content')
<div class="row">
    <div class="carousel slide col-md-12" data-ride="carousel" id="carrusel">
        <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#carrusel">
            </li>
            <li data-slide-to="1" data-target="#carrusel">
            </li>
            <li data-slide-to="2" data-target="#carrusel">
            </li>
        </ol>
        <div class="carousel-inner" id="slidescar" role="listbox">
            <div class="carousel-item slide_1 active">
                <div class="carousel-caption">
                    <h3 class="font3">
                        Asesoría Legal
                    </h3>
                    <ul class="p-0 list-unstyled font14">
                        <li>
                            Asesoria y acompañamiento juridico en todo el proceso de:
                        </li>
                        <li>
                            Compra Venta
                        </li>
                        <li>
                            Contratos
                        </li>
                        <li>
                            Visas para extranjeros
                        </li>
                        <li>
                            Inversion extranjera directa en propiedad
                        </li>
                    </ul>
                </div>
            </div>
            <div class="carousel-item slide_2 text-center">
                <div class="carousel-caption">
                    <h3 class="font3">
                        Asesoría financiera
                    </h3>
                    <ul class="p-0 list-unstyled font14">
                        <li>
                            Asesoría y acompañamiento financiero en negocios de propiedad raiz
                        </li>
                        <li>
                            Créditos
                        </li>
                        <li>
                            Leasing
                        </li>
                        <li>
                            Hipotecas
                        </li>
                    </ul>
                </div>
            </div>
            <div class="carousel-item slide_4">
                <div class="carousel-caption">
                    <h3 class="font3">
                        Hipotecas, créditos y Leassing en propiedades
                    </h3>
                </div>
            </div>
            <a class="carousel-control-prev" data-slide="prev" href="#carrusel" role="button">
                <span class="carousel-control-prev-icon">
                </span>
                <span class="sr-only">
                    Prevoious
                </span>
            </a>
            <a class="carousel-control-next" data-slide="next" href="#carrusel" role="button">
                <span class="carousel-control-next-icon">
                </span>
                <span class="sr-only">
                    Next
                </span>
            </a>
        </div>
    </div>
    <!-------------------inmuebles------>
    <h3 class="text-center bg-color-primary text-color-white py-2 font-weight-700 m-0 col-md-offset-3 col-md-12">
        Últimos Inmuebles
    </h3>
    <div class="container py-3">
        <div class="card sombra">
            <div class="row ">
                <div class="col-md-4">
                    <img class="w-100" src="http://www.fondox.net/descargar.php?id=1685&resolucion=1024x600">
                    </img>
                </div>
                <div class="col-md-8 px-3 ">
                    <div class="card-block px-3 ">
                        <h3 class="card-title ">
                            <strong>
                                Tipo de inmueble
                            </strong>
                        </h3>
                        <h5 class="col-md-offset-0">
                            <strong>
                                Tipo:
                            </strong>
                            Casa
                            <strong class="col-md-offset-7">
                                Area:
                            </strong>
                            1.280 m2
                        </h5>
                        <h3 class="col-md-offset-0">
                            <strong>
                                $ 30.000.000
                            </strong>
                        </h3>
                        <div>
                            <i class="fas fa-bath fa-2x col-md-2 icono">
                                1
                            </i>
                            <i class="fas fa-warehouse fa-2x col-md-2 icono">
                                2
                            </i>
                            <i class="fas fa-bed fa-2x col-md-2 icono">
                                3
                            </i>
                            <button class="col-md-3 btn btn-info ubicar_derecha" type="submit">
                                <i class="far fa-eye">
                                </i>
                                Detalle
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-3">
        <div class="card sombra">
            <div class="row ">
                <div class="col-md-4">
                    <img class="w-100" src="http://www.fondox.net/descargar.php?id=1685&resolucion=1024x600">
                    </img>
                </div>
                <div class="col-md-8 px-3">
                    <div class="card-block px-3">
                        <h3 class="card-title col-md-offset-0">
                            <strong>
                                Tipo de inmueble
                            </strong>
                        </h3>
                        <h5 class="col-md-offset-0">
                            <strong>
                                Tipo:
                            </strong>
                            Casa
                            <strong class="col-md-offset-7">
                                Area:
                            </strong>
                            1.280 m2
                        </h5>
                        <h3 class="col-md-offset-0">
                            <strong>
                                $ 30.000.000
                            </strong>
                        </h3>
                        <div>
                            <i class="fas fa-bath fa-2x col-md-2 icono">
                                1
                            </i>
                            <i class="fas fa-warehouse fa-2x col-md-2 icono">
                                2
                            </i>
                            <i class="fas fa-bed fa-2x col-md-2 icono">
                                3
                            </i>
                            <button class="col-md-3 btn btn-info ubicar_derecha" type="submit">
                                <i class="far fa-eye">
                                </i>
                                Detalle
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-3">
        <div class="card sombra">
            <div class="row ">
                <div class="col-md-4">
                    <img class="w-100" src="http://www.fondox.net/descargar.php?id=1685&resolucion=1024x600">
                    </img>
                </div>
                <div class="col-md-8 px-3">
                    <div class="card-block px-3">
                        <h3 class="card-title col-md-offset-0">
                            <strong>
                                Tipo de inmueble
                            </strong>
                        </h3>
                        <h5 class="col-md-offset-0">
                            <strong>
                                Tipo:
                            </strong>
                            Casa
                            <strong class="col-md-offset-7">
                                Area:
                            </strong>
                            1.280 m2
                        </h5>
                        <h3 class="col-md-offset-0">
                            <strong>
                                $ 30.000.000
                            </strong>
                        </h3>
                        <div>
                            <i class="fas fa-bath fa-2x col-md-2 icono">
                                1
                            </i>
                            <i class="fas fa-warehouse fa-2x col-md-2 icono">
                                2
                            </i>
                            <i class="fas fa-bed fa-2x col-md-2 icono">
                                3
                            </i>
                            <button class="col-md-3 btn btn-info ubicar_derecha" type="submit">
                                <i class="far fa-eye">
                                </i>
                                Detalle
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-------------------quienes somos----------->
    <div class="bg-img-content col-md-offset-0 col-md-12">
        <h3 class="text-center bg-color-primary text-color-white py-2 font-weight-700 m-0">
            ¿ Quíenes Somos ?
        </h3>
        <div class=" col-md-12 ">
            <p class="text-justify text-color-white font13 col-md-12 col-md-offset-0">
                Somos una empresa creada en Medellín en el año 2018, dedicada a ofrecer proyectos y negocios inmobiliarios, brindando asesoría jurídica y financiera a nuestros clientes en la ciudad de Medellín. Vemos con responsabilidad el reto de brindar un servicio ágil y seguro, desarrollando procesos digitales innovadores acordes con la evolución del mercado inmobiliario,es por ello que todo nuestro esfuerzo radica en la satisfacción de nuestros clientes.
            </p>
            <div class="col-md-12">
                <div class=" col-12 col-md-6 ">
                    <h2 class="text-color-white text col-md-offset-0">
                        Misión
                    </h2>
                    <hr class="bg-color-white">
                        <p class="text-color-white text-justify font13">
                            Nuestra Misión es ofrecer servicios inmobiliarios de excelente calidad por medio de un equipo de profesionales y con ayuda de la tecnología digital para brindar una asesoría más eficiente y poder generar confianza con nuestros clientes.
                        </p>
                    </hr>
                </div>
                <div class="col-12 col-md-6 col-offset-0">
                    <h2 class="text-color-white col-md-offset-0">
                        Visión
                    </h2>
                    <hr class="bg-color-white">
                        <p class="text-color-white text-justify font13">
                            En el 2022 la empresa A & C será reconocida en el ámbito local y nacional como una empresa innovadora en el sector inmobiliario, prestando servicios eficientes, seguros y confiables para nuestros clientes.
                        </p>
                    </hr>
                </div>
            </div>
        </div>
    </div>
    <!-------------------footer-------------->
    @include('footer')
</div>
@endsection
