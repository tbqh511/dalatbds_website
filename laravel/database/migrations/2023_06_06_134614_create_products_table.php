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
            $table->increments('id');
            $table->string('slug',200)->nullable();
            $table->string('title',255);
            $table->float('area');
            $table->unsignedBigInteger('prices')->default(0);
            $table->decimal('commissions', 5, 2);// percent for commissions
            $table->text('description')->nullable();
            $table->foreignId('legals_id')->on('products_legal');
            $table->double('latitude', 10, 6)->nullable();
            $table->double('longitude', 10, 6)->nullable();
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
