<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Student\StudentSection,
    App\Models\Section\SectionSubject;

class StudentSectionSubject extends Model
{
    use HasFactory, HasUuids;

    protected $table = "student_section_subjects";

    protected $fillable = [
        'student_section_id',
        'section_subject_id'
    ];

    protected $hidden = [
        'id',
        'student_section_id',
        'section_subject_id',
    ];

    protected function studentSection() {
        return $this->belongsTo(StudentSection::class, 'student_section_id');
    }

    protected function sectionSubject() {
        return $this->belongsTo(SectionSubject::class, 'section_subject_id');
    }
}
