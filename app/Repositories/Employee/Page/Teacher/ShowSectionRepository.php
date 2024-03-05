<?php

namespace App\Repositories\Employee\Page\Teacher;

use App\Repositories\BaseRepository;

use App\Models\Employee\Employee,
    App\Models\Section\Section,
    App\Models\Section\SectionSubject;

use Illuminate\Support\Facades\Hash;

class ShowSectionRepository extends BaseRepository
{
    public function execute($request)
    {
        $employee = Employee::where('uId', $request->teacherUId)->first();
        if ($employee != null) {
            $sectionId = SectionSubject::where('employee_id', $employee->id)->pluck('section_id')->toArray(); 
            $section = Section::whereIn('id', $sectionId)->get();
        } else{
            return $this->error("Employee doesn't exist!");
        }
        return $this->success('Teacher Section List', $section);
    }
}
