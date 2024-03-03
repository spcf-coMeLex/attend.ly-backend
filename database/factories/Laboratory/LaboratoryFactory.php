<?php

namespace Database\Factories\Laboratory;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Branch\Branch;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Laboratory\Laboratory>
 */
class LaboratoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $branch = Branch::first();
        return [
            "branch_id" => $branch->id
        ];
    }
}
