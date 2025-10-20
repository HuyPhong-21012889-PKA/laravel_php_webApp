<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\TestAPIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Đây là nơi bạn đăng ký các route cho API. Các route này sẽ được nhóm
| dưới middleware "api" và có prefix mặc định là /api.
|
*/

// ✅ Test route cơ bản (kiểm tra hoạt động API)
Route::get('/ping', function () {
    return response()->json(['message' => 'API is working!']);
});

// ✅ Lấy thông tin người dùng đang đăng nhập (nếu có)
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
|--------------------------------------------------------------------------
| RESTful API Routes
|--------------------------------------------------------------------------
|
| Các route API chính cho 3 bảng: products, suppliers, inventories
| Laravel sẽ tự động tạo đủ 5 method: index, store, show, update, destroy
|
*/

// 🟦 Products API
Route::apiResource('products', ProductController::class);

// 🟩 Suppliers API
Route::apiResource('suppliers', SupplierController::class);

// 🟧 Inventories API
Route::apiResource('inventories', InventoryController::class);

// 🧪 Test API (nếu bạn muốn test riêng controller JSON)
Route::apiResource('test', TestAPIController::class);
