<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopBarsTable extends Migration
{

    public function up()
    {
        Schema::create('topbars', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('icon_email')->nullable();
            $table->string('phone');
            $table->string('icon_phone')->nullable();
            $table->string('email');
            $table->string('icon_1')->nullable();
            $table->string('icon_2')->nullable();
            $table->string('icon_3')->nullable();
            $table->string('icon_4')->nullable();
            $table->string('color_top_bar')->default('#EA1010');
            $table->softDeletes();
            $table->timestamps();

        });
    }


    public function down()
    {
        Schema::dropIfExists('topbars');
    }
}
