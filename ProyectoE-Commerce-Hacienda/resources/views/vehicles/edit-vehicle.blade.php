@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title text-center">Editar un vehículo</h4>
        <p class="card-description text-center">
            Ingresa los datos del vehículo para actualizar
        </p>
        <form method="POST" action="{{ route('vehicles.update', $vehicle->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group row justify-content-center">
                <div class="col-sm-6">
                    <label for="brand" class="col-sm-4 col-form-label">Matricula</label>
                    <input type="text" class="form-control form-control-sm" id="license_plate" name="license_plate" value="{{ $vehicle->license_plate }}">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-6">
                    <label for="model" class="col-sm-4 col-form-label">Capacidad</label>
                    <input type="text" class="form-control form-control-sm" id="capacity" name="capacity" value="{{ $vehicle->capacity }}">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-6">
                    <label for="year" class="col-sm-4 col-form-label">Tipo de Vehiculo</label>
                    <select class="form-control form-control-sm" id="type" name="type">
                        <option value="Terrestre" {{ $vehicle->type == 'Terrestre' ? 'selected' : '' }}>Terrestre</option>
                        <option value="Maritimo" {{ $vehicle->type == 'Maritimo' ? 'selected' : '' }}>Maritimo</option>
                    </select>
                </div>
            </div>
            <div class="form-group d-flex justify-content-center">
                <div class="col-sm-6 text-center">
                    <button type="submit" class="btn btn-primary btn-block">Actualizar Vehiculo</button>
                </div>
                <div class="col-sm-6 text-center">
                    <a href="{{ route('vehicles.show') }}" class="btn btn-secondary btn-block">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection