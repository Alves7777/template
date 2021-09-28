<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLinksTableNavbars extends Migration
{

    public function up()
    {
        Schema::table('navbars', function (Blueprint $table) {
            $table->string('link_title_1')->nullable();
            $table->string('link_title_2')->nullable();
            $table->string('link_title_3')->nullable();
            $table->string('link_title_4')->nullable();
            $table->string('link_title_5')->nullable();
            $table->string('link_title_6')->nullable();
            $table->string('link_title_7')->nullable();
            $table->string('link_title_8')->nullable();
            $table->string('link_title_9')->nullable();
            $table->string('link_title_10')->nullable();
            $table->string('link_title_11')->nullable();
        });
    }

    public function down()
    {
        Schema::table('navbars', function (Blueprint $table) {
            $table->dropColumn('link_title_1');
            $table->dropColumn('link_title_2');
            $table->dropColumn('link_title_3');
            $table->dropColumn('link_title_4');
            $table->dropColumn('link_title_5');
            $table->dropColumn('link_title_6');
            $table->dropColumn('link_title_7');
            $table->dropColumn('link_title_8');
            $table->dropColumn('link_title_9');
            $table->dropColumn('link_title_10');
            $table->dropColumn('link_title_11');
        });
    }
}
