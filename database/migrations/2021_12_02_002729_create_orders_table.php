<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{

    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date_order');
            $table->string('status', 4);

            $table->timestamps();
            $table->softDeletes();

            $table->foreignId('admin_id');

        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
