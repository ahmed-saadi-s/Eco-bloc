<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('product_reviews', function (Blueprint $table) {
            $table->id(); // معرف فريد للتقييم
            $table->unsignedBigInteger('product_id'); // معرف المنتج المرتبط بالتقييم
            $table->unsignedInteger('rating'); // التقييم من 1 إلى 5 نجوم
            $table->text('comment')->nullable(); // تعليق المستخدم (اختياري)
            $table->unsignedBigInteger('user_id')->nullable(); // معرف المستخدم إذا كنت ترغب في تقييم المستخدمين
            $table->timestamps(); // توقيت الإنشاء والتحديث

            // إعداد مفتاح الفترة الزمنية
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');


             $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_reviews');
    }
}
