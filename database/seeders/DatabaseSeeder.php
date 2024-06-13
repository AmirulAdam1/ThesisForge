<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Staff;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if(User::count() == 0) {
            $this->call(UserSeeder::class);
        }

        if(Staff::count() == 0) {
            $this->call(StaffSeeder::class);
        }

        $this->call([
            PlatinumSeeder::class,
            MentorSeeder::class,  
            EducationSeeder::class,
            MembershipSeeder::class,       
        ]);
    }
}
