<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'apellido' => 'required|string|max:255',
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'edad' => 'required|integer',
            'sueldo' => 'required|numeric',
            'estado' => 'required|string|max:255',
            'sexo' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'apellido.required' => 'El apellido es obligatorio.',
            'nombre.required' => 'El nombre es obligatorio.',
            'direccion.required' => 'La dirección es obligatoria.',
            'fecha_nacimiento.required' => 'La fecha de nacimiento es obligatoria.',
            'edad.required' => 'La edad es obligatoria.',
            'sueldo.required' => 'El sueldo es obligatorio.',
            'estado.required' => 'El estado es obligatorio.',
            'sexo.required' => 'El sexo es obligatorio.',
        ];
    }
}
