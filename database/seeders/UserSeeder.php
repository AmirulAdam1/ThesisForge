<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        User::create([
            'name' => 'Staff',
            'email' => 'staff@email.com',
            'password' => bcrypt('1234'),
            'phone' => '+1234567890',
            'role' => 'staff',     
            'email_verified_at' => now(),         
        ]);

        User::create([
            'name' => 'Platinum',
            'email' => 'platinum@email.com',
            'password' => bcrypt('1234'),
            'phone' => '+0987654321',
            'email_verified_at' => now(),               
        ]);

        User::create([
            'name' => 'Mentor',
            'email' => 'mentor@email.com',
            'password' => bcrypt('1234'),
            'phone' => '+1357924680',
            'role' => 'mentor',
            'email_verified_at' => now(),       
        ]);

        User::factory(10)->create([
            'role' => 'platinum',
        ]);

    }
}
