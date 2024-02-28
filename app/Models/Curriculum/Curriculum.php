<?php

namespace App\Models\Curriculum;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Branch\Branch,
    App\Models\Department\Department,
    App\Models\Program\Program,
    App\Models\Curriculum\CurriculumSubject;

class Curriculum extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $table = "curriculums";

    protected $fillable = [
        'code',
        'department_id',
        'program_id',
        'branch_id',
        'branch_id'
    ];

    protected $hidden = [
        'id',
        'department_id',
        'program_id',
        'branch_id',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    protected function branch() {
        return $this->belongsTo(Branch::class, 'branch_id');
    }

    protected function department() {
        return $this->belongsTo(Department::class, 'department_id');
    }

    protected function program() {
        return $this->belongsTo(Program::class, 'program_id');
    }

    protected function curriculumSubject() {
        return $this->hasMany(CurriculumSubject::class, 'curriculum_id');
    }
}
