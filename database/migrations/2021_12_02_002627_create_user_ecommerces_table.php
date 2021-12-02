<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserEcommercesTable extends Migration
{

    public function up()
    {
        Schema::create('user_ecommerces', function (Blueprint $table) {
            $table->id();
            $table->string('login',100)->unique();
            $table->string('name', 50);
            $table->string('password',255);
            $table->timestamps();
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('user_ecommerces');
    }
}
