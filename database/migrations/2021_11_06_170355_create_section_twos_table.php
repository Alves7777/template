<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionTwosTable extends Migration
{
    public function up()
    {
        Schema::create('section_twos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('icon')->nullable();
            $table->string('color_icon')->default('#FFFFFF')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('section_twos');
    }
}
