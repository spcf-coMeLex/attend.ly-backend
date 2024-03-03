<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Student\Student,
    App\Models\Section\Section;

class StudentSection extends Model
{
    use HasFactory, HasUuids;

    protected $table = "student_sections";

    protected $fillable = [
        'student_id',
        'section_id',
        'school_year',
        'semester'
    ];

    protected $hidden = [
        'id',
        'student_id',
        'section_id',
    ];

    protected function student() {
        return $this->belongsTo(Student::class, 'student_id');
    }

    protected function section() {
        return $this->belongsTo(Section::class, 'section_id');
    }
}
