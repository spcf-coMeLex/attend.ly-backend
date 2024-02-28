<?php

namespace Database\Seeders\Subject;

use App\Models\Branch\Branch;
use App\Models\Department\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Carbon\Carbon;

use Illuminate\Support\Str;

use App\Models\Subject\Subject;

class InformationTechnologySubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seed = array(
            [
                "code"                     => "PROG1L",
                "name"                     => "FUNDAMENTALS OF PROGRAMMING",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "ITC",
                "name"                     => "INTRODUCTION TO COMPUTING",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "DMATH",
                "name"                     => "DISCRETE MATHEMATICS",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "PROG2L",
                "name"                     => "INTERMEDIATE PROGRAMMING",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            
            [
                "code"                     => "DSAAL",
                "name"                     => "DATA STRUCTURES AND ALGORITHMS",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "SIPP",
                "name"                     => "SOCIAL ISSUES AND PROFESSIONAL PRACTICE",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "OSL",
                "name"                     => "OPERATING SYSTEMS",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "IML",
                "name"                     => "INFORMATION MANAGEMENT",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "ETL",
                "name"                     => "APPLICATION DEVELOPMENT AND EMERGING TECHNOLOGIES",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "SYAD",
                "name"                     => "SYSTEM ANALYST AND DESIGN",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "PROG3L",
                "name"                     => "OBJECT ORIENTED PROGRAMMING",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "WSTL",
                "name"                     => "WEB SYSTEMS AND TECHNOLOGIES",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "NET1L",
                "name"                     => "DATA COMMUNICATIONS AND NETWORKING",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "SE",
                "name"                     => "SOFTWARE ENGINEERING",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "MOPL",
                "name"                     => "MOBILE APPLICATIONS AND PROGRAMMING",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "OMC",
                "name"                     => "ORGANIZATION AND MANAGEMENT CONCEPTS",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "SAML",
                "name"                     => "SYSTEM ADMINISTRATION AND MAINTENANCE",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "NET2L",
                "name"                     => "ROUTING AND SWITCHING ESSENTIALS",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "WDSL",
                "name"                     => "WEB DEVELOPMENT AND SERVICES",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "IAS1L",
                "name"                     => "FUNDAMENTALS OF INFORMATION ASSURANCE AND SECURITY",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "ELEC1_NA",
                "name"                     => "ITNA ELECTIVE 1",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "MOR",
                "name"                     => "METHODS OF RESEARCH",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "HCIL",
                "name"                     => "HUMAN-COMPUTER INTERACTION",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "NET3L",
                "name"                     => "SCALING NETWORKS",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "SIA1L",
                "name"                     => "FUNDAMENTALS OF SYSTEM INTEGRATION AND ARCHITECTURE",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "PML",
                "name"                     => "PROJECT PLANNING AND MANAGEMENT",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "IAS2L",
                "name"                     => "ADVANCED OF INFORMATION ASSURANCE AND SECURITY",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "ELEC2_NA",
                "name"                     => "ITNA ELECTIVE 2",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "CAP_1",
                "name"                     => "CAPSTONE PROJECT 1",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "PRAC_IT",
                "name"                     => "IT PRACTICUM",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "SIA2L",
                "name"                     => "ADVANCED SYSTEM INTEGRATION AND ARCHITECTURE",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "NET4L",
                "name"                     => "CONNECTING NETWORKS",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "CAP_2",
                "name"                     => "CAPSTONE PROJECT 2",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "ELEC3_NA",
                "name"                     => "ITNA ELECTIVE 3",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ],
            [
                "code"                     => "ELEC4_NA",
                "name"                     => "ITNA ELECTIVE 4",
                "type"                     => "PROFESSIONAL EDUCATION",
                "department_id"            => Department::where('code', 'CCIS')->first()->id,
                "branch_id"                => Branch::first()->id
            ]
        );

        foreach($seed as $object){
            Subject::create($object);
        }
    }
}
