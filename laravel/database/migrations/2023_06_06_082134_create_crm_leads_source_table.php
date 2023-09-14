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
        * crm_leads_source
        */
        Schema::create('crm_leads_source', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('user_id')->on('users');
            $table->string('source_name', 255);
            $table->string('note', 255);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crm_leads_source');
    }
};
