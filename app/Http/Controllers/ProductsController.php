<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    public function registerProductView()
    {
        return view('registerproduct');
    }
    public function listProductView()
    {
        return view('listproducts');
    }

}
