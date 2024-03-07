<?php

namespace App\Repositories\Attendance;

use App\Models\Attendance\AttendanceHistory;
use App\Models\Section\SectionSubject;
use App\Models\Student\Student;
use App\Repositories\BaseRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class CreateAttendanceHistoryRepository extends BaseRepository
{
    public function execute($request)
    {
        //        $attendance = AttendanceHistory::where('uId', $request->uId)->first();
        //        if ($attendance || $request->error) {
        //            return $this->error("Something went wrong!");
        //        }

        
        if ($request->error) {
            return $this->error('Something went wrong!');
        }

        // Get the section subject
        $sectionSubject = SectionSubject::where('code', $request->sectionSubjectCode)->first();

        // Get the closest section subject date
        $sectionSubjectDate = $this->getClosestSectionSubjectDate($request->date, $sectionSubject);

        if (! $sectionSubjectDate) {
            return $this->error('No schedule found for the current day!');
        }
       
        // Check if the student already has an attendance history for the subject at this schedule
        $formattedTimeEnd = Carbon::parse($sectionSubjectDate->time_end)->format('H:i:s');
        $formattedDate = Carbon::parse($request->date)->format('Y-m-d');
        
        $attendance = AttendanceHistory::where('student_id', $request->studentId)
            ->where('section_subject_id', $sectionSubject->id)
            ->where('date', $formattedDate)
            ->where('time', '<=', $formattedTimeEnd)
            ->first();

        if ($attendance) {
            return $this->error('Attendance history already exists for this schedule!');
        }

        // Get the attendance status
        $status = $this->getAttendanceStatus($request->time, $sectionSubjectDate);
        // Create a new attendance history
        $student = Student::where('principal_id', $request->studentInfo->principal_id)->first();
        $data = [
            'student_id' => $student->id,
            'section_subject_id' => $sectionSubject->id,
            'date' => $request->date,
            'time' => $request->time,
            'status' => $status,
        ];

        AttendanceHistory::create($data);
        
        // Serialize the array to a string
        $serializedData = serialize($data);

        // Hash the serialized string
        $hashedData = hash('sha256', $serializedData);
        
        Mail::send('emails.attendance', ['status' => $status], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Attendance Notification');
        });

        $dataCollection = [
            'serializedData'            => $serializedData,
            'hashedData'                => $hashedData
        ];

        return $this->success('Attendance history created successfully!', $dataCollection);

    }

    private function getClosestSectionSubjectDate($requestDate, $sectionSubject)
    {
        $parsedDate = Carbon::parse($requestDate);
        $dayOfWeek = $parsedDate->dayName;
        $formattedTime = $parsedDate->format('H:i');

        // Get the closest section subject dates for the current day
        $closestSectionSubjectDates = $sectionSubject->sectionSubjectDates()
            ->where('day', strtoupper($dayOfWeek))
            ->orderByRaw("ABS(TIMEDIFF(time_start, '$formattedTime'))")
            ->get();

        // Get the subject dates after the current time
        $subjectDatesAfterNow = $closestSectionSubjectDates->where('time_start', '>', $formattedTime);

        if ($subjectDatesAfterNow->count() > 0) {
            return $subjectDatesAfterNow->first();
        } else {
            return $closestSectionSubjectDates->first();
        }
    }

    private function getAttendanceStatus($requestTime, $sectionSubjectDate)
    {
        // Get the time start and time end
        $timeStart = Carbon::parse($sectionSubjectDate->time_start);
        $timeEnd = Carbon::parse($sectionSubjectDate->time_end);
        $parsedTime = Carbon::parse($requestTime);

        if ($parsedTime->lessThanOrEqualTo($timeStart)) {
            return 'PRESENT';
        } elseif ($parsedTime->lessThanOrEqualTo($timeEnd)) {
            return 'LATE';
        } else {
            return 'ABSENT';
        }
    }
}
