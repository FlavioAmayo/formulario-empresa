<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = DB::table('persona')->get();
        return view('personas.index', ['personas' => $personas]);
    }

    public function create()
    {
        return view('personas.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'cPerApellido' => 'required|string|max:255',
            'cPerNombre' => 'required|string|max:255',
            'cPerDireccion' => 'required|string|max:255',
            'dPerFecNac' => 'required|date',
            'nPerEdad' => 'required|integer',
            'nPerSueldo' => 'required|numeric',
            'nPerEstado' => 'required|boolean',
            'cPerSexo' => 'required|string|max:255',
        ]);

        DB::table('persona')->insert($validatedData);

        return redirect()->route('personas.index');
    }
}
