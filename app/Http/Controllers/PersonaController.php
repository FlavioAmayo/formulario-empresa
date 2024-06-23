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
        ]);

        Persona::create($validated);

        return redirect()->route('personas.index')->with('success', 'Persona agregada exitosamente.');
    }

    public function edit(Persona $persona)
    {
        return view('personas.edit', compact('persona'));
    }

    public function update(Request $request, Persona $persona)
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
        ]);

        $persona->update($validated);

        return redirect()->route('personas.index')->with('success', 'Persona actualizada exitosamente.');
    }

    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('personas.index')->with('success', 'Persona eliminada exitosamente.');
    }
}
