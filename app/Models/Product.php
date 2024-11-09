<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name', 'price', 'store_id','description', 'quantity', 'image_path',
    ];
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function views()
    {
        return $this->hasMany(UserProductView::class);
    }

    public function purchases()
    {
        return $this->hasMany(UserProductPurchase::class);
    }
    use HasFactory;
}
