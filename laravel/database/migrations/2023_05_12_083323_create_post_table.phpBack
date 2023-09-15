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
        Schema::create('posts', function (Blueprint $table) {
            $table->Increments('id');
            $table->bigInteger('post_author')->nullable();
            $table->dateTime('post_date')->nullable();
            $table->dateTime('post_date_gmt')->nullable();
            $table->longText('post_content')->nullable();
            $table->string('post_title')->nullable();
            $table->string('post_name',200)->nullable(); // replace for slug columns
            $table->text('post_excerpt')->nullable();
            $table->string('post_status')->default('publish');
            $table->string('comment_status')->default('open');
            $table->dateTime('post_modified')->nullable();
            $table->dateTime('post_modified_gmt')->nullable();
            $table->foreignId('post_parent')->on('posts')->nullable();
            $table->integer('menu_order')->default(0);
            $table->integer('post_type')->unsigned()->index();
            $table->integer('comment_count')->default(0);
            $table->timestamps();


            $table->index(['post_date', 'post_type', 'post_status'], 'post_index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
