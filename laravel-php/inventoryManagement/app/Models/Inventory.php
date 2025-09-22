<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    // Cột có thể gán hàng loạt
    protected $fillable = [
        'product_id',
        'supplier_id',
        'quantity',
        'purchase_price',
        'expiry_date'
    ];

    // Quan hệ với sản phẩm
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Quan hệ với nhà cung cấp
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
