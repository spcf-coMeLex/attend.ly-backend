<?php



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Attendance\AttendanceHistoryController,
    App\Http\Controllers\Employee\EmployeeController,
    App\Http\Controllers\Student\StudentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// **Employees
Route::prefix('employees')->group(function () {
    Route::post('/create', [EmployeeController::class, 'create']);
    Route::post('/dashboard/show', [EmployeeController::class, 'showDashboard']);
    Route::post('/section/show', [EmployeeController::class, 'showSection']);
    Route::post('section-subject/show', [EmployeeController::class, 'showSectionSubject']);
    Route::post('/subject/show', [EmployeeController::class, 'showSubject']);
    Route::post('/student/show', [EmployeeController::class, 'showStudent']);
});


// **Students
Route::prefix('students')->group(function () {
    Route::post('/create', [StudentController::class, 'create']);
});



// **Attendance
Route::prefix('attendance')->group(function () {
    Route::post('/create', [AttendanceHistoryController::class, 'create']);
});



