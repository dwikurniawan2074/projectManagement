<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('sub_milestones', function (Blueprint $table) {
            $table->string('progress')->after('bobot');
        });
    }

    public function down(): void
    {
        Schema::table('sub_milestones', function (Blueprint $table) {
            $table->dropColumn('progress');
        });
    }
};
