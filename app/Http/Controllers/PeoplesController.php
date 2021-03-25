<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
use Illuminate\Support\Facades\DB;

class PeoplesController extends Controller
{
    
    public function registerPeopleView()
    {
        return view('registerpeople');
    }

    public function registerPeople(Request $request) 
    {
        $request->validate([
            'name' => 'required',
            'cpf' => 'required|cpf|unique:peoples',
            'email' => 'required|unique:peoples',
            'address' => 'required',
            'age' => 'required|numeric'
        ],
        [
            'name.required' => 'O campo NOME é obrigatório.',
            'cpf.required' => 'O campo CPF é obrigatório.',
            'cpf.cpf' => 'CPF incorreto, escreva novamente.',
            'cpf.unique' => 'CPF já cadastrado, escreva novamente.',
            'email.required' => 'O campo EMAIL é obrigatório.',
            'email.unique' => 'EMAIL já cadastrado, escreva novamente.',
            'address.required' => 'O campo ENDEREÇO é obrigatório.',  
            'age.required' => 'O campo IDADE é obrigatório.',
            'age.numberic' => 'O campo IDADE deve ser um número.'
        ]);
        
        People::create($request->all());
        $peoples = DB::select('select * from peoples');   

        return view('listPeoples', ['peoples'=>$peoples]);
    }

    public function listPeopleView() 
    {
        $peoples = DB::select('select * from peoples');   
        return view('listPeoples', ['peoples'=>$peoples]);
    }

}
