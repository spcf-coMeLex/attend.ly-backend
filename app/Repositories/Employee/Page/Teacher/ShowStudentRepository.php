<?php

namespace App\Repositories\Employee\Page\Teacher;

use App\Models\Attendance\AttendanceHistory;
use App\Repositories\BaseRepository;

use App\Models\Student\Student;


use Illuminate\Support\Facades\Hash;

class ShowStudentRepository extends BaseRepository
{
    public function execute($request)
    {
        if($request->studentId){
            $student = Student::where('id', $request->studentId)->first();
            $studentAttendance = AttendanceHistory::where('student_id', $student->id)->get();

            $data = [
                "firstName"             => $student->first_name,
                "middleName"            => $student->middle_name,
                "lastName"              => $student->last_name,
                "gender"                => $student->gender,
                "birthDate"             => $student->birth_date,
                "address"               => $student->address,
                "parentsEmail"          => $student->parents_email,
                "points"                => $student->points,
                "studentAttendance"     => $studentAttendance
            ];
        } else{
            return $this->error('Student not found!');
        }
            

        return $this->success('Student Info', $data ?? null);
    }
}
