<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('trafo', function (Blueprint $table) {
            $table->uuid('id_penawaran')->after('id');
            $table->foreign('id_penawaran')->references('id')->on('penawaran')->cascadeOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trafo', function (Blueprint $table): void {
            $table->dropForeign(['id_penawaran']);
        });
    }
};
