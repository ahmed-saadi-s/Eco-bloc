<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order   _details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('store_id');
            $table->integer('quantity');
            $table->decimal('price', 8, 2);
            $table->string('name')->nullable();  // اسم
            $table->string('address')->nullable();  // عنوان
            $table->string('phone_number')->nullable();  // رقم الهاتف
            $table->string('building')->nullable();  // الطابق
            $table->enum('status', ['Rejected', 'Pending', 'Delivered', 'Accepted'])->default('Pending');
            $table->timestamps();

            // تعريف العلاقة بين جدول تفاصيل الطلب وجدول الطلبات وجدول المنتجات
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_details');
    }
}
