<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('producten.catalogus')->with('products', $products);
    }

    public function view($id)
    {
        $product = Product::findOrFail($id);
        return view('producten.view')->with('product', $product);
    }
}
