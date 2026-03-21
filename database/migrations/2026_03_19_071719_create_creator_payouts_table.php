<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('creator_payouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('creator_id');
            $table->decimal('total_watch_time', 10, 2);
            $table->decimal('payout_amount', 10, 2);
            $table->integer('month');
            $table->integer('year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creator_payouts');
    }
};
