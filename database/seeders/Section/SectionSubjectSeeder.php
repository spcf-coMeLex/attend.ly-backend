<?php

namespace Database\Seeders\Section;

use App\Models\Section\SectionSubject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Section\Section,
    App\Models\Subject\Subject;

use Carbon\Carbon;

class SectionSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seed = array(
            // FIRST YEAR, FIRST SEM
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => "2455504",
                "subject_id"                    => Subject::where("code", "CUS")->first()->id
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => "2463510",
                "subject_id"                    => Subject::where("code", "CCW")->first()->id
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => "2443238",
                "subject_id"                    => Subject::where("code", "ANH")->first()->id
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => "2454135",
                "subject_id"                    => Subject::where("code", "PROG1L")->first()->id
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => "2448103",
                "subject_id"                    => Subject::where("code", "ITC")->first()->id
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => "2452140",
                "subject_id"                    => Subject::where("code", "DMATH")->first()->id
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => "2491655",
                "subject_id"                    => Subject::where("code", "PE_1")->first()->id
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => "2413146",
                "subject_id"                    => Subject::where("code", "NSTP_1")->first()->id
            ],


            // FIRST YEAR, SECOND SEM
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2489575",
                "subject_id"                    => Subject::where("code", "CPH")->first()->id,
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2460563",
                "subject_id"                    => Subject::where("code", "CMW")->first()->id,
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2486649",
                "subject_id"                    => Subject::where("code", "SSP")->first()->id,
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2421675",
                "subject_id"                    => Subject::where("code", "PROG2L")->first()->id,
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2495532",
                "subject_id"                    => Subject::where("code", "DSAAL")->first()->id,
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2418167",
                "subject_id"                    => Subject::where("code", "SIPP")->first()->id,
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2440831",
                "subject_id"                    => Subject::where("code", "PE_2")->first()->id,
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2452100",
                "subject_id"                    => Subject::where("code", "NSTP_2")->first()->id,
            ],


            // SECOND YEAR, FIRST SEM
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => "2489810",
                "subject_id"                    => Subject::where("code", "CPC")->first()->id
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => "2418744",
                "subject_id"                    => Subject::where("code", "MST")->first()->id
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => "2420194",
                "subject_id"                    => Subject::where("code", "OSL")->first()->id
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => "2410858",
                "subject_id"                    => Subject::where("code", "IML")->first()->id
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => "2475266",
                "subject_id"                    => Subject::where("code", "ETL")->first()->id
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => "2491684",
                "subject_id"                    => Subject::where("code", "SYAD")->first()->id
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => "2498112",
                "subject_id"                    => Subject::where("code", "PROG3L")->first()->id
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => "2436402",
                "subject_id"                    => Subject::where("code", "PE_3")->first()->id
            ],


            // SECOND YEAR, SECOND SEM
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2418121",
                "subject_id"                    => Subject::where("code", "CAA")->first()->id,
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2436852",
                "subject_id"                    => Subject::where("code", "CST")->first()->id,
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2426348",
                "subject_id"                    => Subject::where("code", "CET")->first()->id,
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2495671",
                "subject_id"                    => Subject::where("code", "WSTL")->first()->id,
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2459626",
                "subject_id"                    => Subject::where("code", "NET1L")->first()->id,
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2422150",
                "subject_id"                    => Subject::where("code", "SE")->first()->id,
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2427851",
                "subject_id"                    => Subject::where("code", "MOPL")->first()->id,
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2456514",
                "subject_id"                    => Subject::where("code", "PE_4")->first()->id,
            ],


            // THIRD YEAR, FIRST SEM
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => "2476893",
                "subject_id"                    => Subject::where("code", "LWR")->first()->id
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => "2489641",
                "subject_id"                    => Subject::where("code", "OMC")->first()->id
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => "2446724",
                "subject_id"                    => Subject::where("code", "SAML")->first()->id
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => "2499916",
                "subject_id"                    => Subject::where("code", "NET2L")->first()->id
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => "2492469",
                "subject_id"                    => Subject::where("code", "WDSL")->first()->id
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => "2445974",
                "subject_id"                    => Subject::where("code", "IAS1L")->first()->id
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => "2467215",
                "subject_id"                    => Subject::where("code", "ELEC1_NA")->first()->id
            ],


            // THIRD YEAR, SECOND SEM
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2474363",
                "subject_id"                    => Subject::where("code", "MOR")->first()->id,
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2477583",
                "subject_id"                    => Subject::where("code", "HCIL")->first()->id,
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2459416",
                "subject_id"                    => Subject::where("code", "NET3L")->first()->id,
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2417294",
                "subject_id"                    => Subject::where("code", "SIA1L")->first()->id,
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2456338",
                "subject_id"                    => Subject::where("code", "PML")->first()->id,
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2470843",
                "subject_id"                    => Subject::where("code", "IAS2L")->first()->id,
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2468617",
                "subject_id"                    => Subject::where("code", "ELEC2_NA")->first()->id,
            ],


            // FOURTH YEAR, FIRST SEM
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'FOURTH YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => "2421375",
                "subject_id"                    => Subject::where("code", "CAP_1")->first()->id
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'FOURTH YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => "2468595",
                "subject_id"                    => Subject::where("code", "PRAC_IT")->first()->id
            ],


            // FOURTH YEAR, SECOND SEM
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'FOURTH YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2485893",
                "subject_id"                    => Subject::where("code", "SIA2L")->first()->id,
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'FOURTH YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2483337",
                "subject_id"                    => Subject::where("code", "NET4L")->first()->id,
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 5,
                "section_id"                    => Section::where('year_level', 'FOURTH YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2410661",             
                "subject_id"                    => Subject::where("code", "CAP_2")->first()->id,
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 2,
                "section_id"                    => Section::where('year_level', 'FOURTH YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2443102",
                "subject_id"                    => Subject::where("code", "ELEC3_NA")->first()->id,
            ],
            [
                "student_counter"               => 0,
                "student_limit"                 => 2,
                "section_id"                    => Section::where('year_level', 'FOURTH YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => "2458928",
                "subject_id"                    => Subject::where("code", "ELEC4_NA")->first()->id,
            ],
        );

        foreach($seed as $object){
            SectionSubject::create($object);
        }
    }

    // protected function classCode()
    // {
    //     do {

    //         $yearId = implode(explode("20", Carbon::now()->year, 2));
    //         $random = random_int(10000, 99999);

    //         $code = $yearId . $random;

    //     } while (SectionSubject::where("code", "=", $code)->first());

    //     return $code;
    // }
}
