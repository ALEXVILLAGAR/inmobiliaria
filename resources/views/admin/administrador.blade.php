@extends('layouts.app')

@push('styles')
<link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" rel="stylesheet">
    <link href="{{asset('css/estilo_admin.css')}}" rel="stylesheet">
        <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" rel="stylesheet">
            @endpush


@section('content')
            <!--contenido admin-->
            <div class="container px-2 pt-2 full-height">
                <div class="row mi_container">
                    <h3 class="mt-2 text-color-1 mi_container col-md-offset-0">
                        Inmuebles
                    </h3>
                    <hr class="mt-1 bg-color-primary mi_hr col-md-offset-0">
                        <div class="row m-0">
                            <div class="col-md-12 col-lg-3 mt-10px">
                                <form action="index.html" class="" method="get">
                                    <div class="row">
                                        <div class="col-sm-12 p-0">
                                            <div class="bg-color-primary px-1 py-2 mb-2 rounded">
                                                <h5 class="text-color-white m-0">
                                                    Estado
                                                </h5>
                                            </div>
                                            <div class="input-group mb-3">
                                                <select class="custom-select" name="state">
                                                    <option selected="selected" value="">
                                                        Selecciona una opción
                                                    </option>
                                                    <option value="enabled">
                                                        Habilitado
                                                    </option>
                                                    <option value="disabled">
                                                        Deshabilitado
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-4 col-sm-6 p-0">
                                            <div class="bg-color-primary px-1 py-2 mb-2 rounded">
                                                <h5 class="text-color-white m-0">
                                                    Tipo de inmueble
                                                </h5>
                                            </div>
                                            <div class="input-group mb-3">
                                                <select class="custom-select" name="type">
                                                    <option selected="selected" value="">
                                                        Selecciona una opción
                                                    </option>
                                                    <option value="apartment">
                                                        Apartamento
                                                    </option>
                                                    <option value="cellar">
                                                        Bodega
                                                    </option>
                                                    <option value="house">
                                                        Casa
                                                    </option>
                                                    <option value="farm">
                                                        Finca
                                                    </option>
                                                    <option value="batch">
                                                        Lote
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-4 col-sm-6 p-0">
                                            <div class="bg-color-primary px-1 py-2 mb-2 rounded">
                                                <h5 class="text-color-white m-0">
                                                    Sector
                                                </h5>
                                            </div>
                                            <div class="input-group mb-3">
                                                <select class="custom-select" name="city">
                                                    <option selected="selected" value="">
                                                        Selecciona una opción
                                                    </option>
                                                    <option value="1">
                                                        Abejorral
                                                    </option>
                                                    <option value="2">
                                                        Abriaquí
                                                    </option>
                                                    <option value="3">
                                                        Alejandría
                                                    </option>
                                                    <option value="4">
                                                        Amagá
                                                    </option>
                                                    <option value="5">
                                                        Amalfi
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-4 col-sm-6 p-0">
                                            <div class="bg-color-primary px-1 py-2 mb-2 rounded">
                                                <h5 class="text-color-white m-0">
                                                    Área
                                                </h5>
                                            </div>
                                            <div class="row m-0">
                                                <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                                                    <span class="d-block" id="min-area">
                                                    </span>
                                                    <div class="input-group mb-3">
                                                        <input class="form-control range-input" min="0" name="min-area" placeholder="min" type="number" value="">
                                                        </input>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                                                    <span class="d-block" id="max-area">
                                                    </span>
                                                    <div class="input-group mb-3">
                                                        <input class="form-control range-input" min="0" name="max-area" placeholder="max" type="number" value="">
                                                        </input>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-lg-12 col-md-6 p-0">
                                            <div class="bg-color-primary px-1 py-2 mb-2 rounded">
                                                <h5 class="text-color-white m-0">
                                                    Precio
                                                </h5>
                                            </div>
                                            <div class="row m-0">
                                                <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                                                    <span class="d-block" id="min-area">
                                                    </span>
                                                    <div class="input-group mb-3">
                                                        <input class="form-control range-input" min="0" name="min-price" placeholder="min" type="number" value="">
                                                        </input>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                                                    <span class="d-block" id="max-area">
                                                    </span>
                                                    <div class="input-group mb-3">
                                                        <input class="form-control range-input" min="0" name="max-price" placeholder="max" type="number" value="">
                                                        </input>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6 text-center mb-2">
                                            <button class="btn bg-color-primary-4 text-color-white" type="submit">
                                                <i class="fas fa-search mr-1">
                                                </i>
                                                Buscar
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-9 col-md-12 p-0">
                                <div class="container">
                                    <section>
                                        <div class="mt-2 position-relative shadow-1 mb-3 pb-3 pb-md-0">
                                            <span class="position-absolute bg-color-primary-3 card-stripe p-1">
                                                <i class="fas fa-check">
                                                    Habilitado
                                                </i>
                                            </span>
                                            <div class="row m-0 align-items-center">
                                                <div class="col-md-4 col-sm-12 p-0 bg-image" style='background-image:url("bg-1.jpg")'>
                                                </div>
                                                <div class="col-md-8 col-sm-12 p-0">
                                                    <div class="row m-0">
                                                        <div class="col-12">
                                                            <h4 class="card-title font-weight-700 mt-3 text-color-1">
                                                                Bodega - Medellin
                                                            </h4>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <span class="font-weight-700 text-color-1">
                                                                Tipo:
                                                            </span>
                                                            <span class="text-color-1">
                                                                Apartamento
                                                            </span>
                                                        </div>
                                                        <div class="col-12 col-sm-6 text-sm-right">
                                                            <span class="text-color-1 font-weight-700">
                                                                Area:
                                                            </span>
                                                            <span class="text-color-1">
                                                                360 m
                                                                <sup>
                                                                    2
                                                                </sup>
                                                            </span>
                                                        </div>
                                                        <div class="col-12 mt-2">
                                                            <h5 class="font-weight-700 text-color-1">
                                                                $ 600.000.000
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-12 col-md-8 mt-2">
                                                            <div class="">
                                                                <span class="badge mr-1 bg-color-primary-1 text-color-white ">
                                                                    <i class="fas fa-bath font15">
                                                                    </i>
                                                                    <span class="font-weight-700">
                                                                        3
                                                                    </span>
                                                                </span>
                                                                <span class="badge mr-1 bg-color-primary-1 text-color-white ">
                                                                    <i class="fas fa-warehouse font15">
                                                                    </i>
                                                                    <span class="font-weight-700">
                                                                        3
                                                                    </span>
                                                                </span>
                                                                <span class="badge mr-1 bg-color-primary-1 text-color-white ">
                                                                    <i class="fas fa-bed font15">
                                                                    </i>
                                                                    <span class="font-weight-700">
                                                                        3
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4 mt-2">
                                                            <a class="btn btn-border btn-light text-color-1 btn-block" href="{{ url('detalles_admin') }}">
                                                                <i class="far fa-eye">
                                                                </i>
                                                                Detalle
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-2 position-relative shadow-1 mb-3 pb-3 pb-md-0">
                                            <span class="position-absolute bg-color-red card-stripe p-1">
                                                <i class="fas fa-times">
                                                    Deshabilitado
                                                </i>
                                            </span>
                                            <div class="row m-0 align-items-center">
                                                <div class="col-md-4 col-sm-12 p-0 bg-image" style='background-image:url("bg-1.jpg")'>
                                                </div>
                                                <div class="col-md-8 col-sm-12 p-0">
                                                    <div class="row m-0">
                                                        <div class="col-12">
                                                            <h4 class="card-title font-weight-700 mt-3 text-color-1">
                                                                Bodega - Medellin
                                                            </h4>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <span class="font-weight-700 text-color-1">
                                                                Tipo:
                                                            </span>
                                                            <span class="text-color-1">
                                                                Apartamento
                                                            </span>
                                                        </div>
                                                        <div class="col-12 col-sm-6 text-sm-right">
                                                            <span class="text-color-1 font-weight-700">
                                                                Area:
                                                            </span>
                                                            <span class="text-color-1">
                                                                360 m
                                                                <sup>
                                                                    2
                                                                </sup>
                                                            </span>
                                                        </div>
                                                        <div class="col-12 mt-2">
                                                            <h5 class="font-weight-700 text-color-1">
                                                                $ 600.000.000
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-12 col-md-8 mt-2">
                                                            <div class="">
                                                                <span class="badge mr-1 bg-color-primary-1 text-color-white ">
                                                                    <i class="fas fa-bath font15">
                                                                    </i>
                                                                    <span class="font-weight-700">
                                                                        3
                                                                    </span>
                                                                </span>
                                                                <span class="badge mr-1 bg-color-primary-1 text-color-white ">
                                                                    <i class="fas fa-warehouse font15">
                                                                    </i>
                                                                    <span class="font-weight-700">
                                                                        3
                                                                    </span>
                                                                </span>
                                                                <span class="badge mr-1 bg-color-primary-1 text-color-white ">
                                                                    <i class="fas fa-bed font15">
                                                                    </i>
                                                                    <span class="font-weight-700">
                                                                        3
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4 mt-2">
                                                            <a class="btn btn-border btn-light text-color-1 btn-block" href="{{ url('detalles_admin') }}">
                                                                <i class="far fa-eye">
                                                                </i>
                                                                Detalle
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-2 position-relative shadow-1 mb-3 pb-3 pb-md-0">
                                            <span class="position-absolute bg-color-red card-stripe p-1">
                                                <i class="fas fa-times">
                                                    Deshabilitado
                                                </i>
                                            </span>
                                            <div class="row m-0 align-items-center">
                                                <div class="col-md-4 col-sm-12 p-0 bg-image" style='background-image:url("bg-1.jpg")'>
                                                </div>
                                                <div class="col-md-8 col-sm-12 p-0">
                                                    <div class="row m-0">
                                                        <div class="col-12">
                                                            <h4 class="card-title font-weight-700 mt-3 text-color-1">
                                                                Bodega - Medellin
                                                            </h4>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <span class="font-weight-700 text-color-1">
                                                                Tipo:
                                                            </span>
                                                            <span class="text-color-1">
                                                                Apartamento
                                                            </span>
                                                        </div>
                                                        <div class="col-12 col-sm-6 text-sm-right">
                                                            <span class="text-color-1 font-weight-700">
                                                                Area:
                                                            </span>
                                                            <span class="text-color-1">
                                                                360 m
                                                                <sup>
                                                                    2
                                                                </sup>
                                                            </span>
                                                        </div>
                                                        <div class="col-12 mt-2">
                                                            <h5 class="font-weight-700 text-color-1">
                                                                $ 600.000.000
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-12 col-md-8 mt-2">
                                                            <div class="">
                                                                <span class="badge mr-1 bg-color-primary-1 text-color-white ">
                                                                    <i class="fas fa-bath font15">
                                                                    </i>
                                                                    <span class="font-weight-700">
                                                                        3
                                                                    </span>
                                                                </span>
                                                                <span class="badge mr-1 bg-color-primary-1 text-color-white ">
                                                                    <i class="fas fa-warehouse font15">
                                                                    </i>
                                                                    <span class="font-weight-700">
                                                                        3
                                                                    </span>
                                                                </span>
                                                                <span class="badge mr-1 bg-color-primary-1 text-color-white ">
                                                                    <i class="fas fa-bed font15">
                                                                    </i>
                                                                    <span class="font-weight-700">
                                                                        3
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4 mt-2">
                                                            <a class="btn btn-border btn-light text-color-1 btn-block" href="{{ url('detalles_admin') }}">
                                                                <i class="far fa-eye">
                                                                </i>
                                                                Detalle
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-2 position-relative shadow-1 mb-3 pb-3 pb-md-0">
                                            <span class="position-absolute bg-color-red card-stripe p-1">
                                                <i class="fas fa-times">
                                                    Deshabilitado
                                                </i>
                                            </span>
                                            <div class="row m-0 align-items-center">
                                                <div class="col-md-4 col-sm-12 p-0 bg-image" style='background-image:url("bg-1.jpg")'>
                                                </div>
                                                <div class="col-md-8 col-sm-12 p-0">
                                                    <div class="row m-0">
                                                        <div class="col-12">
                                                            <h4 class="card-title font-weight-700 mt-3 text-color-1">
                                                                Bodega - Medellin
                                                            </h4>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <span class="font-weight-700 text-color-1">
                                                                Tipo:
                                                            </span>
                                                            <span class="text-color-1">
                                                                Apartamento
                                                            </span>
                                                        </div>
                                                        <div class="col-12 col-sm-6 text-sm-right">
                                                            <span class="text-color-1 font-weight-700">
                                                                Area:
                                                            </span>
                                                            <span class="text-color-1">
                                                                360 m
                                                                <sup>
                                                                    2
                                                                </sup>
                                                            </span>
                                                        </div>
                                                        <div class="col-12 mt-2">
                                                            <h5 class="font-weight-700 text-color-1">
                                                                $ 600.000.000
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-12 col-md-8 mt-2">
                                                            <div class="">
                                                                <span class="badge mr-1 bg-color-primary-1 text-color-white ">
                                                                    <i class="fas fa-bath font15">
                                                                    </i>
                                                                    <span class="font-weight-700">
                                                                        3
                                                                    </span>
                                                                </span>
                                                                <span class="badge mr-1 bg-color-primary-1 text-color-white ">
                                                                    <i class="fas fa-warehouse font15">
                                                                    </i>
                                                                    <span class="font-weight-700">
                                                                        3
                                                                    </span>
                                                                </span>
                                                                <span class="badge mr-1 bg-color-primary-1 text-color-white ">
                                                                    <i class="fas fa-bed font15">
                                                                    </i>
                                                                    <span class="font-weight-700">
                                                                        3
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4 mt-2">
                                                            <a class="btn btn-border btn-light text-color-1 btn-block" href="{{ url('detalles_admin') }}">
                                                                <i class="far fa-eye">
                                                                </i>
                                                                Detalle
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </hr>
                </div>
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
