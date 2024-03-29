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
        Schema::create('attendance_history', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('principal_id');
            $table->uuid('section_subject_id');
            $table->date('date');
            $table->time('time');
            $table->enum('status', ['PRESENT', 'ABSENT', 'LATE'])->nullable();
            $table->enum('type', ['IN', 'OUT']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance_history');
    }
};
