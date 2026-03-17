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
        Schema::table('videos', function (Blueprint $table) {
            $table->unsignedBigInteger('creator_id')->nullable()->after('plan_id');
            $table->enum('uploaded_by', ['admin', 'creator'])->default('admin')->after('creator_id');
        });
    }

    public function down()
    {
        Schema::table('videos', function (Blueprint $table) {
            $table->dropColumn(['creator_id', 'uploaded_by']);
        });
    }
};
