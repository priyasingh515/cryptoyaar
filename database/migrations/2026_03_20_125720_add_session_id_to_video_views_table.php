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
        Schema::table('video_views', function (Blueprint $table) {
            $table->string('session_id')->nullable()->after('video_id');
        });
    }

    public function down()
    {
        Schema::table('video_views', function (Blueprint $table) {
            $table->dropColumn('session_id');
        });
    }
};
