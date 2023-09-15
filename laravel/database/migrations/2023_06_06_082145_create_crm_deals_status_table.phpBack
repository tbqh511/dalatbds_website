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
        * crm_deal_status
        */
        Schema::create('crm_deals_status', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('deal_id')->on('crm_deals');
            $table->string('status', 255)->default('new')->comment('new, prospecting, negotiating, deposit_paid, pending_notary, win, lost');
            $table->string('note', 255)->nullable();
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crm_deals_status');
    }
};
