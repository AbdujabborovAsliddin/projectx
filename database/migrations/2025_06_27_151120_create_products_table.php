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
            $table->foreignId('direction_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('volume')->nullable();     // e.g., 1L, 0.5L
            $table->string('material')->nullable();   // e.g., Plastic, Glass, Tetra Pak
            $table->integer('price')->nullable();     // Price in UZS
            $table->integer('amount')->nullable();     // Price in UZS
            $table->boolean('is_available')->default(true);
    
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
