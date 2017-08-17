@extends('layouts.cambista')

@section('content')


<div class="container">
    <div class="form-outer text-center d-flex align-items-center">
        <div class="form-inner">
            <div class="logo text-uppercase"><span>Cambista Online</span>&nbsp;</div>
             <p>Solo usuarios registrados pueden acceder al sitio, si desea mas informacion pongase en contacto con nosotros a traves de la siguiente direccion de correo electronico <a href="#" class="external">info@congresosecuador.com</a></p>           
            <form id="login-form" method="post" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('login') ? ' has-error' : '' }}">
                    <label for="login-username" class="label-custom">Usuario</label>
                    <input id="login-username" type="text" name="login" value="{{ old('login') }}" required autofocus>
                    @if ($errors->has('login'))
                        <span class="help-block">
                            <strong>{{ $errors->first('login') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="login-password" class="label-custom">Contraseña</label>
                    <input id="login-password" type="password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Acceder </button>
            </form>
            <a href="#" class="forgot-pass">Olvido su contraseña?</a>
        </div>
        <div class="copyrights text-center">
          <p>@ Todos los derechos recervados </p>
        </div>
    </div>
</div>
@endsection
