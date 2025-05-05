@extends('layout')

@section('title', 'Listado de Personas')

@section('content')
    <a href="{{ route('personas.create') }}" class="btn btn-primary mb-3">Agregar Persona</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Profesión</th>
                <th>Área</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
                <tr>
                    <td>{{ $persona->nombre }} {{ $persona->apellido }}</td>
                    <td>{{ $persona->edad }}</td>
                    <td>{{ $persona->profesion }}</td>
                    <td>{{ ucfirst($persona->area) }}</td>
                    <td>
                        <a href="{{ route('personas.edit', $persona) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('personas.destroy', $persona) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('¿Eliminar esta persona?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
