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
        if($request->studentInfo){
            $student = Student::where('principal_id]', $request->studentInfo->principal_id)->first();
            $studentAttendance = AttendanceHistory::where('student_id', $student->id)->get();

            $data = [
                "firstName"             => $request->studentInfo->firstName,
                "middleName"            => $request->studentInfo->middleName,
                "lastName"              => $request->studentInfo->lastName,
                "gender"                => $request->studentInfo->gender,
                "birthDate"             => $request->studentInfo->birthDate,
                "address"               => $request->studentInfo->address,
                "parentsEmail"          => $request->studentInfo->parentsEmail,
                "points"                => $request->studentInfo->points,
                "studentAttendance"     => $studentAttendance
            ];
        } else{
            return $this->error('Student not found!');
        }
            

        return $this->success('Student Info', $data ?? null);
    }
}
