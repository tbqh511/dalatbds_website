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
        * crm_customers
        */
        Schema::create('crm_customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name', 255);
            $table->string('gender', 10);
            $table->unsignedInteger('age');
            $table->string('company', 255)->nullable();
            $table->string('about_customer', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crm_customers');
    }
};
