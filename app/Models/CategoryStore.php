<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryStore extends Model
{
    protected $table = 'category_store'; // افتراضياً Laravel يفترض اسم الجدول بالجمع و النكرة للموديل ولكن لو تم اختيار اسم الجدول مختلف فهنا يجب تعريفه

    // تعريف العلاقة بين الفئات والمتاجر
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function stores()
    {
        return $this->belongsToMany(Store::class);
    }
}
