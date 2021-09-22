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
            $table->string('title_1');
            $table->string('title_2');
            $table->string('title_3');
            $table->string('title_4');
            $table->string('title_5');
            $table->string('title_6');
            $table->string('title_7');
            $table->string('title_8');
            $table->string('title_9');
            $table->string('title_10');
            $table->string('title_11');
            $table->softDeletes();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('navbars');
    }
}
