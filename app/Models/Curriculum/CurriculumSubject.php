<?php

namespace App\Models\Curriculum;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use  App\Models\Subject\Subject,
    App\Models\Curriculum\Curriculum,
    App\Models\Curriculum\CurriculumPrerequisite,
    App\Models\Curriculum\CurriculumCorequisite;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class CurriculumSubject extends Model
{
    use HasFactory, HasUuids;

    protected $table      = "curriculum_subjects";
    public    $timestamps = false;

    protected $fillable = [
        'curriculum_id',
        'subject_id',
        'year_level',
        'semester'
    ];

    protected $hidden = [
        'id',
        'curriculum_id',
        'subject_id'
    ];

    protected function curriculum() {
        return $this->belongsTo(Curriculum::class, 'curriculum_id');
    }
    
    protected function subject() {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
