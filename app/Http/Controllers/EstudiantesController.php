<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::get();
        return view('listado', compact('estudiantes'));
    }

    public function show(Estudiante $estudiante){
        return view('estudiante', [
            'estudiante' => $estudiante,
        ]);
    }

    public function create()
    {
        return view('ingreso');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'curso' => 'required|string|max:255',
            'nota1' => 'required|numeric|min:0|max:20',
            'nota2' => 'required|numeric|min:0|max:20',
        ]);

        $promedio = ($request->nota1 + $request->nota2) / 2;
        $condicion = $promedio >= 10.5 ? 'Aprobado' : 'Desaprobado';

        Estudiante::create([
            'nombre' => $request->nombre,
            'curso' => $request->curso,
            'nota1' => $request->nota1,
            'nota2' => $request->nota2,

        ]);

        return redirect()->route('estudiantes.create')->with('success', 'Estudiante guardado con éxito.');
    }
}
