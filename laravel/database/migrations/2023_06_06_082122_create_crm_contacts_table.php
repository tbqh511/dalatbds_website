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
        Schema::create('crm_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('customer_id')->on('crm_customers');
            $table->string('contact_type', 255);
            $table->string('value', 255);
            $table->string('notes', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crm_contacts');
    }
};
