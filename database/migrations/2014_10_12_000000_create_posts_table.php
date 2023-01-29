<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->longText('title')->nullable();
            $table->longText('description')->nullable();
            $table->longText('excerpt')->nullable();
            $table->longText('keywords')->nullable();
            $table->longText('thumbnail')->nullable();
            $table->longText('tags')->nullable();
            $table->longText('category')->nullable();
            $table->longText('author_name')->nullable();
            $table->longText('author_image')->nullable();
            $table->longText('meta_image')->nullable();
            $table->longText('meta_title')->nullable();
            $table->longText('meta_description')->nullable();
            $table->longText('meta_slug')->nullable();
            $table->longText("comments")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
