<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionFoursTable extends Migration
{

    public function up()
    {
        Schema::create('section_fours', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title')->nullable();
            $table->string('color_title')->nullable();
            $table->longText('text')->nullable();

            $table->string('icon')->nullable();
            $table->string('color_icon')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('sub_text')->nullable();
            $table->string('url')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('section_fours');
    }
}
