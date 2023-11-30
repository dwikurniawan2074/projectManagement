<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('sub_milestones', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('milestone_id')->references('id')->on('milestones');
            $table->date('start_date')->nullable();
            $table->date('due_date')->nullable();
            $table->string('description')->nullable();
            $table->string('file')->nullable();
            $table->float('bobot')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sub_milestones');
    }
};
