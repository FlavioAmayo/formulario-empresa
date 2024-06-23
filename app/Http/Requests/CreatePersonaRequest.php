namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePersonaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'cPerApellido' => 'required|string|max:255',
            'cPerNombre' => 'required|string|max:255',
            'cPerDireccion' => 'required|string|max:255',
            'dPerFecNac' => 'required|date',
            'nPerEdad' => 'required|integer|min:0',
            'nPerSueldo' => 'required|numeric|min:0',
            'cPerRnd' => 'required|string|max:255',
            'nPerEstado' => 'required|integer',
            'cPerSexo' => 'required|string|max:1',
        ];
    }

    public function messages()
    {
        return [
            'cPerApellido.required' => 'El campo apellido es obligatorio.',
            'cPerNombre.required' => 'El campo nombre es obligatorio.',
            'cPerDireccion.required' => 'El campo dirección es obligatorio.',
            'dPerFecNac.required' => 'El campo fecha de nacimiento es obligatorio.',
            'nPerEdad.required' => 'El campo edad es obligatorio.',
            'nPerSueldo.required' => 'El campo sueldo es obligatorio.',
            'cPerRnd.required' => 'El campo RND es obligatorio.',
            'nPerEstado.required' => 'El campo estado es obligatorio.',
            'cPerSexo.required' => 'El campo sexo es obligatorio.',
        ];
    }
}
