<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function list()
    {
        $products = Product::all();
    
        return view('customer.catalogue',[
            'products' => $products,
        ]);
    }

    public function store()
    {
        $data = request()-> validate([
            'name' => 'required|min:3',
            'type'=> 'required',
            'price'=> 'required',
            
        ]);

        $product = new Product();
        $product->name = request('name');
        $product->type = request('type');
        $product->price = request('price');
        $product->save();  

        return back();
    }
}
