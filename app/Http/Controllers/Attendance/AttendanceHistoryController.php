<?php

namespace App\Http\Controllers\Attendance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// * REQUEST
use App\Http\Requests\Attendance\CreateAttendanceHistoryRequest;

// * REPOSITORIES
use App\Repositories\Attendance\CreateAttendanceHistoryRepository;

class AttendanceHistoryController extends Controller
{
    protected $create;

    // * CONSTRUCTOR INJECTION
    public function __construct(
        CreateAttendanceHistoryRepository        $create
    ){
        $this->create   = $create;
    }

    protected function create(CreateAttendanceHistoryRequest $request){
        return $this->create->execute($request);
    }
}
