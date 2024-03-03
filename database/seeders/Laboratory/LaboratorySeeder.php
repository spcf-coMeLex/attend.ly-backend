<?php

namespace Database\Seeders\Laboratory;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Laboratory\Laboratory;

use Carbon\Carbon;

class LaboratorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seed = array(
            [
                "code"           => "COMP_LAB",
                "name"           => "COMPUTER",
                "education_type" => "COLLEGE",
                "created_at"     => Carbon::now()
            ],
            [
                
                "code"           => "SCIENCE_LAB",
                "name"           => "CHEMISTRY",
                "education_type" => "COLLEGE",
                "created_at"     => Carbon::now()
            ],
            [
                
                "code"           => "NURSING_LAB",
                "name"           => "NURSING",
                "education_type" => "COLLEGE",
                "created_at"     => Carbon::now()
            ],
            [
                
                "code"           => "TECH_LAB",
                "name"           => "TECH",
                "education_type" => "COLLEGE",
                "created_at"     => Carbon::now()
            ],
            [
                
                "code"           => "CRIM_LAB",
                "name"           => "CRIMINOLOGY",
                "education_type" => "COLLEGE",
                "created_at"     => Carbon::now()
            ],
            [
                
                "code"           => "ENGR_LAB",
                "name"           => "ENGINEERING",
                "education_type" => "COLLEGE",
                "created_at"     => Carbon::now()
            ],
            [
                
                "code"           => "KITCHEN_LAB",
                "name"           => "KITCHEN",
                "education_type" => "COLLEGE",
                "created_at"     => Carbon::now()
            ],
            [
                
                "code"           => "SPEECH_LAB",
                "name"           => "SPEECH",
                "education_type" => "COLLEGE",
                "created_at"     => Carbon::now()
            ],
            [
                
                "code"           => "SKILL_LAB",
                "name"           => "SKILL LABORATORY FOR NURSING",
                "education_type" => "COLLEGE",
                "created_at"     => Carbon::now()
            ]
        );

        foreach($seed as $object){
            Laboratory::factory()->create($object);        
        }
    }
}
