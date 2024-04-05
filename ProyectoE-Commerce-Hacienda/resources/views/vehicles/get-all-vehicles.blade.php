@extends('layouts.app')

@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Vehículos</h4>
            <p class="card-description">
                Lista de Vehículos Asociados a {{ Auth::user()->name }}
            </p>
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('addvehicle.show') }}" class="btn btn-success">Agregar Vehículo</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                Matricula
                            </th>
                            <th>
                                Capacidad
                            </th>
                            <th>
                                Tipo de Vehículo
                            </th>
                            <th>
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($vehicles as $vehicle)
                        <tr>
                            <td>
                                {{ $vehicle->license_plate }}
                            </td>
                            <td>
                                {{ $vehicle->capacity }}
                            </td>
                            <td>
                                {{ $vehicle->type }}
                            </td>
                            <td>
                                <a href="{{ route('vehicles.edit', $vehicle->id) }}" class="btn btn-sm btn-primary d-inline">Editar</a>
                                <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este vehículo?');">Eliminar</button>
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