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
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();

            $table->string('title');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->text('excerpt')->nullable(false);
            $table->text('content')->nullable(false);

            $table->unsignedBigInteger('published_by')->nullable();
            $table->timestamps();

            // IDX
            $table->index('user_id', 'post_user_post_idx');
            $table->index('category_id', 'post_category_post_idx');
            $table->index('published_by', 'post_user_published_idx');

            // FK
            $table->foreign('user_id', 'post_user_post_fk')->references('id')->on('users')->nullOnDelete();
            $table->foreign('category_id', 'post_category_post_fk')->references('id')->on('categories')->nullOnDelete();
            $table->foreign('published_by', 'post_user_published_fk')->references('id')->on('users')->nullOnDelete();
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
