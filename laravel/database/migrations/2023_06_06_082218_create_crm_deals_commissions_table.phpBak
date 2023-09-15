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
        * crm_deals_commissions
        */
        Schema::create('crm_deals_commissions', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('deal_id')->on('crm_deals');
            $table->decimal('sale_commission', 8, 2)->nullable();
            $table->decimal('app_commission', 8, 2)->nullable();
            $table->decimal('lead_commission', 8, 2)->nullable();
            $table->decimal('owner_commission', 8, 2)->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crm_deals_commissions');
    }
};
