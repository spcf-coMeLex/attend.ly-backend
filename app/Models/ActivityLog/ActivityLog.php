<?php

namespace App\Models\ActivityLog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Employee\Employee,
    App\Models\Student\Student;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class ActivityLog extends Model
{
    use HasFactory, HasUuids;
    protected $table = "activity_logs";

    const  UPDATED_AT  = NULL;

    protected $fillable = [
        'employee_id', 
        'student_id',
        'action',
        'module',
        'message',
    ];

    protected $hidden = [
        'id',
        'employee_id',
        'student_id',
        'created_at',
    ];


    protected function user() {
        return $this->belongsTo(Employee::class, 'employee_id');
    }


    protected function student() {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
