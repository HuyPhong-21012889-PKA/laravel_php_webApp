<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create(['name' => 'Sữa hộp Vinamilk']);
        Product::create(['name' => 'Mì Hảo Hảo']);
        Product::create(['name' => 'Đường tinh luyện']);
        Product::create(['name' => 'Gạo ST25']);
    }
}
