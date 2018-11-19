@extends('layouts.app')

@push('styles')
<link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" rel="stylesheet">
    <link href="{{asset('css/estilo_admin.css')}}" rel="stylesheet">
        <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" rel="stylesheet">
            @endpush


 @section('content')
            <div class="container px-2 pt-2 full-height ">
                <h2 class="my-3 text-color-1 px-4">
                    <div class="d-flex justify-content-between w-100 px-3 py-1 mi_container">
                        <div class="col-md-offset-0 ">
                            Casa - Caseres
                        </div>
                        <div>
                            <div>
                                <div aria-hidden="true" class="modal fade" id="property-manager-modal" role="dialog" tabindex="-1">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-color-primary-2 text-color-white">
                                                <h5>
                                                    Eliminar Inmueble
                                                </h5>
                                                <button aria-label="Close" class="text-color-white close" data-dismiss="modal" type="button">
                                                    <span aria-hidden="true">
                                                        ×
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3" role="alert">
                                                    <p class="font1 text-justify">
                                                        Esta acción es
                                                        <span class="alert-link">
                                                            Irreversible
                                                        </span>
                                                        . Ingresa el codigo del inmueble
                                                        <span class="alert-link">
                                                            (2344323)
                                                        </span>
                                                        para confirmar que quieres eliminar el inmueble de manera permanente.
                                                    </p>
                                                </div>
                                                <input class="form-control" type="text">
                                                </input>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn bg-color-primary-0 text-color-white" data-dismiss="modal" type="button">
                                                    Cancelar
                                                </button>
                                                <button class="btn btn-danger cursor-notallowed" disabled="disabled" type="button">
                                                    Eliminar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn btn-outline-info" type="button">
                                        Deshabilitar
                                    </button>
                                    <button class="btn btn-outline-danger" data-target="#property-manager-modal" data-toggle="modal" type="button">
                                        Eliminar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </h2>
                <div>
                    <div aria-hidden="true" aria-labelledby="delete-image-modal" class="modal fade" id="image-modal" role="dialog" tabindex="-1">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form>
                                    <div class="modal-header bg-color-primary-2 text-color-white">
                                        <h5 class="modal-title" id="delete-image-modal">
                                            Eliminar Imagen
                                        </h5>
                                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                            <span aria-hidden="true">
                                                ×
                                            </span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-color-4 text-center">
                                            ¿Estás seguro que deseas eliminar la imagen?
                                        </p>
                                        <img class="d-block m-auto w-25" src="slide_1.jpg">
                                        </img>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="submit">
                                            Si
                                        </button>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            No
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a aria-controls="nav-images" aria-selected="true" class="nav-item nav-link active show" data-toggle="tab" href="#nav-images" id="nav-images-tab" role="tab">
                                Imagenes
                            </a>
                            <a aria-controls="nav-enrollment" aria-selected="false" class="nav-item nav-link" data-toggle="tab" href="#nav-enrollment" id="nav-enrollment-tab" role="tab">
                                Predial
                            </a>
                            <a aria-controls="nav-tradition" aria-selected="false" class="nav-item nav-link" data-toggle="tab" href="#nav-tradition" id="nav-tradition-tab" role="tab">
                                Tradicion y Libertad
                            </a>
                        </div>
                    </nav>
                    <div class="row mx-0 my-2">
                        <div class="col-sm-12 col-lg-8">
                            <div class="d-flex justify-content-between px-1 py-1">
                                <button class="btn btn-danger btn-sm text-color-white" data-target="#image-modal" data-toggle="modal">
                                    <i class="fas fa-trash-alt">
                                    </i>
                                    Eliminar imagen
                                </button>
                            </div>
                            <div class="tab-content" id="slideshow">
                                <div aria-labelledby="nav-images-tab" class="tab-pane fade show active" id="nav-images" role="tabpanel">
                                    <div class="slides_image slides" style="background-image: url('slide_1.jpg'); display: block;">
                                        <div class="d-flex justify-content-center">
                                            <div class="text-color-white numbertext mt-3">
                                                <i class="fas fa-camera">
                                                </i>
                                                1 / 3
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slides_image slides" style="background-image: url(slide_2.jpg); display: none;">
                                        <div class="d-flex justify-content-center">
                                            <div class="text-color-white numbertext mt-3">
                                                <i class="fas fa-camera">
                                                </i>
                                                2 / 3
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slides_image slides" style="background-image: url(slide_4.jpg); display: none;">
                                        <div class="d-flex justify-content-center">
                                            <div class="text-color-white numbertext mt-3">
                                                <i class="fas fa-camera">
                                                </i>
                                                3 / 6
                                            </div>
                                        </div>
                                    </div>
                                    <a class="prev">
                                        ❮
                                    </a>
                                    <a class="next">
                                        ❯
                                    </a>
                                    <div class="container mt-2">
                                        <div class="d-flex flex-wrap justify-content-center">
                                            <img class="thumbnail_images thumbnail cursor img_slide active" src="slide_1.jpg">
                                                <img class="thumbnail_images thumbnail cursor img_slide" src="slide_2.jpg">
                                                    <img class="thumbnail_images thumbnail cursor img_slide" src="slide_4.jpg">
                                                    </img>
                                                </img>
                                            </img>
                                        </div>
                                    </div>
                                </div>
                                <div aria-labelledby="nav-enrollment-tab" class="tab-pane fade" id="nav-enrollment" role="tabpanel">
                                    <div class="slides_enrollment slides d-block" style="background-image: url(slide_2.jpg);">
                                        <div class="d-flex justify-content-center">
                                            <div class="text-color-white numbertext mt-3">
                                                <i class="fas fa-camera">
                                                </i>
                                                1 / 1
                                            </div>
                                        </div>
                                    </div>
                                    <a class="prev">
                                        ❮
                                    </a>
                                    <a class="next">
                                        ❯
                                    </a>
                                    <div class="container mt-2">
                                        <div class="d-flex flex-wrap justify-content-center">
                                            <img class="thumbnail_enrollment thumbnail cursor img_slide" src="slide_1.jpg">
                                            </img>
                                        </div>
                                    </div>
                                </div>
                                <div aria-labelledby="nav-tradition-tab" class="tab-pane fade" id="nav-tradition" role="tabpanel">
                                    <div class="slides_tradition slides d-block" style="background-image: url(slide_4.jpg);">
                                        <div class="d-flex justify-content-center">
                                            <div class="text-color-white numbertext mt-3">
                                                <i class="fas fa-camera">
                                                </i>
                                                1 / 1
                                            </div>
                                        </div>
                                    </div>
                                    <a class="prev">
                                        ❮
                                    </a>
                                    <a class="next">
                                        ❯
                                    </a>
                                    <div class="container mt-2">
                                        <div class="d-flex flex-wrap justify-content-center">
                                            <img class="thumbnail_tradition thumbnail cursor img_slide" src="slide_1.jpg">
                                            </img>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4 mt-sm-2">
                            <h3 class="text-color-1">
                                <i class="fas fa-map-marker-alt">
                                </i>
                                Ubicación del Inmueble
                            </h3>
                            <hr class="mt-1 bg-color-primary">
                                <h5 class="text-color-4">
                                    Ciudad
                                </h5>
                                <p class="text-color-4">
                                    Caceres
                                </p>
                                <h5 class="text-color-4">
                                    Dirección
                                </h5>
                                <p class="text-color-4">
                                    62597 Fabiola Way Apt. 213
                                </p>
                                <h5 class="text-color-4">
                                    Barrio
                                </h5>
                                <p class="text-color-4">
                                    Kenedy
                                </p>
                                <h3 class="text-color-1">
                                    <i class="fas fa-phone">
                                    </i>
                                    Contacto del Vendedor
                                </h3>
                                <hr class="mt-1 bg-color-primary">
                                    <h5 class="text-color-4">
                                        Telefono
                                    </h5>
                                    <p class="text-color-4">
                                        3127895678
                                    </p>
                                    <h5 class="text-color-4">
                                        Correo Electronico
                                    </h5>
                                    <p class="text-color-4">
                                        ayc@gmail.com
                                    </p>
                                    <h5 class="text-color-4">
                                        Codigo del Inmueble
                                    </h5>
                                    <p class="text-color-4">
                                        <strong class="font08">
                                            92172683-ee38-4457-8a15-cb4c3989ce90
                                        </strong>
                                    </p>
                                    <h5 class="text-color-4">
                                        Precio
                                    </h5>
                                    <p class="text-color-4">
                                        <strong class="bg-color-primary p-2 font11 rounded text-color-white">
                                            $ 65.000.000
                                        </strong>
                                    </p>
                                </hr>
                            </hr>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="mt-4 text-color-1">
                                Detalles del Inmueble
                            </h3>
                            <hr class="mt-1 bg-color-primary">
                            </hr>
                        </div>
                    </div>
                </div>
                <div class="container pb-5 mb-4">
                    <div class="row mt-2">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <h4 class="text-color-1">
                                        Ubicación
                                    </h4>
                                    <p>
                                        Caceres
                                    </p>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <h4 class="text-color-1">
                                        Area
                                    </h4>
                                    <span>
                                        717 m
                                        <sup>
                                            2
                                        </sup>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <h3 class="mt-4 text-color-1">
                                Caracteristicas del Inmueble
                            </h3>
                            <hr class="mt-1 bg-color-primary">
                            </hr>
                        </div>
                        <!--SI ES CASA O FINCA-->
                        <div class="col-md-4 col-sm-12">
                            <h4 class="text-color-1">
                                Baños
                            </h4>
                            <span class="badge bg-color-primary mr-1">
                                <i class="fas fa-bath font15 text-color-white">
                                </i>
                                <span class="text-color-white font13 ml-1 font-weight-700">
                                    1
                                </span>
                            </span>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <h4 class="text-color-1">
                                Garajes
                            </h4>
                            <span class="badge bg-color-primary mr-1">
                                <i class="fas fa-car font15 text-color-white">
                                </i>
                                <span class="text-color-white font13 ml-1 font-weight-700">
                                    1
                                </span>
                            </span>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <h4 class="text-color-1">
                                Habitaciones
                            </h4>
                            <span class="badge bg-color-primary mr-1">
                                <i class="fas fa-bed font15 text-color-white">
                                </i>
                                <span class="text-color-white font13 ml-1 font-weight-700">
                                    1
                                </span>
                            </span>
                        </div>
                        <!--SI ES APARTAMENTO + LO DE ARRIBA-->
                        <div class="col-md-4 col-sm-12 mt-3">
                            <h4 class="text-color-1">
                                Piscina
                            </h4>
                            <span class="badge bg-color-primary mr-1">
                                <i class="fas fa-check font15 text-color-white">
                                </i>
                                <span class="text-color-white font13 ml-1 font-weight-700">
                                    Si
                                </span>
                            </span>
                        </div>
                        <div class="col-md-4 col-sm-12 mt-3">
                            <h4 class="text-color-1">
                                Ascensor
                            </h4>
                            <span class="badge bg-color-primary mr-1">
                                <i class="fas fa-check font15 text-color-white">
                                </i>
                                <span class="text-color-white font13 ml-1 font-weight-700">
                                    Si
                                </span>
                            </span>
                        </div>
                        <div class="col-md-4 col-sm-12 mt-3">
                            <h4 class="text-color-1">
                                Parqueadero
                            </h4>
                            <span class="badge bg-color-primary mr-1">
                                <i class="fas fa-check font15 text-color-white">
                                </i>
                                <span class="text-color-white font13 ml-1 font-weight-700">
                                    Si
                                </span>
                            </span>
                        </div>
                        <div class="col-md-4 col-sm-12 mt-3">
                            <h4 class="text-color-1">
                                Cuarto util
                            </h4>
                            <span class="badge bg-color-primary mr-1">
                                <i class="fas fa-check font15 text-color-white">
                                </i>
                                <span class="text-color-white font13 ml-1 font-weight-700">
                                    Si
                                </span>
                            </span>
                        </div>
                        <div class="col-md-4 col-sm-12 mt-3">
                            <h4 class="text-color-1">
                                Precio de la administración
                            </h4>
                            <span class="badge bg-color-primary mr-1">
                                <i class="fas fa-check font15 text-color-white">
                                </i>
                                <span class="text-color-white font13 ml-1 font-weight-700">
                                    $ 500.000
                                </span>
                            </span>
                        </div>
                        <!--SI ES BODEGA-->
                        <div class="col-md-4 col-sm-12 mt-3">
                            <h4 class="text-color-1">
                                Metros de oficina
                            </h4>
                            <span class="badge bg-color-primary text-color-white font13">
                                234.843 m
                                <sup>
                                    2
                                </sup>
                            </span>
                        </div>
                        <div class="col-md-4 col-sm-12 mt-3">
                            <h4 class="text-color-1">
                                Metros de bodega
                            </h4>
                            <span class="badge bg-color-primary text-color-white font13">
                                234.843 m
                                <sup>
                                    2
                                </sup>
                            </span>
                        </div>
                        <div class="col-md-4 col-sm-12 mt-3">
                            <h4 class="text-color-1">
                                Metros de baño
                            </h4>
                            <span class="badge bg-color-primary text-color-white font13">
                                234.843 m
                                <sup>
                                    2
                                </sup>
                            </span>
                        </div>
                        <div class="col-md-4 col-sm-12 mt-3">
                            <h4 class="text-color-1">
                                Piso reforzado
                            </h4>
                            <span class="badge bg-color-primary text-color-white font13">
                                No
                            </span>
                        </div>
                        <div class="col-md-4 col-sm-12 mt-3">
                            <h4 class="text-color-1">
                                Tipo de entrada
                            </h4>
                            <span class="badge bg-color-primary text-color-white font13">
                                Tractomula
                            </span>
                        </div>
                        <div class="col-md-4 col-sm-12 mt-3">
                            <h4 class="text-color-1">
                                Alturao
                            </h4>
                            <span class="badge bg-color-primary text-color-white font13">
                                17 m
                            </span>
                        </div>
                    </div>
                </div>
                <!--AQUI-FOOTER-->
                @include('footer')
            </div>
            @endsection
            <script>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
            </script>
            <script src="nav.js" type="text/javascript">
            </script>
            <script crossorigin="anonymous" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
            </script>
            <script crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
            </script>
        </link>
    </link>
</link>