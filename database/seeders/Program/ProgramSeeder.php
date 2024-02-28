<?php

namespace Database\Seeders\Program;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Carbon\Carbon;

use App\Models\Program\Program;

use Illuminate\Support\Str;


class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seed = array(
                        //CCIS
                        [
                            "code"          => "BSCS",
                            "name"          => "BACHELOR OF SCIENCE IN COMPUTER SCIENCE",
                            "type"          => "UNDERGRADUATE",
                            "duration"      => 4,
                            "employee_id"   => null,
                            "department_id" => 2,
                            "branch_id"     => 1,
                        ],
                        [
                            "code"          => "BSIS",
                            "name"          => "BACHELOR OF SCIENCE IN INFORMATION SYSTEMS",
                            "type"          => "UNDERGRADUATE",
                            "duration"      => 4,
                            "employee_id"   => null,
                            "department_id" => 2,
                            "branch_id"     => 1,
                        ],
                        [
                            "code"          => "BSIT - NETAD",
                            "name"          => "BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY (MAJOR IN NETWORK ADMINISTRATION)",
                            "type"          => "UNDERGRADUATE",
                            "duration"      => 4,
                            "employee_id"   => null,
                            "department_id" => 2,
                            "branch_id"     => 1,
                        ],
                        [
                            "code"          => "BSIT - MOBILE DEV",
                            "name"          => "BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY (MAJOR IN MOBILE DEVELOPMENT)",
                            "type"          => "UNDERGRADUATE",
                            "duration"      => 4,
                            "employee_id"   => null,
                            "department_id" => 2,
                            "branch_id"     => 1,
                        ],
                        [
                            "code"          => "BSEMC - GAME DEV",
                            "name"          => "BACHELOR OF SCIENCE IN ENTERTAINMENT AND MULTIMEDIA COMPUTING (MAJOR IN GAME DEVELOPMENT)",
                            "type"          => "UNDERGRADUATE",
                            "duration"      => 4,
                            "employee_id"   => null,
                            "department_id" => 2,
                            "branch_id"     => 1,
                        ],
                        [
                            "code"          => "BSEMC - DIGITAL ANIMATION",
                            "name"          => "BACHELOR OF SCIENCE IN ENTERTAINMENT AND MULTIMEDIA COMPUTING (MAJOR IN DIGITAL ANIMATION)",
                            "type"          => "UNDERGRADUATE",
                            "duration"      => 4,
                            "employee_id"   => null,
                            "department_id" => 2,
                            "branch_id"     => 1,
                        ],
                        [
                            "code"          => "ACT",
                            "name"          => "ASSOCIATE IN COMPUTER TECHNOLOGY",
                            "type"          => "UNDERGRADUATE",
                            "duration"      => 2,
                            "employee_id"   => null,
                            "department_id" => 2,
                            "branch_id"     => 1,
                        ],

                        //CASS
                        [
                            "code"          => "BAC",
                            "name"          => "BACHELOR OF ARTS IN COMMUNICATION",
                            "type"          => "UNDERGRADUATE",
                            "duration"      => 4,
                            "employee_id"   => null,
                            "department_id" => 5,
                            "branch_id"     => 1,
                        ],
                        [
                            "code"          => "BSSW",
                            "name"          => "BACHELOR OF SCIENCE IN SOCIAL WORK",
                            "type"          => "UNDERGRADUATE",
                            "duration"      => 4,
                            "employee_id"   => null,
                            "department_id" => 5,
                            "branch_id"     => 1,
                        ],

                        //COED
                        [
                            "code"          => "BEED",
                            "name"          => "BACHELOR OF ELEMENTARY EDUCATION",
                            "type"          => "UNDERGRADUATE",
                            "duration"      => 4,
                            "employee_id"   => null,
                            "department_id" => 8,
                            "branch_id"     => 1,
                        ],
                        [
                            "code"          => "BPE",
                            "name"          => "BACHELOR OF PHYSICAL EDUCATION",
                            "type"          => "UNDERGRADUATE",
                            "duration"      => 4,
                            "employee_id"   => null,
                            "department_id" => 8,
                            "branch_id"     => 1,
                        ],
                        [
                            "code"          => "BSEM",
                            "name"          => "BACHELOR OF SECONDARY EDUCATION MAJOR IN MATHEMATICS",
                            "type"          => "UNDERGRADUATE",
                            "duration"      => 4,
                            "employee_id"   => null,
                            "department_id" => 8,
                            "branch_id"     => 1,
                        ],
                        [
                            "code"          => "BSEE",
                            "name"          => "BACHELOR OF SECONDARY EDUCATION MAJOR IN ENGLISH",
                            "type"          => "UNDERGRADUATE",
                            "duration"      => 4,
                            "employee_id"   => null,
                            "department_id" => 8,
                            "branch_id"     => 1,
                        ],

                        //COB
                        [
                            "code"          => "BSA",
                            "name"          => "BACHELOR OF SCIENCE IN ACCOUNTING",
                            "type"          => "UNDERGRADUATE",
                            "duration"      => 4,
                            "employee_id"   => null,
                            "department_id" => 3,
                            "branch_id"     => 1,

                        ],
                        [
                            "code"          => "BSAI",
                            "name"          => "BACHELOR OF SCIENCE IN ACCOUNTING INFORMATION",
                            "type"          => "UNDERGRADUATE",
                            "duration"      => 4,
                            "employee_id"   => null,
                            "department_id" => 3,
                            "branch_id"     => 1,

                        ],
                        [
                            "code"          => "BSBA",
                            "name"          => "BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION",
                            "type"          => "UNDERGRADUATE",
                            "duration"      => 4,
                            "employee_id"   => null,
                            "department_id" => 3,
                            "branch_id"     => 1,
                        ],
                        [
                            "code"          => "BSCA",
                            "name"          => "BACHELOR OF SCIENCE IN CUSTOMS ADMINISTRATION",
                            "type"          => "UNDERGRADUATE",
                            "duration"      => 4,
                            "employee_id"   => null,
                            "department_id" => 3,
                            "branch_id"     => 1,
                        ],
                        [
                            "code"          => "BSOA",
                            "name"          => "BACHELOR OF SCIENCE IN OFFICE ADMINISTRATION",
                            "type"          => "UNDERGRADUATE",
                            "duration"      => 4,
                            "employee_id"   => null,
                            "department_id" => 3,
                            "branch_id"     => 1,
                        ],
                        [
                            "code"          => "BSREM",
                            "name"          => "BACHELOR OF SCIENCE IN REAL ESTATE MANAGEMENT",
                            "type"          => "UNDERGRADUATE",
                            "duration"      => 4,
                            "employee_id"   => null,
                            "department_id" => 3,
                            "branch_id"     => 1,
                        ],

                        //COE
                        [
                            "code"          => "BSCE",
                            "name"          => "BACHELOR OF SCIENCE IN COMPUTER ENGINEERING",
                            "type"          => "UNDERGRADUATE",
                            "duration"      => 4,
                            "employee_id"   => null,
                            "department_id" => 4,
                            "branch_id"     => 1,
                        ],
                        [
                            "code"          => "BSELE",
                            "name"          => "BACHELOR OF SCIENCE IN ELECTRONICS ENGINEERING",
                            "type"          => "UNDERGRADUATE",
                            "duration"      => 4,
                            "employee_id"   => null,
                            "department_id" => 4,
                            "branch_id"     => 1,
                        ],

                        //CON
                        [
                            "code"          => "BSN",
                            "name"          => "BACHELOR OF SCIENCE IN NURSING",
                            "type"          => "UNDERGRADUATE",
                            "duration"      => 4,
                            "employee_id"   => null,
                            "department_id" => 9,
                            "branch_id"     => 1,
                        ],

                        //CHM
                        [
                            "code"          => "BSHM",
                            "name"          => "BACHELOR OF SCIENCE IN HOSPITALITY MANAGEMENT",
                            "type"          => "UNDERGRADUATE",
                            "duration"      => 4,
                            "employee_id"   => null,
                            "department_id" => 6,
                            "branch_id"     => 1,
                        ],
                        [
                            "code"          => "BSTM",
                            "name"          => "BACHELOR OF SCIENCE IN TOURISM MANAGEMENT",
                            "type"          => "UNDERGRADUATE",
                            "duration"      => 4,
                            "employee_id"   => null,
                            "department_id" => 6,
                            "branch_id"     => 1,
                        ],

                        //COC
                        [
                            "code"          => "BSC",
                            "name"          => "BACHELOR OF SCIENCE IN CRIMINOLOGY",
                            "type"          => "UNDERGRADUATE",
                            "duration"      => 4,
                            "employee_id"   => null,
                            "department_id" => 7,
                            "branch_id"     => 1,
                        ],

                        //GRADUATE STUDIES
                        [
                            "code"          => "MIT",
                            "name"          => "MASTER IN INFORMATION TECHNOLOGY",
                            "type"          => "POSTGRADUATE",
                            "duration"      => 4,
                            "employee_id"   => null,
                            "department_id" => 2,
                            "branch_id"     => 1,
                        ]
        );

        foreach($seed as $object){
            Program::create($object);        
        }
    }
}
