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
            $table->uuid('id_penawaran')->after('id');
            $table->foreign('id_penawaran')->references('id')->on('trafo')->cascadeOnDelete();
        });
        Schema::table('sub_layanan', function (Blueprint $table) {
            $table->uuid('id_sub_layanan')->after('id');
            $table->foreign('id_sub_layanan')->references('id')->on('jenis_layanan')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('penawaran', function (Blueprint $table): void {
            $table->dropForeign(['id_penawaran']);
        });
        Schema::table('sub_layanan', function (Blueprint $table): void {
            $table->dropForeign(['id_sub_layanan']);
        });
    }
};
