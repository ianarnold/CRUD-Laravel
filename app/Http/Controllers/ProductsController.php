<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductsController extends Controller
{
    
    public function registerProductView()
    {
        return view('registerproduct');
    }
    public function listProductView()
    {
        $products = DB::select('select * from products');   
        return view('listProducts', ['products'=>$products]);
    }

    public function registerProduct(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required|min:1|max:300',
            'value' => 'required|numeric',
            'quantity' => 'required|numeric',
            'bar_code' => 'required|numeric|unique:products'
        ],
        [
            'name.required' => 'O campo NOME é obrigatório.',
            'description.required' => 'O campo DESCRIÇÃO é obrigatório.',
            'value.required' => 'O campo VALOR é obrigatório.',  
            'quantity.required' => 'O campo QUANTIDADE é obrigatório.',
            'bar_code.required' => 'O campo CÓDIGO DE BARRAS é obrigatório.',
            'bar_code.numeric' => 'O campo CÓDIGO DE BARRAS deve ser um número.',
            'bar_code.unique' => 'Esse código de barras já foi cadastrado.',
            'quantity.numeric' => 'O campo QUANTIDADE deve ser um número.',
            'value.numeric' => 'O campo VALOR deve ser um número.',
        ]);
        
        Product::create($request->all());
        $products = DB::select('select * from products');   

        return view('listProducts', ['products'=>$products]);
    }

}
