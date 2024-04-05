@extends('layouts.app')


@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (session('success2'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Solicitudes</h4>           
           
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                           <th>
                             Fecha de Creacion
                           </th>
                            <th>
                                Nombre
                            </th>
                            <th>
                                Dni
                            </th>
                            <th>
                                Direccion
                            </th>
                            <th>
                                Ciudad
                            </th>
                            <th>
                                Provincia
                            </th>                       
                            <th>
                                Telefono
                            </th>
                            <th>
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($publications as $publication)
                        @foreach ($publication->requests as $request)
                            <tr>
                                <td>{{ $request->fecha }}</td>
                                <td>{{ $request->client->firs_name }} {{ $request->client->last_name }}</td>
                                <td>{{ $request->client->dni }}</td>
                                <td>{{ $request->client->address }}</td>
                                <td>{{ $request->client->city }}</td>
                                <td>{{ $request->client->province }}</td>
                                <td>{{ $request->client->phone_number }}</td>
                                <td>
                                    <a href="{{ route('solicitud.envios', ['id' => $request->id, 'publication_id' => $request->publication_id, 'client_id' => $request->client_id]) }}" class="btn btn-sm btn-primary d-inline">Gestionar Envio</a>
                                    <a href="{{ route('confirmation.sell', ['id' => $request->id, 'publication_id' => $request->publication_id]) }}" class="btn btn-sm btn-primary d-inline"onclick=" return confirm('¿Estás seguro que deseas confirmar venta?')">Confirmar Venta</a>
                                </td>                
                            </tr>
                        @endforeach
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
  @endsection
  
  