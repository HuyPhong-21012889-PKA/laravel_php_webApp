<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestAPIController extends Controller
{
    /**
     *  Lấy danh sách toàn bộ Inventory
     */
    public function index()
    {
        $inventories = Inventory::all();
        return response()->json([
            'status' => 'success',
            'data' => $inventories
        ], 200);
    }

    /**
     *  Thêm mới 1 bản ghi Inventory
     */
    public function store(Request $request)
    {
        //  Validate dữ liệu đầu vào
        $validator = Validator::make($request->all(), [
            'product_id' => 'required|exists:products,id',
            'supplier_id' => 'required|exists:suppliers,id',
            'quantity' => 'required|integer|min:1',
            'purchase_price' => 'required|numeric|min:0',
            'expiry_date' => 'nullable|date'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        //  Tạo mới bản ghi
        $inventory = Inventory::create($validator->validated());

        return response()->json([
            'status' => 'success',
            'message' => 'Inventory item created successfully!',
            'data' => $inventory
        ], 201);
    }

    /**
     *  Hiển thị 1 Inventory theo id
     */
    public function show(string $id)
    {
        $inventory = Inventory::find($id);

        if (!$inventory) {
            return response()->json([
                'status' => 'error',
                'message' => 'Inventory not found.'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $inventory
        ], 200);
    }

    /**
     *  Cập nhật thông tin Inventory
     */
    public function update(Request $request, string $id)
    {
        $inventory = Inventory::find($id);

        if (!$inventory) {
            return response()->json([
                'status' => 'error',
                'message' => 'Inventory not found.'
            ], 404);
        }

        $inventory->update($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Inventory updated successfully.',
            'data' => $inventory
        ], 200);
    }

    /**
     *  Xóa Inventory
     */
    public function destroy(string $id)
    {
        $inventory = Inventory::find($id);

        if (!$inventory) {
            return response()->json([
                'status' => 'error',
                'message' => 'Inventory not found.'
            ], 404);
        }

        $inventory->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Inventory deleted successfully.'
        ], 200);
    }
}
