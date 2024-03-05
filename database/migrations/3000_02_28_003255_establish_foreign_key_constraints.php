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
            $table->foreign('program_id')->references('id')->on('programs');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('branch_id')->references('id')->on('branches');
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
            $table->foreign('program_id')->references('id')->on('programs');
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


        /*****************************************  CURRICULUM  *****************************************/
        Schema::table('curriculums', function (Blueprint $table)
        {
            $table->foreign('branch_id')->references('id')->on('branches');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('program_id')->references('id')->on('programs');
        });

        Schema::table('curriculum_subjects', function (Blueprint $table)
        {
            $table->foreign('curriculum_id')->references('id')->on('curriculums')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('subject_id')->references('id')->on('subjects');
        });

        /*****************************************  ACTIVITY LOG  *****************************************/
        Schema::table('activity_logs', function (Blueprint $table)
        {
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('student_id')->references('id')->on('students');
        });

        /*****************************************  SECTION SUBJECT DATE  *****************************************/
        Schema::table('section_subject_dates', function (Blueprint $table)
        {
            $table->foreign('section_subject_id')->references('id')->on('section_subjects');
            $table->foreign('room_id')->references('id')->on('rooms');
        });

        /*****************************************  ROOM  *****************************************/
        Schema::table('rooms', function (Blueprint $table)
        {
            $table->foreign('branch_id')->references('id')->on('branches');
            $table->foreign('laboratory_id')->references('id')->on('laboratories');
            $table->foreign('building_id')->references('id')->on('buildings')->onDelete('cascade');
        });

        /*****************************************  LABORATORY  *****************************************/
        Schema::table('laboratories', function (Blueprint $table)
        {
            $table->foreign('branch_id')->references('id')->on('branches');
        });

        /*****************************************  BUILDING  *****************************************/
        Schema::table('buildings', function (Blueprint $table)
        {
            $table->foreign('branch_id')->references('id')->on('branches');
        });

        /*****************************************  SEMESTER  *****************************************/
        Schema::table('semesters', function (Blueprint $table)
        {
            $table->foreign('school_year_id')->references('id')->on('school_years')->onDelete('cascade');
        });

        /*****************************************  SCHOOL YEAR  *****************************************/
        Schema::table('school_years', function (Blueprint $table)
        {
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');
        });

        /*****************************************  ATTENDANCE HISTORY  *****************************************/
        Schema::table('attendance_history', function (Blueprint $table)
        {
            $table->foreign('section_subject_id')->references('id')->on('section_subjects');
            $table->foreign('student_id')->references('id')->on('students');
        });

        /*****************************************  STUDENT SECTION  *****************************************/
        Schema::table('student_sections', function (Blueprint $table)
        {
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('section_id')->references('id')->on('sections');
        });
        
        /*****************************************  STUDENT SECTION SUBJECT  *****************************************/
        Schema::table('student_section_subjects', function (Blueprint $table)
        {
            $table->foreign('student_section_id')->references('id')->on('student_sections');
            $table->foreign('section_subject_id')->references('id')->on('section_subjects');
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
