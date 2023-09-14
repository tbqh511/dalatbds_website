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
        * crm_leads
        */
        Schema::create('crm_leads', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId ('user_id')->on('users');
            $table->foreignId('customer_id')->on('crm_customers');
            $table->foreignId('source_id')->on('crm_leads_source');;
            $table->decimal('demand_rate_min')->nullable();
            $table->decimal('demand_rate_max')->nullable();
            $table->string('property_purpose');
            $table->string('demand_product_type',255);
            $table->string('demand_legal',255);
            $table->string('notes',255);
            $table->enum('status', ['new', 'contacted', 'Converted', 'bad-contact', 'lost'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crm_leads');
    }
};
