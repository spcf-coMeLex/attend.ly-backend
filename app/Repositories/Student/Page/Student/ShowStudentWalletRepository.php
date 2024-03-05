<?php
namespace App\Repositories\Student\Page\Student;


use App\Repositories\BaseRepository;

use App\Models\Student\Student;


use Illuminate\Support\Facades\Hash;

class ShowStudentWalletRepository extends BaseRepository
{
    public function execute($request)
    {
        if($request->studentId){
            $student = Student::where('id', $request->studentId)->first();
            $data = ['studentPoints' => $student->points,
                     'createdAt'     => date($student->created_at)];
        } else{
            return $this->error('Student not found!');
        }
            

        return $this->success('Student Info', $data ?? null);
    }
}
