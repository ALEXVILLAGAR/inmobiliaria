@extends('plantilla_propiedad')

@section('tipo')
   Casa
@endsection

@section('caracteristicas')
<div class="col-md-12">
    <h3 class="col-md-offset-0">
        Características del inmueble
    </h3>
    <hr class="mi_hr "/>
</div>
<div class="col-md-4">
    <h4 class="col-md-offset-0">
        Baños
    </h4>
    <h5 class="col-md-offset-0 ">
        <i class="fas fa-bath fa-2x col-md-2 icono">
            1
        </i>
    </h5>
</div>
<div class="col-md-4">
    <h3 class="col-md-offset-0">
        Garajes
    </h3>
    <h5 class="col-md-offset-0 ">
        <i class="fas fa-car fa-2x col-md-2 icono">
            5
        </i>
    </h5>
</div>
<div class="col-md-4">
    <h3 class="col-md-offset-0">
        Habitaciones
    </h3>
    <h5 class="col-md-offset-0 ">
        <i class="fas fa-bed fa-2x col-md-2 icono">
            3
        </i>
    </h5>
</div>
@endsection
