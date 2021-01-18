<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

            'document_type' => ['required', 'string'],
            'document_number' => ['required', 'string'],
            'surnames' => ['required', 'string','max:50'],
            'cell_number' => ['required', 'string','max:9','min:9'],
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'Este campo es requerido.',

            'email.required'=>'Este campo es requerido.',
            'email.email'=>'No es un correo electronico',
            'email.unique'=>'El correo ya esta registrado.',

            'password.required'=>'la contraseña es requerida',
            'password.min'=>'se requiere de 8 caracteres como minimo',

            'document_type.required'=>'Este campo es requerido.',

            'document_number.required'=>'Este campo es requerido.',
            'surnames.required'=>'Este campo es requerido.',

            'cell_number.required'=>'Este campo es requerido.',
            'cell_number.max'=>'se requiere 9 caracteres.',
            'cell_number.min'=>'se requiere 9 caracteres.',

        ];
    }
}
