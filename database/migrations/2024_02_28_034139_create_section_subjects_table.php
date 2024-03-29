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
        Schema::create('section_subjects', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('student_counter');
            $table->integer('student_limit');
            $table->uuid('section_id');
            $table->string('code');
            $table->uuid('subject_id');
            $table->uuid('employee_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_subjects');
    }
};
