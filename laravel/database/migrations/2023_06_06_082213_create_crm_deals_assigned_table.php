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
        Schema::create('crm_deals_assigned', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('deal_id')->on('crm_deals');
            $table->foreignId('user_id')->on('users');
            $table->string('note', 255);
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crm_deals_assigned');
    }
};
