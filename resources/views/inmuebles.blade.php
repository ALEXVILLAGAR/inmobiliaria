@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mi_container">
        <div class="col-md-12">
            <h2 class="col-md-offset-0">
                Inmuebles
            </h2>
            <hr class="mi_hr"/>
        </div>
        <div class="col-md-3 ">
            <br>
                <h3 class="bg-info text-white mi_div">
                    Tipo de inmueble
                </h3>
                <div class="input-group col-md-12 ">
                    <select class="custom-select col-md-12 form-control input_form2" id="">
                        <option selected="">
                            Seleccione una opciòn...
                        </option>
                        <option value="1">
                            One
                        </option>
                        <option value="2">
                            Two
                        </option>
                        <option value="3">
                            Three
                        </option>
                    </select>
                </div>
                <h3 class="bg-info text-white mi_div">
                    Sector
                </h3>
                <div class="input-group col-md-12 ">
                    <select class="custom-select col-md-12 form-control input_form2" id="inputGroupSelect03">
                        <option selected="">
                            Seleccione una opciòn...
                        </option>
                        <option value="1">
                            One
                        </option>
                        <option value="2">
                            Two
                        </option>
                        <option value="3">
                            Three
                        </option>
                    </select>
                </div>
                <h3 class="bg-info text-white mi_div">
                    Área
                </h3>
                <input class="col-md-6 input_form2" min="0" name="" placeholder="min" type="number">
                    <input class="col-md-6 input_form2" min="0" name="" placeholder="max" type="number">
                        <br>
                            <br>
                                <h3 class="bg-info text-white mi_div">
                                    Precio
                                </h3>
                                <input class="col-md-6 input_form2" min="0" name="" placeholder="min" type="number">
                                    <input class="col-md-6 input_form2" min="0" name="" placeholder="max" type="number">
                                        <button class="btn btn-info col-md-offset-4 mi_boton" type="submit">
                                            <i class="fas fa-search">
                                            </i>
                                            Buscar
                                        </button>
                                    </input>
                                </input>
                            </br>
                        </br>
                    </input>
                </input>
            </br>
        </div>
        <div class="col-md-9">
            <div class="col-md-12 col-md-offset-0 mi_tarjeta">
                <img alt="..." class="rounded float-left col-md-5" src="http://www.fondox.net/descargar.php?id=1685&resolucion=1024x600">
                    <div class="col-md-offset-4 ">
                        <h3 class="">
                            <strong>
                                Tipo - Nombre
                            </strong>
                        </h3>
                        <h5 class="col-md-offset-0">
                            <strong>
                                Tipo:
                            </strong>
                            Casa
                            <strong class="col-md-offset-4">
                                Area:
                            </strong>
                            1.280 m2
                        </h5>
                        <h3 class="col-md-offset-0">
                            <strong>
                                $ 30.000.000
                            </strong>
                        </h3>
                        <div class="col-md-offset-0">
                            <i class="fas fa-bath fa-2x col-md-2 icono">
                                1
                            </i>
                            <i class="fas fa-warehouse fa-2x col-md-2 icono text-white">
                                2
                            </i>
                            <i class="fas fa-bed fa-2x col-md-2 icono">
                                3
                            </i>
                            <a class="col-md-3 col-md-offset-0 btn btn-outline-info bg-white text-info ubicar_derecha" href="{{ url('/propiedad_bodega') }}">
                                <i class="far fa-eye">
                                </i>
                                Detalle
                            </a>
                        </div>
                    </div>
                </img>
            </div>
            <div class="col-md-12 col-md-offset-0 mi_tarjeta">
                <img alt="..." class="rounded float-left col-md-5" src="http://www.fondox.net/descargar.php?id=1685&resolucion=1024x600">
                    <div class="col-md-offset-4 ">
                        <h3 class="">
                            <strong>
                                Tipo de inmueble
                            </strong>
                        </h3>
                        <h5 class="col-md-offset-0">
                            <strong>
                                Tipo:
                            </strong>
                            Casa
                            <strong class="col-md-offset-4">
                                Area:
                            </strong>
                            1.280 m2
                        </h5>
                        <h3 class="col-md-offset-0">
                            <strong>
                                $ 30.000.000
                            </strong>
                        </h3>
                        <div class="col-md-offset-0">
                            <i class="fas fa-bath fa-2x col-md-2 icono">
                                1
                            </i>
                            <i class="fas fa-warehouse fa-2x col-md-2 icono">
                                2
                            </i>
                            <i class="fas fa-bed fa-2x col-md-2 icono">
                                3
                            </i>
                            <a class="col-md-3 col-md-offset-0 btn btn-outline-info bg-white text-info ubicar_derecha" href="{{ url('/propiedad_casa') }}">
                                <i class="far fa-eye">
                                </i>
                                Detalle
                            </a>
                        </div>
                    </div>
                </img>
            </div>
        </div>
    </div>
</div>
@endsection
