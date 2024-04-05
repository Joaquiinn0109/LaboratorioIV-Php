@extends('layouts.app')


@section('content')


<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Publicaciones Asignadas</h4>           
           
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
                                Telefono
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
                                total
                            </th>
                            <th>
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($publicacionesAsignadas as $publicacion)
                        
                        <tr>                      
                            <td>
                               {{ $publicacion->date }}
                            </td>
                            <td>
                              {{ $publicacion->seller->fisr_name}} {{ $publicacion->seller->last_name}}
                            </td>
                            <td>
                              {{ $publicacion->seller->phone_number }}
                            </td>
                            <td>
                                {{ $publicacion->seller->address}}
                            </td>
                            <td>
                                {{ $publicacion->seller->city}}
                            </td>
                            <td>
                              {{ $publicacion->seller->province}}
                          </td>
                          <td>
                              ${{ $publicacion->total}}
                          </td>
                            <td>
                                <a href="{{ route('post-details', ['id' => $publicacion->id]) }}" class="btn btn-primary">Ver publicación</a>
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
  
  