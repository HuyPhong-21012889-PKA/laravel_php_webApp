<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventory;

class InventorySeeder extends Seeder
{
    public function run(): void
    {
        Inventory::create([
            'product_id' => 1,
            'supplier_id' => 1,
            'quantity' => 100,
            'purchase_price' => 15000,
            'expiry_date' => '2025-12-31'
        ]);

        Inventory::create([
            'product_id' => 2,
            'supplier_id' => 2,
            'quantity' => 200,
            'purchase_price' => 3500,
            'expiry_date' => '2026-01-30'
        ]);

        Inventory::create([
            'product_id' => 3,
            'supplier_id' => 3,
            'quantity' => 50,
            'purchase_price' => 12000,
            'expiry_date' => '2025-11-20'
        ]);
    }
}
