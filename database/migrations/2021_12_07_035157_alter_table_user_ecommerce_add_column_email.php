<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableUserEcommerceAddColumnEmail extends Migration
{

    public function up()
    {
        Schema::table('user_ecommerces', function (Blueprint $table) {
            $table->string('email',150);
        });
    }

    public function down()
    {
        //
    }
}
