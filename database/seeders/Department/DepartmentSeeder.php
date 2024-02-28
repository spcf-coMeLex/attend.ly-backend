<?php

namespace Database\Seeders\Department;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Carbon\Carbon;

use App\Models\Department\Department;

use Illuminate\Support\Str;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $seed = array(
                    [
                        "code"        => "ICTDU",
                        "name"        => "INFORMATION AND COMMUNICATIONS TECHNOLOGY DEVELOPMENT UNIT",
                        "type"        => "NON-ACADEMIC",
                    ],
                    [
                        "code"       => "CCIS",
                        "name"       => "COLLEGE OF COMPUTING AND INFORMATION SCIENCES",
                        "type"       => "ACADEMIC",
                    ],
                    [
                        "code"        => "COB",
                        "name"        => "COLLEGE OF BUSINESS",
                        "type"        => "ACADEMIC",

                    ],
                    [
                        "code"        => "COE",
                        "name"        => "COLLEGE OF ENGINEERING",
                        "type"        => "ACADEMIC",
                    
                    ],
                    [
                        "code"        => "CASS",
                        "name"        => "COLLEGE OF ARTS AND SOCIAL SCIENCES",
                        "type"        => "ACADEMIC",
                        
                    ],
                    [
                        "code"        => "CHM",
                        "name"        => "COLLEGE OF HOSPITALITY MANAGEMENT",
                        "type"        => "ACADEMIC",
                        
                    ],
                    [
                        "code"        => "COC",
                        "name"        => "COLLEGE OF CRIMINOLOGY",
                        "type"        => "ACADEMIC",
                    
                    ],
                    [
                        "code"        => "COED",
                        "name"        => "COLLEGE OF EDUCATION",
                        "type"        => "ACADEMIC",
                    
                    ],
                    [
                        "code"        => "CON",
                        "name"        => "COLLEGE OF NURSING",
                        "type"        => "ACADEMIC",
                    
                    ],
                    [
                        "code"        => "ND",
                        "name"        => "NSTP DEPARTMENT",
                        "type"        => "ACADEMIC",
                    
                    ],
                    [
                        "code"        => "REGISTRAR OFFICE",
                        "name"        => "REGISTRAR OFFICE",
                        "type"        => "NON-ACADEMIC",
                    
                    ],
                    [
                        "code"        => "ADMISSION OFFICE",
                        "name"        => "ADMISSION OFFICE",
                        "type"        => "NON-ACADEMIC",
                
                    ],
                    [
                        "code"        => "ACCOUNTING OFFICE",
                        "name"        => "ACCOUNTING OFFICE",
                        "type"        => "NON-ACADEMIC",
                        
                    ],
                    [
                        "code"        => "SCHOLARSHIP OFFICE",
                        "name"        => "SCHOLARSHIP OFFICE",
                        "type"        => "NON-ACADEMIC",
                        
                    ],
                    [
                        "code"        => "FOREIGN AFFRAIRS OFFICE",
                        "name"        => "FOREIGN AFFRAIRS OFFICE",
                        "type"        => "NON-ACADEMIC",
                        
                    ],
                    [
                        "code"        => "HR",
                        "name"        => "HUMAN RESOURCES",
                        "type"        => "NON-ACADEMIC",
                    ],
                    [
                        "code"        => "BASIC EDUCATION",
                        "name"        => "BASIC EDUCATION",
                        "type"        => "NON-ACADEMIC",
                    ],
                    [
                        "code"        => "COLLEGE",
                        "name"        => "COLLEGE",
                        "type"        => "NON-ACADEMIC",
                    ],
                    [
                        "code"        => "ITS",
                        "name"        => "INFORMATION TECHNOLOGY SERVICE",
                        "type"        => "NON-ACADEMIC",
                    ],
        );

        foreach($seed as $object){
            Department::factory()->create($object);        
        }
    }
}
