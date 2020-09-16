<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePosts extends Migration
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
            $table->string('title', 250)->unique();
            $table->string('short_description', 800);
            $table->string('audio', 800)->nullable();
            $table->string('video', 800)->nullable();
            $table->enum('slider', [0,1])->default(0);
            $table->enum('type', ['audio','video','simple'])->default('simple');
            $table->text('description');
            $table->string('author');
            $table->string('slug');
            $table->string('img');
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
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
}
