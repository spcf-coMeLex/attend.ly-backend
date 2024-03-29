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
        Schema::create('employees', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('principal_id');
            // $table->string('first_name');
            // $table->string('middle_name')->nullable();
            // $table->string('last_name');
            // $table->enum("gender", ["MALE", "FEMALE", 'OTHER']);
            // $table->date('birth_date');
            // $table->uuid('department_id');
            // $table->uuid('branch_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
