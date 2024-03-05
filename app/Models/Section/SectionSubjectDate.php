<?php

namespace App\Models\Section;

use App\Models\Room\Room;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionSubjectDate extends Model
{
    use HasFactory, HasUuids;

    protected $table      = "section_subject_dates";
    public    $timestamps = false;
    
    protected $fillable = [
        'section_subject_id',
        'room_id',
        'day',
        'time_start',
        'time_end'
    ];

    protected $hidden = [
        'id',
        'section_subject_id',
        'room_id',
    ];

    protected function sectionSubject() {
        return $this->belongsTo(SectionSubject::class, 'section_subject_id');
    }
    
    protected function room() {
        return $this->belongsTo(Room::class, 'room_id');
    }
}
