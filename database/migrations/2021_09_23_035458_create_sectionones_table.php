<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionOnesTable extends Migration
{

    public function up()
    {
        Schema::create('sectionones', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->string('color_title')->default('#000000')->nullable();
            $table->string('description');
            $table->string('text_button')->nullable();
            $table->string('color_button')->default('#EA1010')->nullable();
            $table->string('url_button')->nullable();
            $table->string('text_video')->nullable();
            $table->string('url_video')->nullable();
            $table->string('icon_video')->nullable();
            $table->string('color_icon_video')->default('#EA1010')->nullable();
            $table->string('color_text_video')->default('#000000')->nullable();
            $table->string('image')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sectionones');
    }
}
