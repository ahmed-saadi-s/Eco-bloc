<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StorePayment extends Model
{
    protected $table = 'store_payments'; // اسم الجدول في قاعدة البيانات

    protected $primaryKey = 'id'; // اسم المفتاح الرئيسي للجدول

    protected $fillable = [
        'store_id', // معرف المتجر
        'amount_due', // المبلغ المستحق
        'amount_paid' // المبلغ المدفوع
    ];

    // تعريف العلاقات إذا كانت هناك
    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id', 'id');
    }
}
