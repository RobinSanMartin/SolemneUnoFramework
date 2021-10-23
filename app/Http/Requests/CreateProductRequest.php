<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'nombre' => 'required|string|max:255|min:5',
            'codigo' => 'required|alpha_num|max:50|min:5|',
            'pVenta' => 'required|integer|numeric',
            'cantidad' => 'required||integer|numeric|min:1',
            'sucursal' => 'required|not_in:null',
            'categoria' => 'required|not_in:null'
        ];
    }
}
   