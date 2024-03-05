<?php

namespace App\Repositories\Employee;

use App\Repositories\BaseRepository;

use App\Models\Branch\Branch,
    App\Models\Department\Department,
    App\Models\Employee\Employee,
    App\Models\Section\SectionSubject,
    App\Models\Section\Section,
    App\Models\ActivityLog\ActivityLog;

class CreateEmployeeRepository extends BaseRepository
{
    public function execute($request)
    {
        $checker = Employee::where('uId', $request->uId)->first();
        if ($request->role == "TEACHER" && $checker === null) {
            $branch = Branch::where('name', $request->branchName)->first();
            $department = Department::where('code', $request->departmentCode)->first();
            $sectionId = Section::whereIn('code', ['CCIS3A', 'CCIS5A'])->pluck('id')->toArray();
            $sectionSubjects = SectionSubject::whereIn('section_id', $sectionId)->get();

            $employee = Employee::create([
                "uId"               => $request->uId,
                "first_name"        => $request->firstName,
                "middle_name"       => $request->middleName,
                "last_name"         => $request->lastName,
                "gender"            => $request->gender,
                "birthDate"         => $request->birthDate,
                "department_id"     => $department->id,
                "branch_id"         => $branch->id
            ]);

            ActivityLog::create([
                "action"        => "CREATE",
                "module"        => "EMPLOYEE",
                "message"       => "SUCCESSFULLY CREATED AN EMPLOYEE ACCOUNT"
            ]);

            if($request->firstName == "MEL MATHEW" && $request->lastName == "PALAÑA"){
                foreach($sectionSubjects as $sectionSubject){
                    if($sectionSubject->code === "2410858"){
                        $sectionSubject->update([
                            "employee_id"       => $employee->id
                        ]);
                    } else if($sectionSubject->code === "2420194"){
                        $sectionSubject->update([
                            "employee_id"       => $employee->id
                        ]);
                    } else if($sectionSubject->code === "2498112"){
                        $sectionSubject->update([
                            "employee_id"       => $employee->id
                        ]);
                    } else if($sectionSubject->code === "2475266"){
                        $sectionSubject->update([
                            "employee_id"       => $employee->id
                        ]);
                    } else if($sectionSubject->code === "2446724"){
                        $sectionSubject->update([
                            "employee_id"       => $employee->id
                        ]);
                    }
                }
            } else if($request->firstName === "ALEXANDER JOHN" && $request->lastName === "CAMADDO"){
                foreach($sectionSubjects as $sectionSubject){
                    if($sectionSubject->code === "2492469"){
                        $sectionSubject->update([
                            "employee_id"       => $employee->id
                        ]);
                    } else if($sectionSubject->code === "2446724"){
                        $sectionSubject->update([
                            "employee_id"       => $employee->id
                        ]);
                    } else if($sectionSubject->code === "2445974"){
                        $sectionSubject->update([
                            "employee_id"       => $employee->id
                        ]);
                    } else if($sectionSubject->code === "2499916"){
                        $sectionSubject->update([
                            "employee_id"       => $employee->id
                        ]);
                    }
                }
            }



            
        } else{
            return $this->error("Only teacher role can be created or Unique ID already exist.");
        }

        return $this->success('Employee account created successfully!');
    }
}
