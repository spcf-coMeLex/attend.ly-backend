<?php

namespace App\Repositories\Employee\Page\Teacher;


use App\Repositories\BaseRepository;

use App\Models\Section\SectionSubject,
    App\Models\Section\SectionSubjectDate,
    App\Models\Subject\Subject,
    App\Models\Attendance\AttendanceHistory,
    App\Models\Student\Student,
    App\Models\Student\StudentSectionSubject;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class ShowSubjectRepository extends BaseRepository
{
    public function execute($request)
    {

            $subject = Subject::where('code', $request->subjectCode)->first();
            $sectionSubject = SectionSubject::where('subject_id', $subject->id)->first();
            $studentSectionSubjects = StudentSectionSubject::where('section_subject_id', $sectionSubject->id)->get();
            $now = Carbon::now();
            $data = [
                "info"       => ['sectionCode'    => $sectionSubject->section->code,
                                 'departmentCode' => $sectionSubject->section->department->code,
                                 'branchName'     => $sectionSubject->section->branch->name,
                                 'programCode'    => $sectionSubject->section->program->code],
                "students"   => [],
            ];

            foreach($studentSectionSubjects as $studentSectionSubject){
                $student = Student::where('principal_id', $request->studentId)->first();
                $attendance = AttendanceHistory::where('student_id', $student->id)
                                                 ->where('section_subject_id', $studentSectionSubject)->whereDate('date', $now)->first();

                if($student){
                    array_push($data["students"], [
                                    "principal_id"  => $student->principal_id,
                                    "fullName"      => "{$student->first_name} {$student->middle_name} {$student->last_name}",
                                    "status"        => $attendance->status ?? null,
                                    "points"        => $student->points
                                ]);
                }
            }




            // foreach($sectionSubjects as $sectionSubject){
            //     $sectionSubjectDate = SectionSubjectDate::where('section_subject_id', $sectionSubject->id)->get();

            //     if($sectionSubjectDate){
            //         array_push($data["subject"], [
            //             "name"                  => $sectionSubject->subject->name,
            //             "code"                  => $sectionSubject->subject->code,
            //             "students"              => $sectionSubject->student_counter,
            //             "sectionSubjectDate"    => $sectionSubjectDate
            //         ]);
            //     }

            // }


        return $this->success('Employee Subject Student List', $data ?? null);
    }
}
