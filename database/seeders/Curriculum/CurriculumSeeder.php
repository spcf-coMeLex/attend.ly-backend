<?php

namespace Database\Seeders\Curriculum;

use App\Models\Curriculum\Curriculum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Carbon\Carbon;

class CurriculumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seed = array(
            // START OF BSCS CURRICULUM
            [
                "code"                  => "BSCS_2020-2021",
            ],
            // END OF BSCS CURRICULUM
        );

        foreach($seed as $object){
            Curriculum::factory()->create($object);        
        }
    }
}
