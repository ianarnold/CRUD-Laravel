<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterPeopleRequest extends FormRequest
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
        return 
        [ 
            'name' => 'required',
            'cpf' => 'required|cpf|unique:peoples',
            'email' => 'required|unique:peoples',
            'address' => 'required',
            'age' => 'required|numeric'
        ];
        
    }

    public function messages() 
    {
        return [
            'name.required' => 'O campo NOME é obrigatório.',
            'cpf.required' => 'O campo CPF é obrigatório.',
            'cpf.cpf' => 'CPF incorreto, escreva novamente.',
            'cpf.unique' => 'CPF já cadastrado, escreva novamente.',
            'email.required' => 'O campo EMAIL é obrigatório.',
            'email.unique' => 'EMAIL já cadastrado, escreva novamente.',
            'address.required' => 'O campo ENDEREÇO é obrigatório.',
            'age.required' => 'O campo IDADE é obrigatório.',
            'age.numeric' => 'O campo IDADE deve ser um número.'
        ];
}
}
