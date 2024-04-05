@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title text-center">Agregar Nuevo Vehiculo</h4>
        <p class="card-description text-center">
            Ingresa los datos del nuevo vehiculo
        </p>
        <form method="POST" action="{{ route('addvehicle.post') }}">
            @csrf
            <div class="form-group row justify-content-center">
                <div class="col-sm-6">
                    <label for="name" class="col-sm-4 col-form-label">Matricula</label>
                    <input type="text" class="form-control form-control-sm" id="license_plate" name="license_plate" placeholder="Ingrese el Numero de Matricula del vehiculo.">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-6">
                    <label for="postal_code" class="col-sm-4 col-form-label">Capacidad</label>
                    <input type="int" class="form-control form-control-sm" id="capacity" name="capacity" placeholder="Ingrese la capacidad del vehiculo.">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-6">
                    <label for="department" class="col-sm-4 col-form-label">Tipo de Vehiculo</label>
                    <select class="form-control form-control-sm" id="type" name="type">
                        <option value="Terrestre">Terrestre</option>
                        <option value="Maritimo">Maritimo</option>
                    </select>
                </div>
            </div>
            <div class="form-group d-flex justify-content-center">
                <div class="col-sm-6 text-center">
                    <button type="submit" class="btn btn-primary btn-block">Agregar Vehiculo</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection