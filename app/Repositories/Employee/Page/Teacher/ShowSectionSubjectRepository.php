<?php

namespace App\Repositories\Employee\Page\Teacher;


use App\Repositories\BaseRepository;

use App\Models\Employee\Employee,
    App\Models\Section\Section,
    App\Models\Section\SectionSubject,
    App\Models\Section\SectionSubjectDate;

use Illuminate\Support\Facades\Hash;

class ShowSectionSubjectRepository extends BaseRepository
{
    public function execute($request)
    {
        $employee = Employee::where('principal_id', $request->teacherId)->first();
        if ($employee != null) {
            $section = Section::where('code', $request->sectionCode)->first();
            $sectionSubjects = SectionSubject::where('section_id', $section->id)
                               ->where('employee_id', $employee->id)->get();
            $data = [
                "subject"   => [],
            ];

            foreach($sectionSubjects as $sectionSubject){
                $sectionSubjectDate = SectionSubjectDate::where('section_subject_id', $sectionSubject->id)->get();

                if($sectionSubjectDate){
                    array_push($data["subject"], [
                        "name"                  => $sectionSubject->subject->name,
                        "code"                  => $sectionSubject->subject->code,
                        "students"              => $sectionSubject->student_counter,
                        "sectionSubjectDate"    => $sectionSubjectDate
                    ]);
                }
                
            }
            
        } else{
            return $this->error("Employee doesn't exist");
        }
        return $this->success('Teacher Section Subject List', $data ?? null);
    }
}
