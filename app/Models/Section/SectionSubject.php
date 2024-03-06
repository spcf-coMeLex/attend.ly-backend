<?php

namespace App\Models\Section;


use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Subject\Subject,
    App\Models\Employee\Employee;

use Illuminate\Support\Str;

class SectionSubject extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $table      = "section_subjects";

    protected $fillable = [
        'section_id',
        'code',
        'subject_id',
        'employee_id'
    ];

    protected $hidden = [
        'id',
        'section_id',
        'subject_id',
        'employee_id',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    protected function subject() {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    protected function section() {
        return $this->belongsTo(Section::class, 'section_id');
    }

    protected function employee() {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function sectionSubjectDates() {
        return $this->hasMany(SectionSubjectDate::class, 'section_subject_id');
    }

}
