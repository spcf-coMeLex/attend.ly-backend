<?php

namespace App\Repositories\Student\Page\Student;

use App\Repositories\BaseRepository;

use App\Models\Section\SectionSubject,
    App\Models\Attendance\AttendanceHistory,
    App\Models\Student\Student,
    App\Models\Student\StudentSection,
    App\Models\Student\StudentSectionSubjectDate,
    App\Models\SchoolYear\SchoolYear,
    App\Models\SchoolYear\Semester,
    App\Models\ActivityLog\ActivityLog;
use App\Models\Student\StudentSectionSubject;
use Carbon\Carbon;

class ShowDashboardRepository extends BaseRepository
{
    public function execute($request)
    {
        $now = Carbon::now();
        $student = Student::where('id', $request->studentId)->first();
        if($student != null){
            $schoolYear = SchoolYear::where('status', "OPEN")->first();
            $semester = Semester::where('school_year_id', $schoolYear->id)->first();

            $studentSection = StudentSection::where('student_id', $student->id)
                              ->where('school_year', $schoolYear->school_year)
                              ->where('semester', $semester->semester)
                              ->first();

            $studentSubjectId = StudentSectionSubject::where('student_section_id', $studentSection->id)->pluck('id')->toArray();

            $data = [];
            $dayName = now()->format('l');
            $currentSectionSubjectDate = StudentSectionSubjectDate::where('student_id', $student->id)
                                        ->whereIn('student_section_subject_id', $studentSubjectId)
                                        ->where('day', "=", strtoupper($dayName))
                                        ->whereTime('time_start', '<=', $now)
                                        ->whereTime('time_end', '>=', $now)
                                        ->first();
            
            if($currentSectionSubjectDate){
                if($student && $currentSectionSubjectDate->studentSectionSubject->id){
                    array_push($data, [
                        "studentCurrentSubject"                => ["studentSubjectDateId"    => $currentSectionSubjectDate->id,
                                                                   "subjectCode"             => $currentSectionSubjectDate->studentSectionSubject->sectionSubject->subject->code,
                                                                   "subjectName"             => $currentSectionSubjectDate->studentSectionSubject->sectionSubject->subject->name],
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
