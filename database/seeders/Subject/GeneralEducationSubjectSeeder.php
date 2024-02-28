<?php

namespace Database\Seeders\Subject;

use App\Models\Branch\Branch;
use App\Models\Department\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Subject\Subject;

class GeneralEducationSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seed = array(

            [
                "code"                     => "CUS",
                "name"                     => "UNDERSTANDING THE SELF",
                "type"                     => "GENERAL EDUCATION",
                "branch_id"                => Branch::first()->id,
                "department_id"            => Department::where('code', 'CCIS')->first()->id
            ],
            [
                "code"                     => "CCW",
                "name"                     => "THE CONTEMPORARY WORLD",
                "type"                     => "GENERAL EDUCATION",
                "branch_id"                => Branch::first()->id,
                "department_id"            => Department::where('code', 'CCIS')->first()->id
            ],
            [
                "code"                     => "ANH",
                "name"                     => "PHILIPPINE POPULAR CULTURE",
                "type"                     => "GENERAL EDUCATION",
                "branch_id"                => Branch::first()->id,
                "department_id"            => Department::where('code', 'CCIS')->first()->id
            ],
            [
                "code"                     => "CPH",
                "name"                     => "READINGS IN PHILIPPINE HISTORY",
                "type"                     => "GENERAL EDUCATION",
                "branch_id"                => Branch::first()->id,
                "department_id"            => Department::where('code', 'CCIS')->first()->id
            ],
            [
                "code"                     => "CMW",
                "name"                     => "MATHEMATICS IN THE MODERN WORLD",
                "type"                     => "GENERAL EDUCATION",
                "branch_id"                => Branch::first()->id,
                "department_id"            => Department::where('code', 'CCIS')->first()->id
            ],
            [
                "code"                     => "SSP",
                "name"                     => "RELIGIOUS EXPERIENCES AND SPIRITUALITY",
                "type"                     => "GENERAL EDUCATION",
                "branch_id"                => Branch::first()->id,
                "department_id"            => Department::where('code', 'CCIS')->first()->id
            ],
            [
                "code"                     => "CPC",
                "name"                     => "PURPOSIVE COMMUNICATION",
                "type"                     => "GENERAL EDUCATION",
                "branch_id"                => Branch::first()->id,
                "department_id"            => Department::where('code', 'CCIS')->first()->id
            ],
            [
                "code"                     => "MST",
                "name"                     => "PEOPLE AND THE EARTH'S ECOSYSTEM",
                "type"                     => "GENERAL EDUCATION",
                "branch_id"                => Branch::first()->id,
                "department_id"            => Department::where('code', 'CCIS')->first()->id
            ],
            [
                "code"                     => "CAA",
                "name"                     => "ART APPRECIATION",
                "type"                     => "GENERAL EDUCATION",
                "branch_id"                => Branch::first()->id,
                "department_id"            => Department::where('code', 'CCIS')->first()->id
            ],
            [
                "code"                     => "CST",
                "name"                     => "SCIENCE, TECHNOLOGY AND SOCIETY",
                "type"                     => "GENERAL EDUCATION",
                "branch_id"                => Branch::first()->id,
                "department_id"            => Department::where('code', 'CCIS')->first()->id
            ],
            [
                "code"                     => "CET",
                "name"                     => "ETHICS",
                "type"                     => "GENERAL EDUCATION",
                "branch_id"                => Branch::first()->id,
                "department_id"            => Department::where('code', 'CCIS')->first()->id
            ],
            [
                "code"                     => "LWR",
                "name"                     => "LIFE AND WORKS OF RIZAL",
                "type"                     => "GENERAL EDUCATION",
                "branch_id"                => Branch::first()->id,
                "department_id"            => Department::where('code', 'CCIS')->first()->id
            ],
            
            // PE
            [
                "code"                     => "PE_1",
                "name"                     => "MOVEMENT ENCHANCEMENT",
                "type"                     => "GENERAL EDUCATION",
                "branch_id"                => Branch::first()->id,
                "department_id"            => Department::where('code', 'CCIS')->first()->id
            ],
            [
                "code"                     => "PE_2",
                "name"                     => "FITNESS EXERCISES",
                "type"                     => "GENERAL EDUCATION",
                "branch_id"                => Branch::first()->id,
                "department_id"            => Department::where('code', 'CCIS')->first()->id
            ],
            [
                "code"                     => "PE_3",
                "name"                     => "PHYSICAL ACTIVITIES TOWARDS HEALTH AND FITNESS I",
                "type"                     => "GENERAL EDUCATION",
                "branch_id"                => Branch::first()->id,
                "department_id"            => Department::where('code', 'CCIS')->first()->id
            ],
            [
                "code"                     => "PE_4",
                "name"                     => "PHYSICAL ACTIVITIES TOWARDS HEALTH AND FITNESS II",
                "type"                     => "GENERAL EDUCATION",
                "branch_id"                => Branch::first()->id,
                "department_id"            => Department::where('code', 'CCIS')->first()->id
            ],
            // END PE

            // PE (CRIMINOLOGY)
            [
                "code"                     => "PE 1",
                "name"                     => "FUNDAMENTALS OF MARTIAL ARTS",
                "type"                     => "GENERAL EDUCATION",
                "branch_id"                => Branch::first()->id,
                "department_id"            => Department::where('code', 'CON')->first()->id,
            ],
            [
                "code"                     => "PE 2",
                "name"                     => "ARNIS AND DISARMING TECHNIQUES",
                "type"                     => "GENERAL EDUCATION",
                "branch_id"                => Branch::first()->id,
                "department_id"            => Department::where('code', 'CON')->first()->id,
            ],
            [
                "code"                     => "PE 3",
                "name"                     => "FIRST AID AND WATER SAFETY",
                "type"                     => "GENERAL EDUCATION",
                "branch_id"                => Branch::first()->id,
                "department_id"            => Department::where('code', 'CON')->first()->id,
            ],
            [
                "code"                     => "PE 4",
                "name"                     => "FUNDAMENTALS OF MARKMANSHIP",
                "type"                     => "GENERAL EDUCATION",
                "branch_id"                => Branch::first()->id,
                "department_id"            => Department::where('code', 'CON')->first()->id,
            ],
            // END PE (CRIMINOLOGY)

            // NSTP (CWTS)
            [
                "code"                     => "NSTP_1",
                "name"                     => "CIVIC WELFARE TRAINING SERVICE 1",
                "type"                     => "NSTP",
                "branch_id"                => Branch::first()->id,
                "department_id"            => Department::where('code', 'ND')->first()->id,
            ],
            [
                "code"                     => "NSTP_2",
                "name"                     => "CIVIC WELFARE TRAINING SERVICE 2",
                "type"                     => "NSTP",
                "branch_id"                => Branch::first()->id,
                "department_id"            => Department::where('code', 'ND')->first()->id,
            ],
            // END NSTP (CWTS)

            // NSTP (ROTC)
            [
                "code"                     => "NSTP 1",
                "name"                     => "NATIONAL SERVICE TRAINING PROGRAM 1",
                "type"                     => "NSTP",
                "branch_id"                => Branch::first()->id,
                "department_id"            => Department::where('code', 'ND')->first()->id,
            ],
            [
                "code"                     => "NSTP 2",
                "name"                     => "NATIONAL SERVICE TRAINING PROGRAM 2",
                "type"                     => "NSTP",
                "branch_id"                => Branch::first()->id,
                "department_id"            => Department::where('code', 'ND')->first()->id,
            ],
            // END NSTP (ROTC)
        );

        foreach($seed as $object){
            Subject::create($object);
        }
    }
}
