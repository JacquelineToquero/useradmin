<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    // Method to list all products
    public function index()
    {
        $products = Product::all(); // Fetch all products
        return view('products.index', compact('products')); // Ensure the view path matches
    }

    // Method to show the create form
    public function create()
    {
        return view('products.create'); // Adjust the view path
    }

    // Method to store a new product
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            // Add other validation rules as needed
        ]);

        // Create a new product
        Product::create($request->all());

        // Redirect with success message
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    // Method to show a single product
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product')); // Adjust the view path
    }

    // Method to show the edit form
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product')); // Adjust the view path
    }

    // Method to update a product
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            // Add other validation rules as needed
        ]);

        // Find the product and update it
        $product = Product::findOrFail($id);
        $product->update($request->all());

        // Redirect with success message
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    // Method to delete a product
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        // Redirect with success message
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
