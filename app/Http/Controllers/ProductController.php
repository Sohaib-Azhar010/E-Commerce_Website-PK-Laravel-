<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create()
    {
        return view('Admin.create_product');
    }



    public function store(Request $request)
{
    // Validate form fields
    $request->validate([
        'product_type' => 'required',
        'category' => 'required',
        'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'name' => 'required',
        'price' => 'required',
        'serial_no' => 'required',
        'quantity' => 'required|integer|min:1',
    ]);

    // Move the uploaded image to the public/images directory
    $imageName = time().'.'.$request->file('picture')->extension();
    $request->file('picture')->move(public_path('images'), $imageName);

    // Create a new Product instance
    $product = new Product();

    // Set product properties
    $product->product_type = $request->input('product_type');
    $product->category = $request->input('category');
    $product->picture = 'images/'.$imageName; // Store the file path
    $product->name = $request->input('name');
    $product->price = $request->input('price');
    $product->serial_no = $request->input('serial_no');
    $product->quantity = $request->input('quantity');

    // Save the product to the database
    $product->save();

    return redirect()->route('pm')->with('success', 'Product added successfully');
}


    public function index()
    {
        $products = Product::all(); // Fetch all products from the database
        return view('Admin.inventory', ['products' => $products]);
    }

    

public function destroy($id)
{
    $product = Product::find($id);

    if (!$product) {
        return redirect()->back()->with('error', 'Product not found.');
    }

    $product->delete();

    return redirect()->back()->with('success', 'Product deleted successfully.');
}




public function showAccessoriesPage()
{
    $accessories = Product::where('product_type', 'accessories')->get();
    // dd($accessories);

    return view('accessories', ['products' => $accessories]);
}


public function showClothingPage()
{
    $c = Product::where('product_type', 'clothes')->get();
    // dd($accessories);

    return view('clothing', ['products' => $c]);
}



}
