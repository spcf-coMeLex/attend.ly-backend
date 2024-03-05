<?php

namespace App\Repositories\Employee\Page\Teacher;


use App\Repositories\BaseRepository;

use App\Models\Student\Student;


use Illuminate\Support\Facades\Hash;

class ShowStudentRepository extends BaseRepository
{
    public function execute($request)
    {
        if($request->studentId){
            $student = Student::where('id', $request->studentId)->first();
        } else{
            return $this->error('Student not found!');
        }
            

        return $this->success('Student Info', $student ?? null);
    }
}
