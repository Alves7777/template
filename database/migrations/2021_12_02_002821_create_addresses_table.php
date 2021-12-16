<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{

    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('logradouro', 45)->nullable();
            $table->string('number', 45)->nullable();
            $table->string('city', 45)->nullable();
            $table->string('cep', 45);
            $table->string('complement', 45)->nullable();
            $table->string('state', 45)->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreignId('user_ecommerce_id')
                ->references('id')
                ->on('user_ecommerces')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
