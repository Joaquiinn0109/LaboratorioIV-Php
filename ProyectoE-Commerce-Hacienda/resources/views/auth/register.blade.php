@extends('layouts.auth')

@section('title')
<title>Registrarse</title>
@endsection

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" style="background-color:azure" method="POST" action="{{ route('register') }}">
                @csrf
                <span class="login100-form-title p-b-43">
                    <img src="{{ asset('') }}assets/img/logo.svg" alt="Logo" width="200" height="200" >
                </span>

                <div class="wrap-input100 validate-input" data-validate="Username is required">
                    <input class="input100" type="text" name="name" value="{{ old('name') }}" required autocomplete="name">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Nombre de Usuario</span>
                </div>
                
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="focus-input100"></span>
                    <span class="label-input100">Correo</span>
                </div>
                
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password" required autocomplete="new-password">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Contraseña</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password confirmation is required">
                    <input class="input100" type="password" name="password_confirmation" required autocomplete="new-password">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Confirmar Contraseña</span>
                </div>


                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Registrarse
                    </button>
                </div>

                <div class="flex-sb-m w-full p-t-3 p-b-32">
                    <div>
                        <a href="{{ route('login') }}" class="txt1">
                            Ya estas registrado?
                        </a>
                    </div>
                </div>
            </form>

            <div class="login100-more" style="background-image: url('/assets/img/background/imagen6.jpg');">
            </div>
        </div>
    </div>
</div>
@endsection