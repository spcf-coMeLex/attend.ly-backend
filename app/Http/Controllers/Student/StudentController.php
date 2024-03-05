<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// * REQUEST
use App\Http\Requests\Student\CreateStudentRequest,
    App\Http\Requests\Student\ShowWalletRequest;

// * REPOSITORIES
use App\Repositories\Student\CreateStudentRepository,
    App\Repositories\Student\Page\Student\ShowStudentWalletRepository;

class StudentController extends Controller
{
    protected $create, $showWallet;

    // * CONSTRUCTOR INJECTION
    public function __construct(
        CreateStudentRepository        $create,
        ShowStudentWalletRepository    $showWallet

    ){
        $this->create           = $create;
        $this->showWallet       = $showWallet;
    }

    protected function create(CreateStudentRequest $request){
        return $this->create->execute($request);
    }

    protected function showWallet(ShowWalletRequest $request){
        return $this->showWallet->execute($request);
    }
}
