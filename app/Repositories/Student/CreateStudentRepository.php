<?php

namespace App\Repositories\Student;

use App\Models\SchoolYear\SchoolYear;
use App\Models\SchoolYear\Semester;
use App\Models\Section\SectionSubject;
use App\Repositories\BaseRepository;

use App\Models\Program\Program,
    App\Models\Branch\Branch,
    App\Models\Department\Department,
    App\Models\Student\Student,
    App\Models\Section\Section,
    App\Models\Section\SectionSubjectDate,
    App\Models\Student\StudentSection,
    App\Models\Student\StudentSectionSubject,
    App\Models\Student\StudentSectionSubjectDate,
    App\Models\ActivityLog\ActivityLog;

class CreateStudentRepository extends BaseRepository
{
    public function execute($request)
    {
        if ($request->role == "STUDENT") {
            $schoolYear = SchoolYear::where('status', 'OPEN')->first();
            $semester = Semester::where('enrollment_status', 'OPEN')->first();
            $section = Section::where('code', $request->sectionCode)->first();
            $sectionSubjects = SectionSubject::where('section_id', $section->id)->get();
            $program = Program::where('code', $request->programCode)->first();
            $branch = Branch::where('name', $request->branchName)->first();
            $department = Department::where('code', $request->departmentCode)->first();

            $checkConflicts = SectionSubject::where('section_id', $section->id)->get();
            $conflictArray = [];
            foreach($checkConflicts as $checkConflict){
                if($checkConflict->student_counter === $checkConflict->student_limit){
                    array_push($conflictArray, $checkConflict->id);
                }
            }

            if(!empty($conflictArray)){
                $conflicts = SectionSubject::whereIn('id', $conflictArray)->get();
                $data = [
                    "sectionSubject"    => []
                ];
                foreach($conflicts as $conflict){
                    array_push($data["sectionSubject"], [
                                "student_counter"       => $conflict->student_counter,
                                "student_limit"         => $conflict->student_limit,
                                "subject"               => ["subjectCode"   => $conflict->subject->code,
                                                            "subjectName"   => $conflict->subject->name]
                            ]);
                }

                return $this->error("Conflict found!", $data);
            }

            $student = Student::create([
                "uId"               => $request->uId,
                "first_name"        => $request->firstName,
                "middle_name"       => $request->middleName,
                "last_name"         => $request->lastName,
                "parents_email"     => $request->parentsEmail,
                "gender"            => $request->gender,
                "birth_date"        => $request->birthDate,
                "address"           => $request->address,
                "program_id"        => $program->id,
                "department_id"     => $department->id,
                "branch_id"         => $branch->id,
            ]);

            $studentSection = StudentSection::create([
                "student_id"            => $student->id,
                "section_id"            => $section->id,
                "school_year"           => $schoolYear->school_year,
                "semester"              => $semester->semester
            ]);
            $temp = [];
            foreach($sectionSubjects as $sectionSubject){
                $sectionSubject->student_counter += 1;
                $sectionSubject->update([
                    "student_counter"      => $sectionSubject->student_counter
                ]);

                $studentSectionSubject = StudentSectionSubject::create([
                    "student_section_id"        => $studentSection->id,
                    "section_subject_id"        => $sectionSubject->id
                ]);

                $subjectDates = SectionSubjectDate::where('section_subject_id', $studentSectionSubject->section_subject_id)->get();
                if($subjectDates){
                    foreach($subjectDates as $subjectDate){
                        StudentSectionSubjectDate::create([
                            'student_id'                   => $student->id,
                            'student_section_subject_id'   => $studentSectionSubject->id,
                            'room_id'                      => $subjectDate->room_id,
                            'day'                          => $subjectDate->day,
                            'time_start'                   => $subjectDate->time_start,
                            'time_end'                     => $subjectDate->time_end                   
                        ]);
                    }
                    
                }
                
            }



            ActivityLog::create([
                "student_id"    => $student->id,
                "action"        => "CREATE",
                "module"        => "STUDENT",
                "message"       => "SUCCESSFULLY CREATED AN STUDENT ACCOUNT"
            ]);


        } else{
            return $this->error("Only student role can be created or student already registered.");
        }

        return $this->success('Student account created successfully!', $student->id);
    }
}
