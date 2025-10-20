<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;

Route::get('/', function() {
    return redirect()->route('inventories.index');
});

Route::resource('inventories', InventoryController::class);
Route::resource('products', ProductController::class);
Route::resource('suppliers', SupplierController::class);

