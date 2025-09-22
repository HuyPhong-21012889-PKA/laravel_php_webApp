<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    // Hiển thị danh sách tồn kho
    public function index()
    {
        $inventories = Inventory::with(['product', 'supplier'])->get();
        return view('inventories.index', compact('inventories'));
    }

    // Form thêm mới
    public function create()
    {
        $products = Product::all();
        $suppliers = Supplier::all();
        return view('inventories.create', compact('products', 'suppliers'));
    }

    // Lưu dữ liệu mới
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'supplier_id' => 'required|exists:suppliers,id',
            'quantity' => 'required|integer|min:0',
            'purchase_price' => 'required|numeric|min:0',
            'expiry_date' => 'nullable|date'
        ]);

        Inventory::create($request->all());

        return redirect()->route('inventories.index')
                         ->with('success', 'Inventory added successfully.');
    }

    // Hiển thị chi tiết
    public function show(Inventory $inventory)
    {
        return view('inventories.show', compact('inventory'));
    }

    // Form chỉnh sửa
    public function edit(Inventory $inventory)
    {
        $products = Product::all();
        $suppliers = Supplier::all();
        return view('inventories.edit', compact('inventory', 'products', 'suppliers'));
    }

    // Cập nhật dữ liệu
    public function update(Request $request, Inventory $inventory)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'supplier_id' => 'required|exists:suppliers,id',
            'quantity' => 'required|integer|min:0',
            'purchase_price' => 'required|numeric|min:0',
            'expiry_date' => 'nullable|date'
        ]);

        $inventory->update($request->all());

        return redirect()->route('inventories.index')
                         ->with('success', 'Inventory updated successfully.');
    }

    // Xóa dữ liệu
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return redirect()->route('inventories.index')
                         ->with('success', 'Inventory deleted successfully.');
    }
}
