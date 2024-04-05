@extends('layouts.app')

@section('content')
@if(isset($mensaje))
    <div>{{ $mensaje }}</div>
@endif
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Solicitudes del Cliente</h4>
        <p class="card-description">
           El consignatario se pondra en contacto contigo en 24 horas
        </p>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Nombre y apellido</th>
                        <th>Razon Social</th>
                        <th>Telefono</th>
                        <th>Total</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($requests as $request)
                        <tr>
                            <td>{{ $request->fecha }}</td>
                            <td>{{ $request->publication->consignee->firs_name}} {{ $request->publication->consignee->last_name}}</td>
                            <td>{{ $request->publication->consignee->business_name}}</td>
                            <td>{{ $request->publication->consignee->phone_number}}</td>
                            <td>{{ $request->publication->total}}</td>
                            <td>
                                <label class="badge badge-{{ $request->confirmation ? 'success' : 'warning' }}">
                                    {{ $request->confirmation ? 'Confirmado' : 'Pendiente' }}
                                </label>
                            </td>
                            <td>
                                <form action="{{ route('delete.request', $request->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro que deseas cancelar esta solicitud?')">Cancelar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection