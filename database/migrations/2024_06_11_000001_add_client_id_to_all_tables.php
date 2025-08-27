<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClientIdToAllTables extends Migration
{
    public function up()
    {
        $tables = [
            'address_admins', 'addresses', 'admins', 'carousels', 'categories', 'comment_comments',
            'contacts', 'failed_jobs', 'migrations', 'navbars', 'order_items', 'orders',
            'pages', 'password_resets', 'personal_access_tokens', 'posts', 'products', 'progress',
            'scores', 'section_fives', 'section_fours', 'section_ones', 'section_sevens', 'section_sixes',
            'section_threes', 'section_twos', 'titles', 'topbars', 'user_ecommerces', 'users'
        ];

        foreach ($tables as $table) {
            Schema::table($table, function (Blueprint $table) {
                $table->foreignId('client_id')->nullable()->constrained('clients')->onDelete('set null');
            });
        }
    }

    public function down()
    {
        $tables = [
            'address_admins', 'addresses', 'admins', 'carousels', 'categories', 'comment_comments',
            'contacts', 'failed_jobs', 'migrations', 'navbars', 'order_items', 'orders',
            'pages', 'password_resets', 'personal_access_tokens', 'posts', 'products', 'progress',
            'scores', 'section_fives', 'section_fours', 'section_ones', 'section_sevens', 'section_sixes',
            'section_threes', 'section_twos', 'titles', 'topbars', 'user_ecommerces', 'users'
        ];

        foreach ($tables as $table) {
            Schema::table($table, function (Blueprint $table) {
                $table->dropForeign(['client_id']);
                $table->dropColumn('client_id');
            });
        }
    }
}
