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
        /**
        * crm_deal_products
        */
        Schema::create('crm_deals_products', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('deal_id')->on('crm_deals');
            $table->foreignId('product_id')->on('products');
            $table->string('note', 255);
            $table->string('status', 255)->default('Sent');
            $table->string('reason_dont_like', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crm_deals_products');
    }
};
