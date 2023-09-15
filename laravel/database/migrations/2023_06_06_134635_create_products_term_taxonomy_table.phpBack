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
        Schema::create('products_term_taxonomy', function (Blueprint $table) {
            $table->increments('term_taxonomy_id');
            $table->foreignId('term_id')->on('products_term');
            $table->string('taxonomy', 32);
            $table->longText('description')->nullable();
            $table->integer('parent')->nullable();
            $table->bigInteger('count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_term_taxonomy');
    }
};
