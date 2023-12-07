<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('layanans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('id_penawaran')->references('id')->on('penawaran')->cascadeOnDelete();
            $table->foreignUuid('id_trafo')->nullable()->references('id')->on('trafo')->cascadeOnDelete();
            $table->string('layanan')->nullable();
            $table->string('sub_layanan');
            $table->integer('qty');
            $table->string('satuan');
            $table->string('price');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('layanans');
    }
};
