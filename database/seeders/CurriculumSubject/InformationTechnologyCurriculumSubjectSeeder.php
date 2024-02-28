<?php

namespace Database\Seeders\CurriculumSubject;

use App\Models\Curriculum\CurriculumSubject;
use App\Models\Subject\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Curriculum\Curriculum;

class InformationTechnologyCurriculumSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seed = array(
            // FIRST YEAR, FIRST SEM
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "CUS")->first()->id,
                 "year_level"                    => "FIRST YEAR",
                "semester"                      => "FIRST SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "CCW")->first()->id,
                 "year_level"                    => "FIRST YEAR",
                "semester"                      => "FIRST SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "ANH")->first()->id,
                 "year_level"                    => "FIRST YEAR",
                "semester"                      => "FIRST SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "PROG1L")->first()->id,
                 "year_level"                    => "FIRST YEAR",
                "semester"                      => "FIRST SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "ITC")->first()->id,
                 "year_level"                    => "FIRST YEAR",
                "semester"                      => "FIRST SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "DMATH")->first()->id,
                 "year_level"                    => "FIRST YEAR",
                "semester"                      => "FIRST SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "PE_1")->first()->id,
                 "year_level"                    => "FIRST YEAR",
                "semester"                      => "FIRST SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "NSTP_1")->first()->id,
                 "year_level"                    => "FIRST YEAR",
                "semester"                      => "FIRST SEMESTER",
            ],


            // FIRST YEAR, SECOND SEM
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "CPH")->first()->id,
                 "year_level"                    => "FIRST YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "CMW")->first()->id,
                 "year_level"                    => "FIRST YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "SSP")->first()->id,
                 "year_level"                    => "FIRST YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "PROG2L")->first()->id,
                "year_level"                    => "FIRST YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "DSAAL")->first()->id,
                "year_level"                    => "FIRST YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "SIPP")->first()->id,
                "year_level"                    => "FIRST YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "PE_2")->first()->id,
                 "year_level"                    => "FIRST YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "NSTP_2")->first()->id,
                 "year_level"                    => "FIRST YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],


            // SECOND YEAR, FIRST SEM
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "CPC")->first()->id,
                 "year_level"                    => "SECOND YEAR",
                "semester"                      => "FIRST SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "MST")->first()->id,
                 "year_level"                    => "SECOND YEAR",
                "semester"                      => "FIRST SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "OSL")->first()->id,
                "year_level"                    => "SECOND YEAR",
                "semester"                      => "FIRST SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "IML")->first()->id,
                "year_level"                    => "SECOND YEAR",
                "semester"                      => "FIRST SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "ETL")->first()->id,
                "year_level"                    => "SECOND YEAR",
                "semester"                      => "FIRST SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "SYAD")->first()->id,
                "year_level"                    => "SECOND YEAR",
                "semester"                      => "FIRST SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "PROG3L")->first()->id,
                "year_level"                    => "SECOND YEAR",
                "semester"                      => "FIRST SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "PE_3")->first()->id,
                 "year_level"                    => "SECOND YEAR",
                "semester"                      => "FIRST SEMESTER",
            ],


            // SECOND YEAR, SECOND SEM
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "CAA")->first()->id,
                 "year_level"                    => "SECOND YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "CST")->first()->id,
                 "year_level"                    => "SECOND YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "CET")->first()->id,
                 "year_level"                    => "SECOND YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "WSTL")->first()->id,
                "year_level"                    => "SECOND YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "NET1L")->first()->id,
                "year_level"                    => "SECOND YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "SE")->first()->id,
                "year_level"                    => "SECOND YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "MOPL")->first()->id,
                "year_level"                    => "SECOND YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "PE_4")->first()->id,
                 "year_level"                    => "SECOND YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],


            // THIRD YEAR, FIRST SEM
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "LWR")->first()->id,
                 "year_level"                    => "THIRD YEAR",
                "semester"                      => "FIRST SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "OMC")->first()->id,
                "year_level"                    => "THIRD YEAR",
                "semester"                      => "FIRST SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "SAML")->first()->id,
                "year_level"                    => "THIRD YEAR",
                "semester"                      => "FIRST SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "NET2L")->first()->id,
                "year_level"                    => "THIRD YEAR",
                "semester"                      => "FIRST SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "WDSL")->first()->id,
                "year_level"                    => "THIRD YEAR",
                "semester"                      => "FIRST SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "IAS1L")->first()->id,
                "year_level"                    => "THIRD YEAR",
                "semester"                      => "FIRST SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "ELEC1_NA")->first()->id,
                 "year_level"                    => "THIRD YEAR",
                "semester"                      => "FIRST SEMESTER",
            ],


            // THIRD YEAR, SECOND SEM
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "MOR")->first()->id,
                "year_level"                    => "THIRD YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "HCIL")->first()->id,
                "year_level"                    => "THIRD YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "NET3L")->first()->id,
                "year_level"                    => "THIRD YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "SIA1L")->first()->id,
                "year_level"                    => "THIRD YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "PML")->first()->id,
                "year_level"                    => "THIRD YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "IAS2L")->first()->id,
                "year_level"                    => "THIRD YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "ELEC2_NA")->first()->id,
                 "year_level"                    => "THIRD YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],


            // FOURTH YEAR, FIRST SEM
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "CAP_1")->first()->id,
                "year_level"                    => "FOURTH YEAR",
                "semester"                      => "FIRST SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "PRAC_IT")->first()->id,
                 "year_level"                    => "FOURTH YEAR",
                "semester"                      => "FIRST SEMESTER",
            ],


            // FOURTH YEAR, SECOND SEM
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "SIA2L")->first()->id,
                 "year_level"                    => "FOURTH YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "NET4L")->first()->id,
                 "year_level"                    => "FOURTH YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "CAP_2")->first()->id,
                 "year_level"                    => "FOURTH YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "ELEC3_NA")->first()->id,
                 "year_level"                    => "FOURTH YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],
            [
                "curriculum_id"                 => Curriculum::first()->id,
                "subject_id"                    => Subject::where("code", "ELEC4_NA")->first()->id,
                 "year_level"                    => "FOURTH YEAR",
                "semester"                      => "SECOND SEMESTER",
            ],
        );

        foreach($seed as $object){
            CurriculumSubject::create($object);
        }
    }
}
