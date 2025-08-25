<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('section_nines')) {
            Schema::table('section_nines', function (Blueprint $table) {
                $table->unsignedBigInteger('client_id')->nullable()->after('url');
                $table->foreign('client_id')->references('id')->on('clients')->onDelete('set null');
            });
        }
    }
    public function down(): void
    {
        if (Schema::hasTable('section_nines')) {
            Schema::table('section_nines', function (Blueprint $table) {
                $table->dropForeign(['client_id']);
                $table->dropColumn('client_id');
            });
        }
    }
};
