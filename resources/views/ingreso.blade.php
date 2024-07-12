@extends('layout')

@section('title', 'Ingreso')

@section('content')
<div class="container">
    <h1 class="text-center text-3xl">Ingreso</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('estudiantes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="curso">Curso</label>
            <input type="text" class="form-control" id="curso" name="curso" required>
        </div>
        <div class="form-group">
            <label for="nota1">Nota 1</label>
            <input type="number" step="0.01" class="form-control" id="nota1" name="nota1" required>
        </div>
        <div class="form-group">
            <label for="nota2">Nota 2</label>
            <input type="number" step="0.01" class="form-control" id="nota2" name="nota2" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection