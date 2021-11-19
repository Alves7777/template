<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionThreesTable extends Migration
{

    public function up()
    {
        Schema::create('section_threes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title')->nullable();
            $table->longText('text')->nullable();
            $table->string('photo')->nullable();

            $table->string('title_two')->nullable();
            $table->longText('text_two')->nullable();


            $table->string('sub_title')->nullable();
            $table->longText('sub_text')->nullable();
            $table->string('icon')->nullable();
            $table->string('color_icon')->nullable();

            $table->longText('text_three')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('section_threes');
    }
}
