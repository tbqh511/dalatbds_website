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
        Schema::table('products_legal', function (Blueprint $table) {
            $table->unsignedInteger('parent_id')->nullable()->after('id');
            // Khai báo khóa ngoại
            $table->foreign('parent_id')->references('id')->on('products_legal')->onDelete('cascade');
            $table->unsignedInteger('order')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products_legal', function (Blueprint $table) {
            $table->dropForeign(['parent_id']);
            $table->dropColumn('parent_id');
            $table->dropColumn('order');
        });
    }
};
