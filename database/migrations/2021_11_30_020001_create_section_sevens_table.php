<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionSevensTable extends Migration
{
    public function up()
    {
        Schema::create('section_sevens', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title')->nullable();
            $table->string('color_title')->nullable();
            $table->longText('text')->nullable();

            $table->string('sub_title')->nullable();
            $table->longText('sub_text')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('section_sevens');
    }
}
