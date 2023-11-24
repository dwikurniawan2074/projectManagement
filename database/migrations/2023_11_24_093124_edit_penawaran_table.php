<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('table_penawaran', function (Blueprint $table) {
            $table->string('segmentasi_pasar');
            $table->string('syarat_pembayaran');
            $table->string('jangka_waktu');
            $table->string('pelaksanaan_pekerjaan');
        });
    }

    public function down(): void
    {
        Schema::table('table_penawaran', function (Blueprint $table) {
            $table->dropColumn('segmentasi_pasar');
            $table->dropColumn('syarat_pembayaran');
            $table->dropColumn('jangka_waktu');
            $table->dropColumn('pelaksanaan_pekerjaan');
        });
    }
};
