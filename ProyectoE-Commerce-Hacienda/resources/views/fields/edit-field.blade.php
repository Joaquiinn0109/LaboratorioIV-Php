@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title text-center">Editar un campo</h4>
        <p class="card-description text-center">
            Ingresa los datos del campo para actualizar
        </p>
        <form method="POST" action="{{ route('fields.update', $field->id) }}">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group row justify-content-center">
                <div class="col-sm-6">
                    <label for="name" class="col-sm-4 col-form-label">Nombre</label>
                    <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Ingrese el Nombre de su Campo/Estancia." value="{{ $field->name }}">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-6">
                    <label for="postal_code" class="col-sm-4 col-form-label">Código Postal</label>
                    <input type="text" class="form-control form-control-sm" id="postal_code" name="postal_code" placeholder="Ingrese el Codigo Postal donde se encuentra su Campo/Estancia." value="{{ $field->postal_code }}">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-6">
                    <label for="department" class="col-sm-4 col-form-label">Departamento</label>
                    <input type="text" class="form-control form-control-sm" id="department" name="department" placeholder="Ingrese el Departamento/Localidad donde se ubica su Campo/Estancia." value="{{ $field->department }}">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-6">
                    <label for="province" class="col-sm-4 col-form-label">Provincia</label>
                    <input type="text" class="form-control form-control-sm" id="province" name="province" placeholder="Ingrese la Provincia donde se encuentra su Campo/Estancia." value="{{ $field->province }}">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-6">
                    <label for="latitude" class="col-sm-4 col-form-label">Latitud</label>
                    <input type="text" class="form-control form-control-sm" id="latitude" name="latitude" placeholder="Ingrese la Latitud donde se ubica su Campo/Estancia." value="{{ $field->latitude }}">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-6">
                    <label for="longitude" class="col-sm-4 col-form-label">Longitud</label>
                    <input type="text" class="form-control form-control-sm" id="longitude" name="longitude" placeholder="Ingrese la Longitud donde se ubica su Campo/Estancia." value="{{ $field->longitude }}">
                </div>
            </div>
            <div class="form-group d-flex justify-content-center">
                <div class="col-sm-6 text-center">
                    <button type="submit" class="btn btn-primary btn-block">Actualizar Campo</button>
                </div>
                <div class="col-sm-6 text-center">
                    <a href="{{ route('fields.show') }}" class="btn btn-secondary btn-block">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection