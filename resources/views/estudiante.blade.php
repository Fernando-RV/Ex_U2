@extends('Layout')

@section('content')
@if ($estudiante->condicion == 'Aprobado')
    <section class="w-1/3 mx-auto mt-10 border border-green-400 rounded-xl p-10">
@else
    <section class="w-1/3 mx-auto mt-10 border border-red-400 rounded-xl p-10">
@endif
    <h2 class="text-2xl">Detalle del estudiante {{ $estudiante->nombre }}</h2>
    <ul class="[&>li]:m-2">
        <li>
        <strong>
                Curso: 
            </strong>
            {{ $estudiante->curso }}
        </li>
        <li>
            <strong>
                Nota 1: 
            </strong>
            {{ $estudiante->nota1 }}
        </li>
        <li>
            <strong>
                Nota 2: 
            </strong>
            {{ $estudiante->nota2 }}
        </li>
        <li>
            <strong>
                Promedio:
            </strong>
            {{ $estudiante->promedio }}
        </li>
        <li>
            <strong>
                Condición:
            </strong>
            {{ $estudiante->condicion }}
        </li>
        <li>
            <strong>
                Fecha de creación:
            </strong>
            {{ $estudiante->created_at }}
        </li>
    </ul>
</section>
@endsection