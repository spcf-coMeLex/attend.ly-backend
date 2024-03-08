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
        $validated = $request->validated();

        if($validated){
            $branch = Branch::where('name', $request->branchName)->first();
            $department = Department::where('code', $request->departmentCode)->first();
            $sectionId = Section::whereIn('code', ['CCIS3A', 'CCIS5A'])->pluck('id')->toArray();
            $sectionSubjects = SectionSubject::whereIn('section_id', $sectionId)->get();


            $employee = Employee::create(['principal_id' => $request->principalId]);

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

            return $validated;
        }

        return $this->error("Something went wrong!");
    }
}
