@extends('layouts.app')

@section('content')
    <h1>Agregar Tarea</h1>
    <form action="{{ route('guardar') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre de la Tarea</label>
            <input type="text" id="nombre" name="nombre" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Tarea</button>
    </form>
    <a href="{{ route('inicio') }}">Volver a la Lista</a>
@endsection
