<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Room\Room;

class StudentSectionSubjectDate extends Model
{
    use HasFactory, HasUuids;

    protected $table = "student_subject_dates";
    public    $timestamps = false;

    protected $fillable = [
        'student_id',
        'student_section_subject_id',
        'room_id',
        'day',
        'time_start',
        'time_end'
    ];

    protected $hidden = [
        'id',
        'student_id',
        'section_subject_id',
        'room_id',
    ];

    protected $casts = [
        'time_start' => 'datetime:H:i:s',
        'time_end'   => 'datetime:H:i:s',
    ];

    protected function studentSectionSubject() {
        return $this->belongsTo(StudentSectionSubject::class, 'student_section_subject_id');
    }

    protected function room() {
        return $this->belongsTo(Room::class, 'room_id');
    }
}
