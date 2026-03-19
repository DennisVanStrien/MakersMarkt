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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->integer('owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('specification_id')->references('id')->on('specifications')->onDelete('cascade');
            $table->enum('status', ['Wordt gemaakt', 'Afgerond'])->default('Wordt gemaakt');
            $table->integer('review_id')->references('id')->on('reviews')->onDelete('cascade');
            $table->boolean('marked_for_moderation')->default(false);
            $table->enum('type', ['Hobby', 'Wonen', 'Sport', 'Sieraden', 'Kunst', 'Knuffels', 'Overig'])->default('Overig');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
