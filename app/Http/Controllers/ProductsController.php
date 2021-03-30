<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterProductRequest;
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

    public function registerProduct(RegisterProductRequest $request)
    {
        Product::create($request->all());
        $products = DB::select('select * from products');   

        return redirect()->route('listProductView');
    }

}
