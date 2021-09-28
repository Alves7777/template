<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLinksTableTopbars extends Migration
{

    public function up()
    {
        Schema::table('topbars', function (Blueprint $table) {
            $table->string('link_phone')->nullable();
            $table->string('link_email')->nullable();
            $table->string('link_icon_1')->nullable();
            $table->string('link_icon_2')->nullable();
            $table->string('link_icon_3')->nullable();
            $table->string('link_icon_4')->nullable();
        });
    }

    public function down()
    {
        Schema::table('topbars', function (Blueprint $table) {
            $table->dropColumn('link_phone');
            $table->dropColumn('link_email');
            $table->dropColumn('link_icon_1');
            $table->dropColumn('link_icon_2');
            $table->dropColumn('link_icon_3');
            $table->dropColumn('link_icon_4');
        });
    }
}
