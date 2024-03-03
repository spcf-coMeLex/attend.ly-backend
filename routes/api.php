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
});

Route::prefix('dashboard')->group(function (){
    Route::post('/show', [EmployeeController::class, 'showDashboard']);
});



// **Employees
Route::prefix('students')->group(function () {
    Route::post('/create', [StudentController::class, 'create']);
});



// **Attendance
Route::prefix('attendance')->group(function () {
    Route::post('/create', [AttendanceHistoryController::class, 'create']);
});



