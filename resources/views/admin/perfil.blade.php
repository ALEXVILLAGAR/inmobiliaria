@extends('layouts.app')

@push('styles')
<link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" rel="stylesheet">
    <link href="{{asset('css/estilo_admin.css')}}" rel="stylesheet">
        <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" rel="stylesheet">
            @endpush

 @section('content')
            <div class="container px-2 pt-2 main-content full-height">
                <div class="row mi_container">
                    <h3 class="text-color-1 col-md-offset-0">
                        Datos Personales
                    </h3>
                    <div class="col-md-12">
                        <hr class="mi_hr">
                        </hr>
                    </div>
                    <div class=" justify-content-center col-md-offset-2">
                        <div class="col-md-10 col-md-offset-2 m-0 p-4 card-container text-color-4 w-75">
                            <div class=" col-md-4 col-lg-3 d-flex justify-content-center align-items-center profile__icon-user">
                                <span class="d-block">
                                    <i class="fas fa-user-circle fa-10x">
                                    </i>
                                </span>
                            </div>
                            <div class="col-md-10 col-lg-9 profile__data-user">
                                <div class="col-md-10 m-0 py-4">
                                    <div class="col-sm-12 col-md-4">
                                        <strong>
                                            Correo Electronico
                                        </strong>
                                    </div>
                                    <div class="col-sm-12 col-md-8">
                                        <span>
                                            elwyn.moen@example.net
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-10 m-0 py-4">
                                    <div class="col-sm-12 col-md-4">
                                        <strong>
                                            Cedula
                                        </strong>
                                    </div>
                                    <div class="col-sm-12 col-md-8">
                                        <span>
                                            1233432423
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-10 m-0 py-4">
                                    <div class="col-sm-12 col-md-4">
                                        <strong>
                                            Nombres
                                        </strong>
                                    </div>
                                    <div class="col-sm-12 col-md-8">
                                        <span>
                                            Olga
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-10 m-0 py-4">
                                    <div class="col-sm-12 col-md-4">
                                        <strong>
                                            Apellidos
                                        </strong>
                                    </div>
                                    <div class="col-sm-12 col-md-8">
                                        <span>
                                            Perez
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-10 m-0 py-4">
                                    <div class="col-sm-12 col-md-4">
                                        <strong>
                                            Telefono
                                        </strong>
                                    </div>
                                    <div class="col-sm-12 col-md-8">
                                        <span>
                                            3218764567
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-10 m-0 py-4">
                                    <div class="col-sm-12 col-md-4">
                                        <strong>
                                            Rol
                                        </strong>
                                    </div>
                                    <div class="col-sm-12 col-md-8">
                                        <span>
                                            Administrador
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
                <br>
                    @endsection
                </br>
            </br>
        </link>
    </link>
</link>