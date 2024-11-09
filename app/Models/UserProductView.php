<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProductView extends Model
{
    protected $fillable = ['user_id', 'product_id', 'visit_count']; // إضافة هذا للسماح بتعديل القيمة

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    use HasFactory;
}
