@extends('layout')

@section('title', 'Agregar Persona')

@section('content')
    <form action="{{ route('personas.store') }}" method="POST">
        @csrf
        @include('personas.form')
        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('personas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
