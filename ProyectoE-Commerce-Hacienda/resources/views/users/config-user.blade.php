@extends('layouts.app')

@section('title', 'Perfil de usuario')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title text-center">Configuracion</h4>
        <p class="card-description text-center">
            Información de tu perfil
        </p>
        <div class="form-group d-flex justify-content-center mb-3">
            <img src="{{ asset('') }}assets/img/faceperfil.jpg" alt="Imagen de perfil" class="rounded-circle" style="width: 150px; height: 150px;">
        </div>
        <div class="form-group row justify-content-center">
            <div class="col-sm-6 text-left">
                <label for="name">Nombre</label>
                <input type="text" class="form-control form-control-sm" id="name" name="name" value="{{ $user->name }}" readonly>
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <div class="col-sm-6 text-left">
                <label for="email">Correo electrónico</label>
                <input type="email" class="form-control form-control-sm" id="email" name="email" value="{{ $user->email }}" readonly>
            </div>
        </div>
        <div class="form-group d-flex justify-content-center">
            <a href="{{ route('config.edit') }}" class="btn btn-primary">Actualizar</a>
        </div>
    </div>
</div>    
@endsection


{{-- @section('content')
<div class="container">
    <h1>Perfil de {{ $user->name }}</h1>

    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" readonly>
    </div>

    <div class="form-group">
        <label for="email">Correo electrónico</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" readonly>
    </div>

    <a href="{{ route('profile.edit') }}" class="btn btn-primary">Editar perfil</a>
</div>
@endsection --}}
