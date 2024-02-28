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
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "CUS")->first()->id
            ],
            [
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "CCW")->first()->id
            ],
            [
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "ANH")->first()->id
            ],
            [
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "PROG1L")->first()->id
            ],
            [
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "ITC")->first()->id
            ],
            [
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "DMATH")->first()->id
            ],
            [
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "PE_1")->first()->id
            ],
            [
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "NSTP_1")->first()->id
            ],


            // FIRST YEAR, SECOND SEM
            [
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "CPH")->first()->id,
            ],
            [
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "CMW")->first()->id,
            ],
            [
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "SSP")->first()->id,
            ],
            [
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "PROG2L")->first()->id,
            ],
            [
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "DSAAL")->first()->id,
            ],
            [
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "SIPP")->first()->id,
            ],
            [
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "PE_2")->first()->id,
            ],
            [
                "section_id"                    => Section::where('year_level', 'FIRST YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "NSTP_2")->first()->id,
            ],


            // SECOND YEAR, FIRST SEM
            [
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "CPC")->first()->id
            ],
            [
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "MST")->first()->id
            ],
            [
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "OSL")->first()->id
            ],
            [
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "IML")->first()->id
            ],
            [
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "ETL")->first()->id
            ],
            [
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "SYAD")->first()->id
            ],
            [
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "PROG3L")->first()->id
            ],
            [
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "PE_3")->first()->id
            ],


            // SECOND YEAR, SECOND SEM
            [
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "CAA")->first()->id,
            ],
            [
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "CST")->first()->id,
            ],
            [
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "CET")->first()->id,
            ],
            [
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "WSTL")->first()->id,
            ],
            [
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "NET1L")->first()->id,
            ],
            [
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "SE")->first()->id,
            ],
            [
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "MOPL")->first()->id,
            ],
            [
                "section_id"                    => Section::where('year_level', 'SECOND YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "PE_4")->first()->id,
            ],


            // THIRD YEAR, FIRST SEM
            [
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "LWR")->first()->id
            ],
            [
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "OMC")->first()->id
            ],
            [
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "SAML")->first()->id
            ],
            [
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "NET2L")->first()->id
            ],
            [
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "WDSL")->first()->id
            ],
            [
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "IAS1L")->first()->id
            ],
            [
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "ELEC1_NA")->first()->id
            ],


            // THIRD YEAR, SECOND SEM
            [
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "MOR")->first()->id,
            ],
            [
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "HCIL")->first()->id,
            ],
            [
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "NET3L")->first()->id,
            ],
            [
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "SIA1L")->first()->id,
            ],
            [
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "PML")->first()->id,
            ],
            [
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "IAS2L")->first()->id,
            ],
            [
                "section_id"                    => Section::where('year_level', 'THIRD YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "ELEC2_NA")->first()->id,
            ],


            // FOURTH YEAR, FIRST SEM
            [
                "section_id"                    => Section::where('year_level', 'FOURTH YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "CAP_1")->first()->id
            ],
            [
                "section_id"                    => Section::where('year_level', 'FOURTH YEAR')->where('semester', "FIRST SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "PRAC_IT")->first()->id
            ],


            // FOURTH YEAR, SECOND SEM
            [
                "section_id"                    => Section::where('year_level', 'FOURTH YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "SIA2L")->first()->id,
            ],
            [
                "section_id"                    => Section::where('year_level', 'FOURTH YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "NET4L")->first()->id,
            ],
            [
                "section_id"                    => Section::where('year_level', 'FOURTH YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "CAP_2")->first()->id,
            ],
            [
                "section_id"                    => Section::where('year_level', 'FOURTH YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "ELEC3_NA")->first()->id,
            ],
            [
                "section_id"                    => Section::where('year_level', 'FOURTH YEAR')->where('semester', "SECOND SEMESTER")->first()->id,
                "code"                          => $this->classCode(),
                "subject_id"                    => Subject::where("code", "ELEC4_NA")->first()->id,
            ],
        );

        foreach($seed as $object){
            SectionSubject::create($object);
        }
    }

    protected function classCode()
    {
        do {

            $yearId = implode(explode("20", Carbon::now()->year, 2));
            $random = random_int(10000, 99999);

            $code = $yearId . $random;

        } while (SectionSubject::where("code", "=", $code)->first());

        return $code;
    }
}
