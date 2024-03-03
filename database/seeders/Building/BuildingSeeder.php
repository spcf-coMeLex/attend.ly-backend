<?php

namespace Database\Seeders\Building;

use App\Models\Building\Building;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Carbon\Carbon;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seed = array(
            [
                "code"       => "IT",
                "name"       => "IT BUILDING",
                "created_at" => Carbon::now(),
            ],
            [
                "code"       => "RVJ",
                "name"       => "RVJ BUILDING",
                "created_at" => Carbon::now(),
            ],
            [
                "code"       => "SPCF_GYM",
                "name"       => "GYMNASIUM",
                "created_at" => Carbon::now(),
            ],
            [
                "code"       => "SJO",
                "name"       => "SJO BUILDING",
                "created_at" => Carbon::now(),
            ],
            [
                "code"       => "MCB",
                "name"       => "MCB BUILDING",
                "created_at" => Carbon::now(),
            ],
        );

        foreach($seed as $object){
                Building::factory()->create($object);        
        }
    }
}
