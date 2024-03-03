<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// *** Seeder
use Database\Seeders\Branch\BranchSeeder,
    Database\Seeders\Curriculum\CurriculumSeeder,
    Database\Seeders\CurriculumSubject\InformationTechnologyCurriculumSubjectSeeder,
    Database\Seeders\Department\DepartmentSeeder,
    Database\Seeders\Employee\EmployeeSeeder,
    Database\Seeders\Program\ProgramSeeder,
    Database\Seeders\Section\SectionSeeder,
    Database\Seeders\Section\SectionSubjectSeeder,
    Database\Seeders\Student\StudentSeeder,
    Database\Seeders\Subject\InformationTechnologySubjectSeeder,
    Database\Seeders\Subject\GeneralEducationSubjectSeeder,
    Database\Seeders\Building\BuildingSeeder,
    Database\Seeders\Laboratory\LaboratorySeeder,
    Database\Seeders\Room\RoomSeeder,
    Database\Seeders\SchoolYear\SchoolYearSeeder,
    Database\Seeders\Section\SectionSubjectDateSeeder;

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
            InformationTechnologySubjectSeeder::class,
            GeneralEducationSubjectSeeder::class,
            CurriculumSeeder::class,
            SectionSubjectSeeder::class,
            InformationTechnologyCurriculumSubjectSeeder::class,
            BuildingSeeder::class,
            LaboratorySeeder::class,
            RoomSeeder::class,
            SchoolYearSeeder::class,
            SectionSubjectDateSeeder::class
        ]);
        

    }
}
