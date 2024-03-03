<?php

namespace App\Repositories\Dashboard\Employee;

use App\Repositories\BaseRepository;

use App\Models\Section\SectionSubject,
    App\Models\Section\SectionSubjectDate,
    App\Models\Attendance\AttendanceHistory,
    App\Models\Employee\Employee,
    App\Models\ActivityLog\ActivityLog;

use Carbon\Carbon;

class ShowDashboardRepository extends BaseRepository
{
    public function execute($request)
    {
        $now = Carbon::now();
        $employee = Employee::where('uId', $request->uId)->first();
        $data = [];
        $dayName = now()->format('l');
        $currentSectionSubjectDate = SectionSubjectDate::where('day', "=", strtoupper($dayName))
                                    ->whereTime('time_start', '<=', $now)
                                    ->whereTime('time_end', '>=', $now)
                                    ->first();
        
        
        if($currentSectionSubjectDate){
            $sectionSubject = SectionSubject::where('id', $currentSectionSubjectDate->section_subject_id)->first();

            $attendanceHistory = AttendanceHistory::where('section_subject_id', $sectionSubject->id)
                                ->where('date', "=", $now)->get();

            $sectionStudents = $sectionSubject->student;
            
            $attendanceArray = $attendanceHistory->pluck('section_subject_id')->toArray();
            $attendanceLength = count($attendanceArray);

            $presentStudent = $attendanceLength;
            $absentStudent = $sectionStudents - $presentStudent;

            
            if($employee && $sectionSubject){
                array_push($data, [
                    "currentSubject"        => ["subjectCode" => $sectionSubject->subject->code,
                                                "subjectName" => $sectionSubject->subject->name],
                    "presentStudents"       => $presentStudent,
                    "absentStudents"        => $absentStudent  
                ]);
            }
        } else{
            return $this->error("There is no current section date");
        }

        return $this->success('Employee Dashboard', $data);
    }
}
