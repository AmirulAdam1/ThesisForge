<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mentor>
 */
class MentorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {        
        $userIds = User::where('role', 'mentor')->pluck('id')->toArray();
        
        return [
            'user_id' => fake()->unique()->randomElement($userIds),
            'address' => fake()->address(), // NO 12, JALAN 34, TAMAN 56, 26600 PEKAN, PAHANG
        ];
    }
}
