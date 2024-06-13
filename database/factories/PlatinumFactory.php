<?php

namespace Database\Factories;

use App\Models\Staff;
use App\Models\User;
use App\Models\Platinum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Platinum>
 */
class PlatinumFactory extends Factory
{
    protected $model = Platinum::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIds = User::where('role', 'platinum')->pluck('id')->toArray();
        $staffIds = Staff::pluck('id')->toArray();

        return [
            'user_id' => fake()->unique()->randomElement($userIds),
            'staff_id' => fake()->randomElement($staffIds),
            'title' => fake()->randomElement(['Dato', 'Datin', 'Dr', 'Prof', 'Mr', 'Mrs', 'Miss']),
            'identity_card' => fake()->unique()->numerify('############'), // 12 digits (no dash)
            'gender' => fake()->randomElement(['Male', 'Female']),
            'religion' => fake()->randomElement(['Islam', 'Christian', 'Buddha', 'Hindu', 'Sikh']),
            'race' => fake()->randomElement(['Malay', 'Chinese', 'Indian', 'Others']), // others (iban, kadazan, dusun, murut, bidayuh, melanau, etc.)
            'citizenship' => fake()->randomElement(['Malaysia', 'Indonesia', 'Thailand', 'Singapore', 'Brunei']),
            'address' => fake()->address(), // NO 12, JALAN 34, TAMAN 56
            'city' => fake()->city(),
            'state' => fake()->state(),
            'postcode' => fake()->postcode(),
            'country' => fake()->country(),
            'facebook_name' => fake()->userName(),
        ];
    }

    /**
     * Create a Platinum instance associated with a given Staff instance.
     *
     * @return \App\Models\Platinum
     */
    public function createWithStaff(Staff $staff): Platinum
    {
        return $staff->platinums()->create($this->definition());
    }
}
