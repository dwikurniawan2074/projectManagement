<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('operationals', function (Blueprint $table) {
            $table->date('approved_date')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('operationals', function (Blueprint $table) {
            $table->dropColumn('approved_date');
        });
    }
};
