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
        Schema::create('student_subject_dates', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('student_id');
            $table->uuid('student_section_subject_id');
            $table->uuid('room_id')->nullable();
            $table->enum('day', ['MONDAY', 'TUESDAY', 'WEDNESDAY','THURSDAY', 'FRIDAY', 'SATURDAY', 'SUNDAY']);
            $table->time('time_start');
            $table->time('time_end');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_subject_dates');
    }
};
