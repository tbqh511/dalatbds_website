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
        * crm_deals
        */
        Schema::create('crm_deals', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('customer_id')->on('crm_customers');
            $table->string('notes', 255);
            $table->enum('status', ['new', 'prospecting', 'negotiating', 'deposit_paid', 'pending_notary', 'win', 'lost']);
            $table->decimal('amount', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crm_deals');
    }
};
