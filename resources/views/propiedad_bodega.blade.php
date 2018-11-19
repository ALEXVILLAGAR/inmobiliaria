@extends('plantilla_propiedad')

@section('tipo')
   Bodega
@endsection

@section('caracteristicas')
<div class="col-md-12">
      <h3 class="col-md-offset-0">Características del inmueble</h3>
  <hr class="mi_hr " />
    </div>
<div class="col-md-4">
      <h4 class="col-md-offset-0">Metros de oficina</h4>
      <h5 class="col-md-offset-1 "><strong class="bg-info redondear">30 mt2</strong></h5>
      <h4 class="col-md-offset-0">Piso reforzado</h4>
      <h5 class="col-md-offset-1 "><strong class="bg-info redondear">no</strong></h5>
    </div>
    <div class="col-md-4">
      <h3 class="col-md-offset-0">Metros de bodega</h3>
      <h5 class="col-md-offset-1  "><strong class="bg-info redondear">30 mt2</strong></h5>
      <h3 class="col-md-offset-0">Tipo de entrada</h3>
      <h5 class="col-md-offset-1 "><strong class="bg-info redondear">Camión</strong></h5>
    </div>
    <div class="col-md-4">
      <h3 class="col-md-offset-0">Metros de baño</h3>
      <h5 class="col-md-offset-1 "><strong class="bg-info redondear">30 mt2</strong></h5>
      <h3 class="col-md-offset-0">Altura</h3>
      <h5 class="col-md-offset-1 "><strong class="bg-info redondear">15 mts</strong></h5>
    </div>
@endsection