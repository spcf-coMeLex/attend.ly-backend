<?php

namespace Database\Factories\Program;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Branch\Branch,
    App\Models\Department\Department;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Program\Program>
 */
class ProgramFactory extends Factory
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

        return [
            "branch_id"         => $branch->id,
            "department_id"     => $department->id
        ];
    }
}
