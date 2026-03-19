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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('to_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('from_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->datetime('date_time')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
