@extends('layouts.app')
<div class=" login_fondo ">
    @section('content')
    <div class="container ">
        <div class="row ">
            <div class="col-md-8 col-md-offset-2 mi_container">
                <div class=" formulario">
                    <div class="panel-body ">
                        <form action="{{ route('login') }}" class="form-horizontal " method="POST">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="col-md-5 col-md-offset-1" for="email">
                                    Correo Electrónico
                                </label>
                                <div class="col-md-10 col-md-offset-1">
                                    <input autofocus="" class="form-control " id="email" name="email" required="" type="email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('email') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </input>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="col-md-5 col-md-offset-1" for="password">
                                    contraseña
                                </label>
                                <div class="col-md-10 col-md-offset-1">
                                    <input class="form-control" id="password" name="password" required="" type="password">
                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('password') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </input>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-md-offset-1">
                                    <div class="checkbox">
                                        <label>
                                            <input checked="" name="remember" type="checkbox">
                                                Recordarme
                                                <a class="btn btn-link col-md-offset-12 col-md-4" href="{{ route('password.request') }}">
                                                    ¿ Olvidaste tu contraseña ?
                                                </a>
                                            </input>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 ">
                                </div>
                                <div class="col-md-10 col-md-offset-1">
                                    <button class=" btn btn-primary col-md-12 " type="submit">
                                        Ingresar
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
