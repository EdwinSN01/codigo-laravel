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
            'titulo' => 'required',
            'category_id'=> [ 'required', 'exists:categories,id'],
            'descripcion' => 'required',
            'image' => [ $this->route('servicio') ? 'nullable' : 'required', 'mimes:jpeg,png'],
            //'image' => ['required', 'mimes:jpeg,png'] // registra solo imagenes jpeg y png
        ];
    }

    public function messages(){
        return[
            'titulo.required' => 'Se necesita un Titulo para el servicio',
            'category_id.required' => 'seleccione una categoria para el servicio',
            'descripcion.required' => 'Ingresa una descripcion, es necesaria',
            'image.required' =>'Debes seleccionar una imagen'
        ];
    }
}
