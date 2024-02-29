<?php

namespace App\Repositories\Employee;

use App\Repositories\BaseRepository;

use App\Models\Branch\Branch,
    App\Models\Department\Department,
    App\Models\Employee\Employee,
    App\Models\ActivityLog\ActivityLog;

class CreateEmployeeRepository extends BaseRepository
{
    public function execute($request)
    {
        if ($request->role == "TEACHER") {
            $branch = Branch::where('name', $request->branchName)->first();
            $department = Department::where('code', $request->departmentCode)->first();

            Employee::create([
                "principal_id"      => $request->principalId,
                "first_name"        => $request->firstName,
                "middle_name"       => $request->middleName,
                "last_name"         => $request->lastName,
                "gender"            => $request->gender,
                "age"               => $request->age,
                "department_id"     => $department->id,
                "branch_id"         => $branch->id
            ]);

            ActivityLog::create([
                "action"        => "CREATE",
                "module"        => "EMPLOYEE",
                "message"       => "SUCCESSFULLY CREATED AN EMPLOYEE ACCOUNT"
            ]);

            
        } else{
            return $this->error("Only teacher role can be created.");
        }

        return $this->success('School calendar enrollment created successfully');
    }
}
