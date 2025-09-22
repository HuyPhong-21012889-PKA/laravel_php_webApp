<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        Supplier::create([
            'name' => 'Công ty Vinamilk',
            'phone' => '0901234567',
            'address' => 'TP. Hồ Chí Minh'
        ]);

        Supplier::create([
            'name' => 'Acecook Việt Nam',
            'phone' => '0907654321',
            'address' => 'Hà Nội'
        ]);

        Supplier::create([
            'name' => 'Đường Biên Hòa',
            'phone' => '0912345678',
            'address' => 'Đồng Nai'
        ]);
    }
}
