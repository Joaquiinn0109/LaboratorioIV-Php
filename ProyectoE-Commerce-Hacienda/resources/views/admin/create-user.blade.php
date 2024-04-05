@extends('layouts.app')

@section('content')
<div class="card">
        <div class="card-body">
            <h4 class="card-title">Crear usuario</h4>
            <p class="card-description">
                Por favor, complete el formulario para crear un nuevo usuario.
            </p>
            <form method="POST" action="{{ route('store-user') }}" class="forms-sample">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                </div>
                <div class="form-group">
                    <label for="role">Rol</label>
                    <select class="form-control" id="role" name="role" required>
                        <option value="admin">Administrador</option>
                        <option value="client">Cliente</option>
                        <option value="consignee">Consignatario</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary me-2" onclick="return confirm('¿Estás seguro de que quieres crear un nuevo usuario?');">Crear</button>
                <a href="{{ route('users') }}" class="btn btn-light">Cancelar</a>
            </form>
        </div>
    </div>
@endsection
