<?php

namespace App\Repositories\Employee\Page\Teacher;

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
        $employee = Employee::where('uId', $request->teacherUId)->first();
        if($employee != null){
            $employeeSubjectsId = SectionSubject::where('employee_id', $employee->id)->pluck('id')->toArray();
            $data = [];
            $dayName = now()->format('l');
            $currentSectionSubjectDate = SectionSubjectDate::whereIn('section_subject_id', $employeeSubjectsId)
                                        ->where('day', "=", strtoupper($dayName))
                                        ->whereTime('time_start', '<=', $now)
                                        ->whereTime('time_end', '>=', $now)
                                        ->first();

            if($currentSectionSubjectDate){
                $nextSectionSubjectDate = SectionSubjectDate::whereIn('section_subject_id', $employeeSubjectsId)
                                          ->where('day', "=", strtoupper($dayName))
                                          ->whereTime('time_start', ">=", $currentSectionSubjectDate->time_end)->first();

            }
            
                                        
            if($currentSectionSubjectDate){
                $allAttendanceHistory = AttendanceHistory::where('section_subject_id', $currentSectionSubjectDate->sectionSubject->id)->pluck('uId')->toArray();
                $attendanceHistory = AttendanceHistory::where('section_subject_id', $currentSectionSubjectDate->sectionSubject->id)
                                    ->whereDate('date', "=", $now)->get();

                $sectionStudents = $currentSectionSubjectDate->sectionSubject->student_counter;
                
                $attendanceArray = $attendanceHistory->pluck('section_subject_id')->toArray();
                $attendanceLength = count($attendanceArray);

                $presentStudent = $attendanceLength;
                $absentStudent = $sectionStudents - $presentStudent;

                
                if($employee && $currentSectionSubjectDate->sectionSubject->id){
                    array_push($data, [
                        "currentSubject"                => ["subjectDateId"    => $currentSectionSubjectDate->id,
                                                            "subjectCode"      => $currentSectionSubjectDate->sectionSubject->subject->code,
                                                            "subjectName"      => $currentSectionSubjectDate->sectionSubject->subject->name],
                                                            
                        "presentStudents"               => $presentStudent,
                        "absentStudents"                => $absentStudent,

                        "subjectAttendanceHistory"      => ["uId"           => $allAttendanceHistory],

                        "nextSubject"                   => ["subjectCode" => $nextSectionSubjectDate->sectionSubject->subject->code,
                                                            "subjectName" => $nextSectionSubjectDate->sectionSubject->subject->name] ?? null,
                    ]);
                } else {
                    return $this->error('Something went wrong');
                }
            }else{
                return $this->error("There is no current section date");
            }
        } else {
            return $this->error("uId of the employee doesn't exist");
        }
        return $this->success('Employee Dashboard', $data);
    }
}
