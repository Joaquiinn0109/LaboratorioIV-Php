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
                <h4 class="card-title">Envios</h4>  
                <div class="d-flex justify-content-end mb-3">
                
                    <a href="{{ route('mostrar.formulario', ['publication_id' => $publication_id])}}" class="btn btn-success">Agregar Envio</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Fecha de carga</th>
                                <th>Nombre del campo</th>
                                <th>Cod. Postal</th>
                                <th>Departamento</th>
                                <th>Provincia</th>
                                <th>Vehiculo Patente</th>
                                <th>Capacidad</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($envios as $envio)
                                <tr>
                                    <td>{{ $envio->fecha_de_carga }}</td>
                                    <td>{{ $envio->field->name}}</td>
                                    <td>{{ $envio->field->postal_code}}</td>
                                    <td>{{ $envio->field->department}}</td>
                                    <td>{{ $envio->field->province}}</td>
                                    <td>{{ $envio->vehicle->license_plate }}</td>
                                    <td>{{ $envio->vehicle->capacity }}</td>                                        
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection