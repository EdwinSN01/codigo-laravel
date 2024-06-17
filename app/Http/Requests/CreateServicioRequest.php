<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateServicioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titulo' => 'required',
            'descripcion' => 'required'
        ];
    }

    public function messages(){
        return[
            'titulo.required' => 'Se necesita un Titulo para el servicio',
            'descripcion.required' => 'Ingresa una descripcion, es necesaria'
        ];
    }
}
