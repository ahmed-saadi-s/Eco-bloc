<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = [
        'product_id', // معرف المنتج المرتبط بالصورة
        'image_path', // مسار الصورة في النظام
        // يمكنك إضافة المزيد من الأعمدة إذا كنت بحاجة إليها
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    use HasFactory;
}
