<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories'; // اسم الجدول

    protected $fillable = [
        'name',
    ];

    // العلاقات مثل العلاقات بين الجداول تضاف هنا
}
