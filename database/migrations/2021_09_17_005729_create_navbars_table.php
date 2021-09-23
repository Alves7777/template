<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavbarsTable extends Migration
{

    public function up()
    {
        Schema::create('navbars', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('logo');
            $table->string('title_1')->nullable();
            $table->string('title_2')->nullable();
            $table->string('title_3')->nullable();
            $table->string('title_4')->nullable();
            $table->string('title_5')->nullable();
            $table->string('title_6')->nullable();
            $table->string('title_7')->nullable();
            $table->string('title_8')->nullable();
            $table->string('title_9')->nullable();
            $table->string('title_10')->nullable();
            $table->string('title_11')->nullable();
            $table->softDeletes();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('navbars');
    }
}
