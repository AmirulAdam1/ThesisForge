<?php

namespace Database\Factories;

use App\Models\Platinum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'platinum_id' => fake()->unique()->numberBetween(1, Platinum::count()),
            'current_level' => fake()->randomElement(['A-level', 'Diploma', 'Degree', 'Master', 'Phd']),
            'field' => fake()->randomElement(['science', 'engineering', 'business', 'arts', 'law', 'medicine']),
            'institute' => fake()->company(),
            'occupation' => fake()->jobTitle(),
            'study_sponsorship' => fake()->randomElement(['self', 'parents', 'scholarship', 'loan'])
        ];
    }
}
