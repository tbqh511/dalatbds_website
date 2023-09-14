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
        // Schema::table('locations_streets', function (Blueprint $table) {
        //     // Xóa ràng buộc khóa ngoại hiện tại
        //     $table->dropForeign(['district_code']);
        //     $table->dropForeign(['ward_code']);

        //     // Thay đổi kiểu khóa ngoại thành nullable
        //     $table->string('district_code', 20)->nullable()->change();
        //     $table->string('ward_code', 20)->nullable()->change();

        //     // Tạo lại ràng buộc khóa ngoại với kiểu nullable
        //     $table->foreign('district_code')->references('code')->on('locations_districts')->onUpdate('CASCADE')->onDelete('CASCADE');
        //     $table->foreign('ward_code')->references('code')->on('locations_wards')->onUpdate('CASCADE')->onDelete('CASCADE');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('locations_streets', function (Blueprint $table) {
        //     // Xóa ràng buộc khóa ngoại hiện tại
        //     $table->dropForeign(['district_code']);
        //     $table->dropForeign(['ward_code']);

        //     // Thay đổi kiểu khóa ngoại về không nullable
        //     $table->string('district_code', 20)->change();
        //     $table->string('ward_code', 20)->change();

        //     // Tạo lại ràng buộc khóa ngoại không nullable
        //     $table->foreign('district_code')->references('code')->on('locations_districts')->onUpdate('CASCADE')->onDelete('CASCADE');
        //     $table->foreign('ward_code')->references('code')->on('locations_wards')->onUpdate('CASCADE')->onDelete('CASCADE');
        // });
    }
};
