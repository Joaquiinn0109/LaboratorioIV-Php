@extends('layouts.app')

@section('content')
@if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

<div class="card">
    <div class="card-body">
        <h4 class="card-title text-center">Agregar Envío</h4>
        <p class="card-description text-center">
            Ingresa los datos para el envío
        </p>
        <form name="formulario" class="forms-sample" method="POST" action="{{ route('envio.crear') }}"  enctype="multipart/form-data">
            @csrf
            <div class="form-group row justify-content-center">
               
                <div class="col-sm-4">
                    <label for="fecha_carga">Fecha de carga:</label>
                    <input type="date" class="form-control form-control-sm" id="fecha_carga" name="fecha_carga" required>
                    <input type="hidden" name="publication_id" value="{{ $publication_id }}">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                
                <div class="col-sm-4">
                    <label for="consignatario">Consignatario:</label>
                    <select class="form-control form-control-sm bg-light" id="consignatario" name="vehicle_id" required>
                        @foreach ($vehicles as $vehicle)
                        <option value="{{ $vehicle->id }}">{{ $vehicle->license_plate }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row justify-content-center">
             
                <div class="col-sm-4">
                    <label for="campo">Campo:</label>
                    <select class="form-control form-control-sm bg-light" id="campo" name="campo_id" required>
                        @foreach ($fields as $field)
                        <option value="{{ $field->id }}">{{ $field->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary">Agregar Envío</button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection