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
        /*****************************************  SUBJECT  *****************************************/
        Schema::table('subjects', function (Blueprint $table)
        {
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('branch_id')->references('id')->on('branches');
        });


        /*****************************************  SECTION  *****************************************/
        Schema::table('sections', function (Blueprint $table)
        {
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('branch_id')->references('id')->on('branches');
            $table->foreign('program_id')->references('id')->on('programs');
        });


        /*****************************************  EMPLOYEE  *****************************************/
        Schema::table('employees', function (Blueprint $table)
        {
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('branch_id')->references('id')->on('branches');
        });


        /*****************************************  STUDENT  *****************************************/
        Schema::table('students', function (Blueprint $table)
        {
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('branch_id')->references('id')->on('branches');
        });


        /*****************************************  SECTION SUBJECT  *****************************************/
        Schema::table('section_subjects', function (Blueprint $table)
        {
            $table->foreign('section_id')->references('id')->on('sections');
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('employee_id')->references('id')->on('employees');
        });


        /*****************************************  DEPARTMENT  *****************************************/
        Schema::table('departments', function (Blueprint $table)
        {
            $table->foreign('branch_id')->references('id')->on('branches');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
