<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'name'=>'required|max:80',
            'price'=>'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'El nombre del producto es requerido',
            'name.max'=>'Maximo de 80 caracteres',

            'price.required'=>'El precio es requerido',
            'price.integer'=>'Debe de ser un numero entero'
        ];
    }
}
