<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIframeTableContacts extends Migration
{

    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('iframe')->nullable();
        });
    }

    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn('background');
        });
    }
}
