<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterProductRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required|min:1|max:300',
            'value' => 'required|numeric',
            'quantity' => 'required|numeric',
            'bar_code' => 'required|numeric|unique:products'
        ];
    }

    public function messages() 
    {
        return [
            'name.required' => 'O campo NOME é obrigatório.',
            'description.required' => 'O campo DESCRIÇÃO é obrigatório.',
            'value.required' => 'O campo VALOR é obrigatório.',  
            'quantity.required' => 'O campo QUANTIDADE é obrigatório.',
            'bar_code.required' => 'O campo CÓDIGO DE BARRAS é obrigatório.',
            'bar_code.numeric' => 'O campo CÓDIGO DE BARRAS deve ser um número.',
            'bar_code.unique' => 'Esse código de barras já foi cadastrado.',
            'quantity.numeric' => 'O campo QUANTIDADE deve ser um número.',
            'value.numeric' => 'O campo VALOR deve ser um número.',
        ];
        
    }
}
