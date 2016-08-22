<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
          $table->increments('id');
          $table->string('tag');
          $table->text('title');
          $table->text('summary');
          $table->text('media');
          $table->text('media_source');
          $table->boolean('published')->default(false);
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
        Schema::drop('posts');
    }
}
