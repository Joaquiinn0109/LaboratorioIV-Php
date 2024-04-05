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
          <h4 class="card-title">Mis Publicaciones</h4>
          <p class="card-description">
              Lista de Mis Publicaciones   
          </p>
         
          <div class="table-responsive">
              <table class="table table-striped">
                  <thead>
                      <tr>
                         <th>
                          Fecha de Creacion
                         </th>
                          <th>
                              Raza
                          </th>
                          <th>
                              Cantidad
                          </th>
                          <th>
                              Categoria
                          </th>
                          <th>
                              Proposito
                          </th>
                          <th>
                            Precio Kg
                            </th>
                            <th>
                            Total
                            </th>
                          
                          <th>
                              Acciones
                          </th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($publicaciones as $publicacion)
                      <tr>
                         
                          <td>
                              {{ $publicacion->date}}
                          </td>
                          <td>
                            {{ $publicacion->breed }}
                          </td>
                          <td>
                            {{ $publicacion->quantity }}
                          </td>
                          <td>
                              {{ $publicacion->category }}
                          </td>
                          <td>
                              {{ $publicacion->purpose}}
                          </td>
                          <td>
                            ${{ $publicacion->pricekg}}
                        </td>
                        <td>
                            ${{ $publicacion->total}}
                        </td>
                          <td>
                            <a href="{{ route('edit.publicacion', ['id' => $publicacion->id]) }}" class="btn btn-sm btn-primary d-inline">Editar</a>
                            <form action="{{ route('delete.publicacion', ['id' => $publicacion->id]) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar esta publicación?');">Eliminar</button>
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

