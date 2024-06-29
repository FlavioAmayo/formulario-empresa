<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;
use Mail;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contacto.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'mensaje' => 'required|string',
        ]);

        $contacto = Contacto::create($validated);

        Mail::send('emails.contacto', ['contacto' => $contacto], function ($m) use ($contacto) {
            $m->from('famayo@unitru.edu.pe', 'Empresa-Agregar-Persona');
            $m->to($contacto->email, $contacto->nombre)->subject('Gracias por tu mensaje');
        });

        return redirect()->route('contacto.index')->with('success', 'Mensaje enviado correctamente');
    }
}
