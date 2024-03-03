<?php

namespace Database\Factories\Building;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Branch\Branch;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Building\Building>
 */
class BuildingFactory extends Factory
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
