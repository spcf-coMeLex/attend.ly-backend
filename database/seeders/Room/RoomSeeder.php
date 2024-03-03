<?php

namespace Database\Seeders\Room;

use App\Models\Room\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Building\Building,
    App\Models\Laboratory\Laboratory;

use Carbon\Carbon;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seed = array(
            [
                "code"          => "RVJ101",
                "name"          => "RVJ101",
                "type"          => "LECTURE",
                "class_size"    => 30,
                "education_type" => "COLLEGE",
                "laboratory_id" => null,
                "building_id"   => Building::where('code', 'RVJ')->where('name', 'RVJ BUILDING')->first()->id,
                "created_at"    => Carbon::now(),
            ],
            [
                "code"          => "RVJ102",
                "name"          => "RVJ102",
                "type"          => "LECTURE",
                "class_size"    => 30,
                "education_type" => "COLLEGE",
                "laboratory_id" => null,
                "building_id"   => Building::where('code', 'RVJ')->where('name', 'RVJ BUILDING')->first()->id,
                "created_at"    => Carbon::now(),
            ],
            [
                "code"          => "RVJ103",
                "name"          => "RVJ102",
                "type"          => "LECTURE",
                "class_size"    => 30,
                "education_type" => "COLLEGE",
                "laboratory_id" => null,
                "building_id"   => Building::where('code', 'RVJ')->where('name', 'RVJ BUILDING')->first()->id,
                "created_at"    => Carbon::now(),
            ],
            [
                "code"          => "RVJ104",
                "name"          => "RVJ104",
                "type"          => "LECTURE",
                "class_size"    => 30,
                "education_type" => "COLLEGE",
                "laboratory_id" => null,
                "building_id"   => Building::where('code', 'RVJ')->where('name', 'RVJ BUILDING')->first()->id,
                "created_at"    => Carbon::now(),
            ],
            [
                "code"          => "RVJ105",
                "name"          => "RVJ105",
                "type"          => "LECTURE",
                "class_size"    => 30,
                "education_type" => "COLLEGE",
                "laboratory_id" => null,
                "building_id"   => Building::where('code', 'RVJ')->where('name', 'RVJ BUILDING')->first()->id,
                "created_at"    => Carbon::now(),
            ],
            [
                "code"          => "SPCF GYM",
                "name"          => "GYMNASIUM",
                "type"          => "LECTURE",
                "class_size"    => 30,
                "education_type" => "COLLEGE",
                "laboratory_id" => null,
                "building_id"   => Building::where('code', 'SPCF_GYM')->where('name', 'GYMNASIUM')->first()->id,
                "created_at"    => Carbon::now(),
            ],
            [
                "code"          => "OPENSOURCE",
                "name"          => "OPENSOURCE",
                "type"          => "LABORATORY",
                "class_size"    => 30,
                "education_type" => "COLLEGE",
                "laboratory_id" => Laboratory::where('code', 'SCIENCE_LAB')->where('name', 'CHEMISTRY')->first()->id,
                "building_id"   => Building::where('code', 'RVJ')->where('name', 'RVJ BUILDING')->first()->id,
                "created_at"    => Carbon::now(),
            ],
            [
                "code"          => "ANIM_LAB",
                "name"          => "ANIMATION LABORATORY",
                "type"          => "LABORATORY",
                "class_size"    => 30,
                "education_type" => "COLLEGE",
                "laboratory_id" => Laboratory::where('code', 'SCIENCE_LAB')->where('name', 'CHEMISTRY')->first()->id,
                "building_id"   => Building::where('code', 'RVJ')->where('name', 'RVJ BUILDING')->first()->id,
                "created_at"    => Carbon::now(),
            ],
            [
                "code"          => "CISCO_LAB",
                "name"          => "CISCO LABORATORY",
                "type"          => "LABORATORY",
                "class_size"    => 30,
                "education_type" => "COLLEGE",
                "laboratory_id" => Laboratory::where('code', 'SCIENCE_LAB')->where('name', 'CHEMISTRY')->first()->id,
                "building_id"   => Building::where('code', 'RVJ')->where('name', 'RVJ BUILDING')->first()->id,
                "created_at"    => Carbon::now(),
            ],
        );

        foreach($seed as $object){
            Room::factory()->create($object);        
        }
    }
}
