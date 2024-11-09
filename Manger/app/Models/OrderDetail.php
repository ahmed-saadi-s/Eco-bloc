<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'store_id',
        'quantity',
        'price',
        'name',
        'address',
        'phone_number',
        'building',
        'status'
    ];

    // علاقة التبعية مع جدول الطلب
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // علاقة التبعية مع جدول المنتج
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // علاقة التبعية مع جدول المتجر
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
