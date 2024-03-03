<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// * REQUEST
use App\Http\Requests\Student\CreateStudentRequest;

// * REPOSITORIES
use App\Repositories\Student\CreateStudentRepository;

class StudentController extends Controller
{
    protected $create;

    // * CONSTRUCTOR INJECTION
    public function __construct(
        CreateStudentRepository        $create
    ){
        $this->create   = $create;
    }

    protected function create(CreateStudentRequest $request){
        return $this->create->execute($request);
    }
}
