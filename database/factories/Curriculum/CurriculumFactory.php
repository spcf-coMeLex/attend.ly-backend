<?php

namespace Database\Factories\Curriculum;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Branch\Branch,
    App\Models\Department\Department,
    App\Models\Program\Program;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curriculum\Curriculum>
 */
class CurriculumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $branch = Branch::first();
        $department = Department::where('code', "CCIS")->first();
        $program = Program::first();
        return [
            "branch_id"     => $branch->id,
            "department_id" => $department->id,
            "program_id"    => $program->id
        ];
    }
}
