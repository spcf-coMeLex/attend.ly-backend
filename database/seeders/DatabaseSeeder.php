<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// *** Seeder
use Database\Seeders\Branch\BranchSeeder,
    Database\Seeders\Department\DepartmentSeeder,
    Database\Seeders\Employee\EmployeeSeeder,
    Database\Seeders\Program\ProgramSeeder,
    Database\Seeders\Section\SectionSeeder,
    Database\Seeders\Student\StudentSeeder,
    Database\Seeders\Subject\SubjectSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BranchSeeder::class,
            DepartmentSeeder::class,
            EmployeeSeeder::class,
            ProgramSeeder::class,
            SectionSeeder::class,
            StudentSeeder::class,
            SubjectSeeder::class
        ]);
        

    }
}
