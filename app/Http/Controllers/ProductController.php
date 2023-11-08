<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
public function index(){
    $products=Product::all();
    return view('products.index',['products'=>$products]);
    
} 
public function create(){
    return view("products.create");
    
}

public function store(Request $request){
    $data = $request->validate([
        'name' => 'required|string',
        'qty' => 'required|numeric',
        'price' => 'required|numeric', // Assuming 'price' should be numeric, adjust as needed
        'description' => 'required|string',
    ]);

    $newProduct = Product::create($data);

    return redirect(route('product.index'));
}
public function edit(Product $product){
//dd($product);
return view('products.edit',['product'=>$product]);
}
public function update(Request $request,Product $product){
     $data = $request->validate([
        'name' => 'required|string',
        'qty' => 'required|numeric',
        'price' => 'required|numeric', // Assuming 'price' should be numeric, adjust as needed
        'description' => 'required|string',
    ]);
    $product->update($data);
    return redirect(route('product.index'))->with('success','Product has been Updated successfully');

}
public function delete(Product $product){
    $product->delete();
     return redirect(route('product.index'))->with('success','Product has been deleted ');

}
}
