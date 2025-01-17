@extends('Layout')

@section('content')
<section>
    <ul class="w-1/3 m-auto mt-10 text-center border border-slate-900 rounded-lg">
        @foreach ($estudiantes as $estudiante)
            <a href="{{ route('estudiante', $estudiante) }}">
                <li class="hover:bg-yellow-200 p-2 w-full rounded-lg">{{ $estudiante->nombre }}</li>
                <hr>
            </a>
        @endforeach
    </ul>
</section>
@endsection