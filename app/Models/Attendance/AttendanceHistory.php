<?php

namespace App\Models\Attendance;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Section\SectionSubject;

class AttendanceHistory extends Model
{
    use HasFactory, HasUuids;

    protected $table    = "attendance_history";

    public $timestamps = false;
    
    protected $fillable = [
        'uId',
        'student_id',
        'section_subject_id',
        'date',
        'time',
        'status'
    ];

    protected $hidden = [
        'id',
        'uId',
        'student_id',
        'section_subject_id'
    ];

    protected $casts = [
        'date' => 'date'
    ];

    protected function sectionSubject() {
        return $this->belongsTo(SectionSubject::class, 'section_subject_id');
    }
}
