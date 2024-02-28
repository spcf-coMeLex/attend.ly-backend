<?php

namespace App\Models\Department;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Branch\Branch,
    App\Models\Employee\Employee,
    App\Models\Section\Section,
    App\Models\Subject\Subject,
    App\Models\Program\Program;


use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Department extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $table = "departments";

    protected $fillable = [
        'code',
        'name',
        'type',
        'branch_id'
    ];

    protected $hidden = [
        'id',
        'branch_id',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    protected function branch() {
        return $this->belongsTo(Branch::class, 'branch_id');
    }

    protected function employee() {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    protected function subject() {
        return $this->hasMany(Subject::class, 'department_id');
    }

    public function sections()
    {
        return $this->hasMany(Section::class, 'department_id');
    }

    public function programs()
    {
        return $this->hasMany(Program::class, 'department_id');
    }


}
