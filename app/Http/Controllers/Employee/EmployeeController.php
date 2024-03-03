<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// * REQUEST
use App\Http\Requests\Employee\CreateEmployeeReqeust,
    App\Http\Requests\Employee\ShowDashboardRequest;

// * REPOSITORIES
use App\Repositories\Employee\CreateEmployeeRepository,
    App\Repositories\Dashboard\Employee\ShowDashboardRepository;

class EmployeeController extends Controller
{
    protected $create, $showDashboard;

    // * CONSTRUCTOR INJECTION
    public function __construct(
        CreateEmployeeRepository        $create,
        ShowDashboardRepository         $showDashboard
    ){
        $this->create               = $create;
        $this->showDashboard        = $showDashboard;
    }

    protected function create(CreateEmployeeReqeust $request){
        return $this->create->execute($request);
    }

    protected function showDashboard(ShowDashboardRequest $request){
        return $this->showDashboard->execute($request);
    }
}
