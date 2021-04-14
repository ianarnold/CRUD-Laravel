<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterProductRequest;
use App\Http\Requests\UpdateProductRequest;
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
        $products = Product::paginate(15);
        return view('listproducts', ['products'=>$products]);
    }

    public function registerProduct(RegisterProductRequest $request)
    {
        $data = $request->only(['name', 'description', 'value', 'quantity', 'bar_code']);
        Product::create($data);  
        return redirect()->route('listProductView');
    }

    public function editProductView(Product $product)
    { 
        return view('editproduct', ['product' => $product]);
    }

    public function editProduct(UpdateProductRequest $request, Product $product)
    {
        $data = $request->only(['name', 'description', 'value', 'quantity', 'bar_code']);
        $product->update($data);
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
