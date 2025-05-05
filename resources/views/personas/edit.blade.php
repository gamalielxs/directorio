@extends('layout')

@section('title', 'Editar Persona')

@section('content')
    <form action="{{ route('personas.update', $persona) }}" method="POST">
        @csrf
        @method('PUT')
        @include('personas.form', ['persona' => $persona])
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('personas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
