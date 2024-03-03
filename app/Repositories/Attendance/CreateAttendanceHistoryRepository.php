<?php

namespace App\Repositories\Attendance;

use App\Models\Section\SectionSubject;
use App\Repositories\BaseRepository;

use App\Models\Attendance\AttendanceHistory;

class CreateAttendanceHistoryRepository extends BaseRepository
{
    public function execute($request)
    {
        $attendance = AttendanceHistory::where('uId', $request->uId)->first();
        if ($attendance || $request->error == true) {
            return $this->error("Something went wrong!");
        } else{
            $sectionSubject = SectionSubject::where('code', $request->sectionSubjectCode)->first();
            AttendanceHistory::create([
                "uId"                   => $request->uId,
                "section_subject_id"    => $sectionSubject->id,
                "date"                  => $request->date,
                "time"                  => $request->time
            ]);
        }

        return $this->success('Attendance history created successfully!');
    }
}
