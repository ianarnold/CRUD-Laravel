<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ProductsController extends Controller
{
    public function __construct()
    {
        $this->product = new Product();
    }
    
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

    public function editProductView($id)
    { 
        $product = Product::findOrFail($id);
        return view('editProduct', ['product' => $product]);
    }

    public function editProduct(RegisterProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'value' => $request->input('value'),
            'quantity' => $request->input('quantity'),
            'bar_code' => $request->input('bar_code')
        ]);

        return redirect()->route('listProductView');
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('listProductView');
    }

    protected function getProduct($id)
    {
        return $this->product->find($id);
    }

}
