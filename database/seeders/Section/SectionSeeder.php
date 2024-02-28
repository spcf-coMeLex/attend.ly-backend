<?php

namespace Database\Seeders\Section;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Carbon\Carbon;

use App\Models\Section\Section;

use Illuminate\Support\Str;


class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seed = array(

            // *** BSCS
            [
                "code"          => "CCIS1A",
                "year_level"    => "FIRST YEAR",
                "semester"      => "FIRST SEMESTER",
                "branch_id"     => 1,
                "department_id" => 2,
                "program_id"    => 1
            ],
            [
                "code"          => "CCIS2A",
                "year_level"    => "FIRST YEAR",
                "semester"      => "SECOND SEMESTER",
                "branch_id"     => 1,
                "department_id" => 2,
                "program_id"    => 1
            ],
            [
                "code"          => "CCIS3A",
                "year_level"    => "SECOND YEAR",
                "semester"      => "FIRST SEMESTER",
                "branch_id"     => 1,
                "department_id" => 2,
                "program_id"    => 1
            ],
            [
                "code"          => "CCIS4A",
                "year_level"    => "SECOND YEAR",
                "semester"      => "SECOND SEMESTER",
                "branch_id"     => 1,
                "department_id" => 2,
                "program_id"    => 1
            ],
            [
                "code"          => "CCIS5A",
                "year_level"    => "THIRD YEAR",
                "semester"      => "FIRST SEMESTER",
                "branch_id"     => 1,
                "department_id" => 2,
                "program_id"    => 1
            ],
            [
                "code"          => "CCIS6A",
                "year_level"    => "THIRD YEAR",
                "semester"      => "SECOND SEMESTER",
                "branch_id"     => 1,
                "department_id" => 2,
                "program_id"    => 1
            ],
            [
                "code"          => "CCIS7A",
                "year_level"    => "FOURTH YEAR",
                "semester"      => "FIRST SEMESTER",
                "branch_id"     => 1,
                "department_id" => 2,
                "program_id"    => 1
            ],
            [
                "code"          => "CCIS8A",
                "year_level"    => "FOURTH YEAR",
                "semester"      => "SECOND SEMESTER",
                "branch_id"     => 1,
                "department_id" => 2,
                "program_id"    => 1
            ],


            // *** BSIT - NETAD
            [
                "code"          => "CCIS1B",
                "year_level"    => "FIRST YEAR",
                "semester"      => "FIRST SEMESTER",
                "branch_id"     => 1,
                "department_id" => 2,
                "program_id"    => 3
            ],
            [
                "code"          => "CCIS2B",
                "year_level"    => "FIRST YEAR",
                "semester"      => "SECOND SEMESTER",
                "branch_id"     => 1,
                "department_id" => 2,
                "program_id"    => 3
            ],
            [
                "code"          => "CCIS3B",
                "year_level"    => "SECOND YEAR",
                "semester"      => "FIRST SEMESTER",
                "branch_id"     => 1,
                "department_id" => 2,
                "program_id"    => 3
            ],
            [
                "code"          => "CCIS4B",
                "year_level"    => "SECOND YEAR",
                "semester"      => "SECOND SEMESTER",
                "branch_id"     => 1,
                "department_id" => 2,
                "program_id"    => 3
            ],
            [
                "code"          => "CCIS5B",
                "year_level"    => "THIRD YEAR",
                "semester"      => "FIRST SEMESTER",
                "branch_id"     => 1,
                "department_id" => 2,
                "program_id"    => 3
            ],
            [
                "code"          => "CCIS6B",
                "year_level"    => "THIRD YEAR",
                "semester"      => "SECOND SEMESTER",
                "branch_id"     => 1,
                "department_id" => 2,
                "program_id"    => 3
            ],
            [
                "code"          => "CCIS7B",
                "year_level"    => "FOURTH YEAR",
                "semester"      => "FIRST SEMESTER",
                "branch_id"     => 1,
                "department_id" => 2,
                "program_id"    => 3
            ],
            [
                "code"          => "CCIS8B",
                "year_level"    => "FOURTH YEAR",
                "semester"      => "SECOND SEMESTER",
                "branch_id"     => 1,
                "department_id" => 2,
                "program_id"    => 3
            ],

            // *** BSN
            [
                "code"          => "NUR01A",
                "year_level"    => "FIRST YEAR",
                "semester"      => "FIRST SEMESTER",
                "branch_id"     => 1,
                "department_id" => 9,
                "program_id"    => 22
            ],
            [
                "code"          => "NUR03A",
                "year_level"    => "SECOND YEAR",
                "semester"      => "FIRST SEMESTER",
                "branch_id"     => 1,
                "department_id" => 9,
                "program_id"    => 22
            ],
        );

        foreach($seed as $object){
            Section::create($object);        
        }
    }
}
