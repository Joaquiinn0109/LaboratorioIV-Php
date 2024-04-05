@extends('layouts.auth')

@section('title')
<title>Inicio de sesion</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('')}}assets/css/background.css" />
@endsection

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" style="background-color:azure" method="POST" action="{{ route('login') }}">
                @csrf
                <span class="login100-form-title p-b-43">
                    <img src="{{ asset('') }}assets/img/logo.svg" alt="Logo" width="250" height="200">
                </span>
                
                
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="focus-input100"></span>
                    <span class="label-input100">Correo</span>
                </div>
                
                
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password" required autocomplete="current-password">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Contraseña</span>
                </div>

                <div class="flex-sb-m w-full p-t-3 p-b-32">
                    <div>
                        <a href="{{ route('register') }}" class="txt1">
                            Registrarse
                        </a>
                    </div>
                </div>
        

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Iniciar sesion
                    </button>
                </div>
            </form>

            <div class="login100-more" style="background-image: url('/assets/img/background/imagen3.jpg');">
            </div>
        </div>
    </div>
</div>
@if ($errors->any())
                    <script>
                        alert("{{ $errors->first() }}");
                    </script>
@endif
@endsection
