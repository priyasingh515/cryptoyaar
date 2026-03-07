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
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('order');
            $table->string('category_image')->nullable();
            $table->boolean('is_expert_category')->default(0);
        });
    }

    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            
            $table->integer('order')->nullable();
            $table->dropColumn('category_image');
            $table->dropColumn('is_expert_category');
        });
    }
};
