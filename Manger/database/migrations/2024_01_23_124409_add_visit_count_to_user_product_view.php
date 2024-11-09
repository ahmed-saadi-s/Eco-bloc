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
        Schema::table('user_product_views', function (Blueprint $table) {
            $table->unsignedInteger('visit_count')->default(0);
        });
    }

    public function down()
    {
        Schema::table('user_product_views', function (Blueprint $table) {
            $table->dropColumn('visit_count');
        });
    }
};
