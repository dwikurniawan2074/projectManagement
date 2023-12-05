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

        Schema::table('jenis_layanan', function (Blueprint $table) {
            $table->uuid('id_penawaran')->after('id');
            $table->foreign('id_penawaran')->references('id')->on('penawaran')->cascadeOnDelete();
        });

        Schema::table('jenis_layanan', function (Blueprint $table) {
            $table->uuid('id_trafo')->after('id');
            $table->foreign('id_trafo')->references('id')->on('trafo')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jenis_layanan', function (Blueprint $table) {
            $table->dropForeign(['id_penawaran']);
        });

        Schema::table('jenis_layanan', function (Blueprint $table): void {
            $table->dropForeign(['id_trafo']);
        });
    }
};
