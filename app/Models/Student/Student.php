<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Branch\Branch,
    App\Models\Department\Department;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

use Illuminate\Support\Str;

class Student extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $table = "students";

    protected $fillable = [
        'uId',
        'first_name',
        'middle_name',
        'last_name',
        'parents_email',
        'gender',
        'birth_date',
        'age',
        'address',  
        'program_id',
        'department_id',
        'branch_id',
        'role'
    ];

    protected $hidden = [
        'id',
        'uId',
        'department_id',
        'branch_id'
    ];

    protected function department() {
        return $this->belongsTo(Department::class, 'department_id');
    }

    protected function branch() {
        return $this->belongsTo(Branch::class, 'branch_id');
    }

}
