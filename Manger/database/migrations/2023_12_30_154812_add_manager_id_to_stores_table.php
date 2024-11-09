<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('stores', function (Blueprint $table) {
            $table->unsignedBigInteger('managerID')->nullable();

            // إضافة العلاقة الخارجية
            $table->foreign('managerID')
                ->references('id')->on('users')
                ->onDelete('set null'); // يمكنك تحديد السلوك المناسب عند حذف العنصر المرتبط
        });
    }

    public function down()
    {
        Schema::table('stores', function (Blueprint $table) {
            // إزالة العلاقة الخارجية
            $table->dropForeign(['managerID']);

            // إزالة العمود إذا كنت ترغب في ذلك
            $table->dropColumn('managerID');
        });
    }

};
