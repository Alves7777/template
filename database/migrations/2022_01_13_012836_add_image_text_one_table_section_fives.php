<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageTextOneTableSectionFives extends Migration
{

    public function up()
    {
        Schema::table('section_fives', function (Blueprint $table) {
            $table->string('background')->nullable();
            $table->string('text_one')->nullable();

        });
    }

    public function down()
    {
        Schema::table('section_fives', function (Blueprint $table) {
            $table->dropColumn('background');
            $table->dropColumn('text_one');
        });
    }
}
