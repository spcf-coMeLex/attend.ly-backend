<?php

namespace App\Repositories\Student\Page\Student;

use App\Repositories\BaseRepository;

use App\Models\Section\SectionSubject,
    App\Models\Attendance\AttendanceHistory,
    App\Models\Student\Student,
    App\Models\Student\StudentSectionSubjectDate,
    App\Models\ActivityLog\ActivityLog;

use Carbon\Carbon;

class ShowDashboardRepository extends BaseRepository
{
    public function execute($request)
    {
        $now = Carbon::now();
        $student = Student::where('id', $request->studentId)->first();
        if($student != null){
            $employeeSubjectsId = SectionSubject::where('employee_id', $student->id)->pluck('id')->toArray();
            $data = [];
            $dayName = now()->format('l');
            $currentSectionSubjectDate = StudentSectionSubjectDate::where('student_id', $student)
                                        // ->whereIn('section_subject_id', $employeeSubjectsId)
                                        // ->where('day', "=", strtoupper($dayName))
                                        // ->whereTime('time_start', '<=', $now)
                                        // ->whereTime('time_end', '>=', $now)
                                        ->first();
            
            dd($currentSectionSubjectDate);
            if($currentSectionSubjectDate){
                if($student && $currentSectionSubjectDate->sectionSubject->id){
                    array_push($data, [
                        "currentSubject"                => ["studentSubjectDateId"    => $currentSectionSubjectDate->id,
                                                            "subjectCode"             => $currentSectionSubjectDate->sectionSubject->subject->code,
                                                            "subjectName"             => $currentSectionSubjectDate->sectionSubject->subject->name],
                    ]);
                } else {
                    return $this->error('Something went wrong');
                }
            }else{
                return $this->error("There is no current section date");
            }
        } else {
            return $this->error("uId of the student doesn't exist");
        }
        return $this->success('Student Dashboard', $data);
    }
}
