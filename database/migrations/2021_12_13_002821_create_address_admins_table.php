<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressAdminsTable extends Migration
{

    public function up()
    {
        Schema::create('address_admins', function (Blueprint $table) {
            $table->id();
            $table->string('logradouro', 45)->nullable();
            $table->string('number', 45)->nullable();
            $table->string('city', 45)->nullable();
            $table->string('cep', 45);
            $table->string('complement', 45)->nullable();
            $table->string('state', 45)->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreignId('admin_id')
                ->references('id')
                ->on('admins')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('address_admins');
    }
}
