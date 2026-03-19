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
        Schema::create('specification', function (Blueprint $table) {
            $table->id();
            $table->string('materials');
            $table->decimal('production_time', 8, 2);
            $table->enum('complexity', ['Laag', 'Gemiddeld', 'Hoog'])->default('Laag');
            $table->enum('sustainability', ['Laag', 'Gemiddeld', 'Hoog'])->default('Laag');
            $table->string('unique_properties')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specification');
    }
};
