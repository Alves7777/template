<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{

    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->decimal('value');
            $table->dateTime('date_item');

            $table->timestamps();
            $table->softDeletes();

//            $table->foreignId('product_id')
//                ->references('id')
//                ->on('products')
//                ->onDelete('cascade');

            $table->unsignedBigInteger('order_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
