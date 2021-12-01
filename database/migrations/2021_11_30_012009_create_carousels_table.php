<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarouselsTable extends Migration
{
    public function up()
    {
        Schema::create('carousels', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('background')->nullable();
            $table->string('photo')->nullable();
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->longText('text')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('carousels');
    }
}
