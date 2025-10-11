<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
        return response()->json(Product::all());
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validate dữ liệu từ client
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'sku' => 'required|string|unique:products,sku',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
        ]);

        // Lưu vào database
        $product = Product::create($validated);

        // Trả về JSON response
        return response()->json([
            'message' => 'Product created successfully!',
            'data' => $product
        ], 201);
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'     => 'required|string',
            'sku'      => 'required|string|unique:products,sku,' . $product->id,
            'price'    => 'nullable|numeric',
            'quantity' => 'nullable|integer|min:0',
        ]);

        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
