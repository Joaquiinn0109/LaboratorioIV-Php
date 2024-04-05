@extends('layouts.app')

@section('title')
    <title>Lista de Usuarios</title>
@endsection

@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Usuarios</h4>
            <p class="card-description">
                Lista de Usuarios Registrados   
            </p>
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('create-user') }}" class="btn btn-success">Agregar Usuario</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                Usuario
                            </th>
                            <th>
                                Nombre
                            </th>
                            <th>
                                Correo
                            </th>
                            <th>
                                Rol
                            </th>
                            <th>
                                Fecha de Creacion
                            </th>
                            <th>
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td class="py-1">
                                <img src="{{ asset('') }}assets/img/face8.jpg" alt="image"/>
                            </td>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                {{ $user->email }}
                            </td>
                            <td>
                                @foreach($user->roles as $role)
                                    {{ $role->name }}
                                @endforeach
                            </td>
                            <td>
                                {{ $user->created_at }}
                            </td>
                            <td>
                                <a href="{{ route('profile.adminedit', $user->id) }}" class="btn btn-sm btn-primary d-inline">Editar</a>
                                <form action="{{ route('profile.admindestroy', $user->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este usuario?');">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection