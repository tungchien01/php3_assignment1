<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
{
    $product = Product::with('category')->findOrFail($id);
    return view('product.show', compact('product'));


}

    public function list() {
        $list = Product::all(); 
        return view('product.list', compact('list'));
    }

}
