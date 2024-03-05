<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// * REQUEST
use App\Http\Requests\Employee\CreateEmployeeReqeust,
    App\Http\Requests\Employee\ShowDashboardRequest,
    App\Http\Requests\Employee\ShowSectionRequest,
    App\Http\Requests\Employee\ShowSectionSubjectRequest,
    App\Http\Requests\Employee\ShowSubjectRequest,
    App\Http\Requests\Employee\ShowStudentRequest;

// * REPOSITORIES
use App\Repositories\Employee\CreateEmployeeRepository,
    App\Repositories\Employee\Page\Teacher\ShowDashboardRepository,
    App\Repositories\Employee\Page\Teacher\ShowSectionRepository,
    App\Repositories\Employee\Page\Teacher\ShowSectionSubjectRepository,
    App\Repositories\Employee\Page\Teacher\ShowSubjectRepository,
    App\Repositories\Employee\Page\Teacher\ShowStudentRepository;

class EmployeeController extends Controller
{
    protected $create, $showDashboard, $showSection, $showSectionSubject, $showSubject, $showStudent;

    // * CONSTRUCTOR INJECTION
    public function __construct(
        CreateEmployeeRepository        $create,
        ShowDashboardRepository         $showDashboard,
        ShowSectionRepository           $showSection,
        ShowSectionSubjectRepository    $showSectionSubject,
        ShowSubjectRepository           $showSubject,
        ShowStudentRepository           $showStudent
    ){
        $this->create               = $create;
        $this->showDashboard        = $showDashboard;
        $this->showSection          = $showSection;
        $this->showSectionSubject   = $showSectionSubject;
        $this->showSubject          = $showSubject;
        $this->showStudent          = $showStudent;
    }

    protected function create(CreateEmployeeReqeust $request){
        return $this->create->execute($request);
    }

    protected function showDashboard(ShowDashboardRequest $request){
        return $this->showDashboard->execute($request);
    }

    protected function showSection(ShowSectionRequest $request){
        return $this->showSection->execute($request);
    }

    protected function showSectionSubject(ShowSectionSubjectRequest $request){
        return $this->showSectionSubject->execute($request);
    }

    protected function showSubject(ShowSubjectRequest $request){
        return $this->showSubject->execute($request);
    }

    protected function showStudent(ShowStudentRequest $request){
        return $this->showStudent->execute($request);
    }
}
