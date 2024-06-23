<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    public function create()
    {
        return view('personas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'apellido' => 'required|string|max:255',
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'edad' => 'required|integer',
            'sueldo' => 'required|numeric',
            'estado' => 'required|string|max:255',
            'sexo' => 'required|string|max:255',
        ], [
            'apellido.required' => 'El campo apellido es obligatorio.',
            'nombre.required' => 'El campo nombre es obligatorio.',
            // Añade más mensajes personalizados según necesites
        ]);

        Persona::create($validated);

        return redirect()->route('personas.index')->with('success', 'Persona agregada exitosamente.');
    }
}
