@extends('layouts.app')

@section('content')
    <h1>Lista de Tareas</h1>
    <ul>
        @foreach($tareas as $tarea)
            <li>
                {{ $tarea->nombre }}
                <form action="{{ route('eliminar', ['id' => $tarea->id]) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('agregar') }}">Agregar Tarea</a>

    @if ($tarea)
        <p>{{ $tarea->nombre }}</p>
    @else
        <p>La tarea no existe o no se encontró.</p>
    @endif
@endsection

