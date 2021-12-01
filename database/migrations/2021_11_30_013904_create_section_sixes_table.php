<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionSixesTable extends Migration
{

    public function up()
    {
        Schema::create('section_sixes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title')->nullable();
            $table->string('color_title')->nullable();
            $table->longText('text')->nullable();

            $table->string('image')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('sub_text')->nullable();
            $table->string('link_twitter')->nullable();
            $table->string('link_facebook')->nullable();
            $table->string('link_instagram')->nullable();
            $table->string('link_linkedin')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('section_sixes');
    }
}
