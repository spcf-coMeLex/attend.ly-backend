<?php

namespace Database\Seeders\Section;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Section\SectionSubject,
    App\Models\Section\SectionSubjectDate,
    App\Models\Room\Room;

class SectionSubjectDateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seed = array(
            // CCIS3A Section Subject Date (Teacher: Mel)
            // IML
            [
                "section_subject_id"        => SectionSubject::where("code", "2410858")->first()->id,
                "room_id"                   => Room::where("code", "RVJ101")->first()->id,
                "day"                       => "MONDAY",
                "time_start"                => "08:30:00",
                "time_end"                  => "10:30:00"
            ],
            [
                "section_subject_id"        => SectionSubject::where("code", "2410858")->first()->id,
                "room_id"                   => Room::where("code", "RVJ101")->first()->id,
                "day"                       => "WEDNESDAY",
                "time_start"                => "08:30:00",
                "time_end"                  => "10:30:00"
            ],

            // PROG3L
            [
                "section_subject_id"        => SectionSubject::where("code", "2498112")->first()->id,
                "room_id"                   => Room::where("code", "RVJ102")->first()->id,
                "day"                       => "TUESDAY",
                "time_start"                => "10:00:00",
                "time_end"                  => "12:00:00"
            ],
            [
                "section_subject_id"        => SectionSubject::where("code", "2498112")->first()->id,
                "room_id"                   => Room::where("code", "RVJ102")->first()->id,
                "day"                       => "THURSDAY",
                "time_start"                => "10:00:00",
                "time_end"                  => "12:00:00"
            ],

            // CCIS5A Section Subject Date (Teacher: Alex)
            // WDSL
            [
                "section_subject_id"        => SectionSubject::where("code", "2492469")->first()->id,
                "room_id"                   => Room::where("code", "RVJ103")->first()->id,
                "day"                       => "MONDAY",
                "time_start"                => "14:30:00",
                "time_end"                  => "16:30:00"
            ],
            [
                "section_subject_id"        => SectionSubject::where("code", "2492469")->first()->id,
                "room_id"                   => Room::where("code", "RVJ103")->first()->id,
                "day"                       => "THURSDAY",
                "time_start"                => "14:30:00",
                "time_end"                  => "16:30:00"
            ],

            // IAS1L
            [
                "section_subject_id"        => SectionSubject::where("code", "2445974")->first()->id,
                "room_id"                   => Room::where("code", "RVJ104")->first()->id,
                "day"                       => "TUESDAY",
                "time_start"                => "13:00:00",
                "time_end"                  => "15:00:00"
            ],
            [
                "section_subject_id"        => SectionSubject::where("code", "2445974")->first()->id,
                "room_id"                   => Room::where("code", "RVJ104")->first()->id,
                "day"                       => "WEDNESDAY",
                "time_start"                => "13:00:00",
                "time_end"                  => "15:00:00"
            ],
        );

        foreach($seed as $object){
            SectionSubjectDate::create($object);
        }
    }
}
