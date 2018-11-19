@extends('layouts.app')
<div class="fondo_correo">
    @section('content')
    <div class="container mi-contenedor">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 ">
                <div class="panel mi-contenedor-correo">
                    <div class="panel-body">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <div class="col-md-12">
                            <h3 class="col-md-offset-0">
                                Confirmar el cambio de contraseña
                            </h3>
                            <h5 class="col-md-offset-0">
                                Ingresa la dirección de correo electrónico con la cual te registrate. Cuando recibas el link de confirmación podrás cambiar tu contraseña.
                            </h5>
                        </div>
                        <form action="{{ route('password.email') }}" class="form-horizontal" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="col-md-12 formulario_recuperar">
                                    <div class="row">
                                        <i class="col-md-offset-1 fas fa-envelope fa-1x div-color">
                                        </i>
                                        <input class="form-control col-md-10 mi_placeholder" id="email" name="email" placeholder="Correo" required="" type="email" value="{{ old('email') }}">
                                        </input>
                                    </div>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('email') }}
                                        </strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 ">
                                    <button class="btn btn-info col-md-2 col-md-offset-5 " type="submit">
                                        Enviar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
