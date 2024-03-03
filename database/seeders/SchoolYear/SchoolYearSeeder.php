<?php

namespace Database\Seeders\SchoolYear;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\SchoolYear\SchoolYear,
    App\Models\SchoolYear\Semester,
    App\Models\Branch\Branch;

use Carbon\Carbon;

class SchoolYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SchoolYear::create(
            [
                'branch_id' => Branch::first()->id,
                'school_year' => '2023-2024',
                'status' => 'OPEN',
                'created_at' => Carbon::now()
            ]
        );

        $semesters = ['FIRST SEMESTER', 'SECOND SEMESTER', 'SUMMER'];

        foreach ($semesters as $semester) {
            Semester::create([
                'school_year_id' => SchoolYear::first()->id,
                'semester' => $semester,
                'enrollment_status' => ($semester == 'FIRST SEMESTER') ? 'OPEN' : 'CLOSED',
                'created_at' => Carbon::now()
            ]);
        }

       

        
    }
}
