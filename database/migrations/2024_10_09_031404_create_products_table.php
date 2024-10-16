<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // This will create an auto-incrementing ID field
            $table->string('product_name');
            $table->string('description')->nullable();
            $table->decimal('retail_price', 8, 2);
            $table->decimal('wholesale_price', 8, 2);
            $table->string('origin', 2);
            $table->integer('quantity');
            $table->string('photo')->nullable();
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
