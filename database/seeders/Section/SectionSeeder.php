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
                "semester"      => "FIRST SEMESTER"            ],
            [
                "code"          => "CCIS2A",
                "year_level"    => "FIRST YEAR",
                "semester"      => "SECOND SEMESTER"            ],
            [
                "code"          => "CCIS3A",
                "year_level"    => "SECOND YEAR",
                "semester"      => "FIRST SEMESTER"            ],
            [
                "code"          => "CCIS4A",
                "year_level"    => "SECOND YEAR",
                "semester"      => "SECOND SEMESTER"            ],
            [
                "code"          => "CCIS5A",
                "year_level"    => "THIRD YEAR",
                "semester"      => "FIRST SEMESTER"            ],
            [
                "code"          => "CCIS6A",
                "year_level"    => "THIRD YEAR",
                "semester"      => "SECOND SEMESTER"            ],
            [
                "code"          => "CCIS7A",
                "year_level"    => "FOURTH YEAR",
                "semester"      => "FIRST SEMESTER"            ],
            [
                "code"          => "CCIS8A",
                "year_level"    => "FOURTH YEAR",
                "semester"      => "SECOND SEMESTER"            ],


            // *** BSIT - NETAD
            [
                "code"          => "CCIS1B",
                "year_level"    => "FIRST YEAR",
                "semester"      => "FIRST SEMESTER"            ],
            [
                "code"          => "CCIS2B",
                "year_level"    => "FIRST YEAR",
                "semester"      => "SECOND SEMESTER"            ],
            [
                "code"          => "CCIS3B",
                "year_level"    => "SECOND YEAR",
                "semester"      => "FIRST SEMESTER"            ],
            [
                "code"          => "CCIS4B",
                "year_level"    => "SECOND YEAR",
                "semester"      => "SECOND SEMESTER"            ],
            [
                "code"          => "CCIS5B",
                "year_level"    => "THIRD YEAR",
                "semester"      => "FIRST SEMESTER"            ],
            [
                "code"          => "CCIS6B",
                "year_level"    => "THIRD YEAR",
                "semester"      => "SECOND SEMESTER"            ],
            [
                "code"          => "CCIS7B",
                "year_level"    => "FOURTH YEAR",
                "semester"      => "FIRST SEMESTER"            ],
            [
                "code"          => "CCIS8B",
                "year_level"    => "FOURTH YEAR",
                "semester"      => "SECOND SEMESTER"            ],

            // *** BSN
            [
                "code"          => "NUR01A",
                "year_level"    => "FIRST YEAR",
                "semester"      => "FIRST SEMESTER"
            ],
            [
                "code"          => "NUR03A",
                "year_level"    => "SECOND YEAR",
                "semester"      => "FIRST SEMESTER"
            ],
        );

        foreach($seed as $object){
            Section::factory()->create($object);       
        }
    }
}
