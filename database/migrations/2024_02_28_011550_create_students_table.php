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
        Schema::create('students', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('uId');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('parents_email')->nullable();
            $table->enum('gender', ['MALE', 'FEMALE']);
            $table->date('birth_date');
            $table->string('address');
            $table->uuid('program_id');
            $table->uuid('department_id');
            $table->uuid('branch_id');
            $table->integer('points')->default(0);
            $table->enum('role', ['STUDENT']);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
