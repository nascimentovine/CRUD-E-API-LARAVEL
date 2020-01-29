<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;
use App\Post;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username');
            $table->string('email');
            $table->string('street');
            $table->string('suite');
            $table->string('city');
            $table->string('zipcode');
            $table->string('lat');
            $table->string('lng');
            $table->string('phone');
            $table->string('website');
            $table->string('name_company');
            $table->string('catchPhrase');
            $table->string('bs');
        });
        User::import();

        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('body',1000);
        });

        Schema::table('posts', function(Blueprint $table) {
            $table->integer('userId')->unsigned();

            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
        });

        Post::import();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
        Schema::dropIfExists('users');
    }
}
