<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expert>
 */
class ExpertFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'expert_id' => $this->faker->unique()->randomNumber(5),
            'expert_name' => $this->faker->name,
            'expert_domain' => $this->faker->word,
            'expert_university' => $this->faker->company,
            'expert_email' => $this->faker->unique()->safeEmail,
            'expert_phone_number' => $this->faker->phoneNumber,
            'domain_name' => $this->faker->word,
        ];
    }
}
