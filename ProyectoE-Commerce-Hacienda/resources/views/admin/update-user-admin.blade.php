@extends('layouts.app')


@section('title')
    <title>Editar Perfil de Usuario</title>
@endsection

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="card">
    <div class="card-body">
        <h4 class="card-title text-center">Editor de Perfiles de Usuarios</h4>
        <p class="card-description text-center">
            Actualiza el perfil de usuario
        </p>
        <div class="form-group d-flex justify-content-center mb-3">
            <img src="{{ asset('') }}assets/img/faceperfil.jpg" alt="Imagen de perfil" class="rounded-circle" style="width: 150px; height: 150px;">
        </div>
        <form action="{{ route('profile.adminupdate', $user->id) }}" method="POST" class="text-center">
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
                    <label for="exampleInputConfirmPassword1">Nueva Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputConfirmPassword1" name="new_password" placeholder="Password">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-6">
                    <label for="exampleInputConfirmPassword1">Confirmar Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputConfirmPassword1" name="new_password" placeholder="Password">
                </div>
            </div>
            <button type="submit" class="btn btn-primary me-2">Actualizar El Perfil</button>
            <a href="{{ route('users') }}" class="btn btn-light">Cancelar</a>
        </form>
    </div>
</div>
@endsection