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
        * Run the migrations.
        */
        Schema::create('crm_customer_address', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('customer_id')->on('crm_customers');
            $table->text('street_number',255);
            $table->foreignId('street_code')->on('locations_streets');
            $table->foreignId('ward_code')->on('locations_wards');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crm_customer_address');
    }
};
