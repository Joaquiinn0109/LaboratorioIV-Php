@extends('layouts.app')

@section('title')
    <title>Editar Perfil</title>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title text-center">Editor de Perfiles</h4>
        <p class="card-description text-center">
            Actualiza tu perfil
        </p>
        <div class="form-group d-flex justify-content-center mb-3">
            <img src="{{ asset('') }}assets/img/faceperfil.jpg" alt="Imagen de perfil" class="rounded-circle" style="width: 150px; height: 150px;">
        </div>
        <form action="{{ route('config.update') }}" method="POST" class="text-center">
            @csrf
            @method('PUT')
            <div class="form-group row justify-content-center">
                <div class="col-sm-6">
                    <label for="exampleInputUsername1">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" name="name" value="{{ $user->name }}" placeholder="Username">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-6">
                    <label for="exampleInputEmail1">Correo</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ $user->email }}" placeholder="Email">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-6">
                    <label for="exampleInputPassword1">Contraseña Actual</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="current_password" placeholder="Password">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-6">
                    <label for="exampleInputConfirmPassword1">Nueva Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputConfirmPassword1" name="new_password" placeholder="Password">
                </div>
            </div>
            <button type="submit" class="btn btn-primary me-2">Actualizar Perfil</button>
            <a href="{{ route('config.show') }}" class="btn btn-light">Cancelar</a>
        </form>
    </div>
</div>
@endsection

{{-- @section('content')
<div class="container">
    <h1>Editar Perfil</h1>

    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
        </div>

        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
        </div>

        <div class="form-group">
            <label for="current_password">Contraseña actual</label>
            <input type="password" class="form-control" id="current_password" name="current_password">
        </div>

        <div class="form-group">
            <label for="new_password">Nueva contraseña</label>
            <input type="password" class="form-control" id="new_password" name="new_password">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar perfil</button>
    </form>
</div>
@endsection --}}