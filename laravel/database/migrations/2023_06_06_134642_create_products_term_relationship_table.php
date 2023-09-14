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
        Schema::create('products_term_relationship', function (Blueprint $table) {
            $table->foreignId('product_id')->on('products');
            $table->foreignId('term_taxonomy_id')->on('products_term_taxonomy');
            $table->integer('term_order')->default(0);

            // Primary key
            $table->primary(['product_id', 'term_taxonomy_id']);


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_term_relationship');
    }
};
