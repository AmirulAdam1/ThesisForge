<?php

namespace Database\Factories;

use App\Models\Platinum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Membership>
 */
class MembershipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'platinum_id' => $this->faker->unique()->numberBetween(1, Platinum::count()),
            'registration_type' => fake()->randomElement(['New', 'Renewal', 'Upgrade(Premier)', 'Downgrade(Elite)', 'Ala Carte']),
            'program_interested' => fake()->randomElement(['Platinum Professorship', 'Platinum Premier', 'Platinum Elite', 'Platinum Dr.Jr.', 'Ala Carte']),
            'program_batch' => fake()->randomElement(['1', '2', '3', '7', '10', '15', '16']),
            'referral_exist' => fake()->randomElement(['yes', 'no']),
            'referral_name' => fake()->name(),
            'referral_batch' => fake()->numerify('##'),
            'consent' => 1,
            'application_date' => fake()->date(),
        ];
    }
}
