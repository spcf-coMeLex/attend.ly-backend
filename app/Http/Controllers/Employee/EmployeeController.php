<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// * REQUEST
use App\Http\Requests\Employee\CreateEmployeeReqeust;

// * REPOSITORIES
use App\Repositories\Employee\CreateEmployeeRepository;

class EmployeeController extends Controller
{
    protected $create;

    // * CONSTRUCTOR INJECTION
    public function __construct(
        CreateEmployeeRepository        $create
    ){
        $this->create   = $create;
    }

    protected function create(CreateEmployeeReqeust $request){
        return $this->create->execute($request);
    }
}
