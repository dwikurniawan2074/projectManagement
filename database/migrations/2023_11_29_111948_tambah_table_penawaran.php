<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('penawaran', function (Blueprint $table) {
            $table->string('negara');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('alamat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('penawaran', function (Blueprint $table) {
            $table->dropColumn('negara');
            $table->dropColumn('provinsi');
            $table->dropColumn('kota');
            $table->dropColumn('alamat');
        });
    }
};
