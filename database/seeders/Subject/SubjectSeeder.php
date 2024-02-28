<?php

namespace Database\Seeders\Subject;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Carbon\Carbon;

use Illuminate\Support\Str;

use App\Models\Subject\Subject;

class SubjectSeeder extends Seeder
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
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "ITC",
                "name"                     => "INTRODUCTION TO COMPUTING",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "DMATH",
                "name"                     => "DISCRETE MATHEMATICS",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "PROG2L",
                "name"                     => "INTERMEDIATE PROGRAMMING",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            
            [
                "code"                     => "DSAAL",
                "name"                     => "DATA STRUCTURES AND ALGORITHMS",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "SIPP",
                "name"                     => "SOCIAL ISSUES AND PROFESSIONAL PRACTICE",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "OSL",
                "name"                     => "OPERATING SYSTEMS",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "IML",
                "name"                     => "INFORMATION MANAGEMENT",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "ETL",
                "name"                     => "APPLICATION DEVELOPMENT AND EMERGING TECHNOLOGIES",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "SYAD",
                "name"                     => "SYSTEM ANALYST AND DESIGN",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "PROG3L",
                "name"                     => "OBJECT ORIENTED PROGRAMMING",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "WSTL",
                "name"                     => "WEB SYSTEMS AND TECHNOLOGIES",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "NET1L",
                "name"                     => "DATA COMMUNICATIONS AND NETWORKING",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "SE",
                "name"                     => "SOFTWARE ENGINEERING",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "MOPL",
                "name"                     => "MOBILE APPLICATIONS AND PROGRAMMING",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "OMC",
                "name"                     => "ORGANIZATION AND MANAGEMENT CONCEPTS",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "SAML",
                "name"                     => "SYSTEM ADMINISTRATION AND MAINTENANCE",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "NET2L",
                "name"                     => "ROUTING AND SWITCHING ESSENTIALS",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "WDSL",
                "name"                     => "WEB DEVELOPMENT AND SERVICES",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "IAS1L",
                "name"                     => "FUNDAMENTALS OF INFORMATION ASSURANCE AND SECURITY",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "ELEC1_NA",
                "name"                     => "ITNA ELECTIVE 1",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "MOR",
                "name"                     => "METHODS OF RESEARCH",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "HCIL",
                "name"                     => "HUMAN-COMPUTER INTERACTION",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "NET3L",
                "name"                     => "SCALING NETWORKS",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "SIA1L",
                "name"                     => "FUNDAMENTALS OF SYSTEM INTEGRATION AND ARCHITECTURE",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "PML",
                "name"                     => "PROJECT PLANNING AND MANAGEMENT",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "IAS2L",
                "name"                     => "ADVANCED OF INFORMATION ASSURANCE AND SECURITY",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "ELEC2_NA",
                "name"                     => "ITNA ELECTIVE 2",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "CAP_1",
                "name"                     => "CAPSTONE PROJECT 1",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "PRAC_IT",
                "name"                     => "IT PRACTICUM",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "SIA2L",
                "name"                     => "ADVANCED SYSTEM INTEGRATION AND ARCHITECTURE",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "NET4L",
                "name"                     => "CONNECTING NETWORKS",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "CAP_2",
                "name"                     => "CAPSTONE PROJECT 2",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "ELEC3_NA",
                "name"                     => "ITNA ELECTIVE 3",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ],
            [
                "code"                     => "ELEC4_NA",
                "name"                     => "ITNA ELECTIVE 4",
                "type"                     => "PROFESSIONAL EDUCATION",
                "branch_id"                => 1,
                "department_id"            => 2
            ]
        );

        foreach($seed as $object){
            Subject::create($object);        
        }
    }
}
