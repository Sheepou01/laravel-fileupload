<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('filename')->nullable();
            $table->string('path')->nullable();
            $table->string('url')->nullable();
            $table->integer('size')->nullable();
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();
            $table->string('thumb_path')->nullable();
            $table->string('thumb_url')->nullable();
            $table->integer('thumb_width')->nullable();
            $table->integer('thumb_height')->nullable();

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
        Schema::dropIfExists('photos');
    }
}
