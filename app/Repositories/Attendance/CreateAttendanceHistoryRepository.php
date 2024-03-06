<?php

namespace App\Repositories\Attendance;

use App\Models\Section\SectionSubject;
use App\Models\Section\SectionSubjectDate;
use App\Repositories\BaseRepository;

use App\Models\Attendance\AttendanceHistory;
use App\Models\Employee\Employee;
use App\Models\Student\Student;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class CreateAttendanceHistoryRepository extends BaseRepository
{
    public function execute($request)
    {

        $attendance = AttendanceHistory::where('uId', $request->uId)->first();
        if ($attendance || $request->error) {
            return $this->error("Something went wrong!");
        } else{
            try {
                //code...
            
                $employee = Employee::where('uId', $request->teacherUId)->first();
                $student = Student::where('UId', $request->studentUId)->first();
                $employeeSubjectsId = SectionSubject::where('employee_id', $employee->id)->pluck('id')->toArray();
                $dayName = now()->format('l');
                $now = Carbon::now();

                $currentSectionSubjectDate = SectionSubjectDate::whereIn('section_subject_id', $employeeSubjectsId)
                                        ->where('day', "=", strtoupper($dayName))
                                        ->whereTime('time_start', '<=', $now)
                                        ->whereTime('time_end', '>=', $now)
                                        ->first();

                if($currentSectionSubjectDate){
                    $subjectTimeStart = Carbon::createFromFormat('H:i:s', $currentSectionSubjectDate->time_start);
                    $timeDiff = $subjectTimeStart->diffInMinutes($now);
                
                    if($request->status){
                        AttendanceHistory::create([
                            "uId"                   => $request->uId,
                            "student_id"            => $student->id, 
                            "section_subject_id"    => $currentSectionSubjectDate->section_subject_id,
                            "date"                  => $request->date,
                            "time"                  => $request->time,
                            "status"                => $request->status
                        ]);

                        return $this->success('Attendance history created successfully!');
                    } else{
                        $status = ($timeDiff >= 15) ? "Late" : "Present";
                        AttendanceHistory::create([
                            "uId"                   => $request->uId,
                            "student_id"            => $student->id, 
                            "section_subject_id"    => $currentSectionSubjectDate->section_subject_id,
                            "date"                  => $request->date,
                            "time"                  => $request->time,
                            "status"                => $status
                        ]);

                        return $this->success('Attendance history created successfully!');
                    }                
                } else{
                    return $this->error("There is no current section date");
                }
                // Mail::send('emails.attendance', ['status' => $request->status], function ($message) use ($request) {
                //     $message->to($request->email);
                //     $message->subject('Attendance Notification');
                // });
            } catch (\Exception $e) {
                return $this->error("Error: " . $e->getMessage(), 500, [], false);
            }
        }
    }
}
