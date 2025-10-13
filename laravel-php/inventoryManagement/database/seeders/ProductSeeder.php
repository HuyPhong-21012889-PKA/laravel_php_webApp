<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Sữa hộp Vinamilk',
            'sku' => 'VINAMILK001', 
            'price' => 12000,
            'quantity' => 100,
        ]);

        Product::create([
            'name' => 'Bánh mì đặc ruột',
            'sku' => 'BM001',
            'price' => 10000,
            'quantity' => 50,
        ]);

        Product::create([
            'name' => 'Cây xây dựng',
            'sku' => 'CXD001',
            'price' => 15000,
            'quantity' => 200,
        ]);
    }
}
