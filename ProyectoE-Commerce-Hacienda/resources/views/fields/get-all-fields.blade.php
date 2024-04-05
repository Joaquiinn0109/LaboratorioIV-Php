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
            <h4 class="card-title">Campos registrados</h4>
            <p class="card-description">
                Lista de Campos Asociados a {{ Auth::user()->name }} 
            </p>
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('addfields.show') }}" class="btn btn-success">Agregar Campo</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                Nombre
                            </th>
                            <th>
                                Código Postal
                            </th>
                            <th>
                                Departamento
                            </th>
                            <th>
                                Provincia
                            </th>
                            <th>
                                Latitud y Longitud
                            </th>
                            <th>
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($fields as $field)
                        <tr>
                            <td>
                                {{ $field->name }}
                            </td>
                            <td>
                                {{ $field->postal_code }}
                            </td>
                            <td>
                                {{ $field->department }}
                            </td>
                            <td>
                                {{ $field->province }}
                            </td>
                            <td>
                                {{ $field->latitude }}, {{ $field->longitude }}
                            </td>
                            <td>
                                <a href="{{ route('fields.edit', $field->id) }}" class="btn btn-sm btn-primary d-inline">Editar</a>
                                <form action="{{ route('fields.destroy', $field->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este campo?');">Eliminar</button>
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