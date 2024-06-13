<?php

namespace Database\Seeders;

use App\Models\Platinum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlatinumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Platinum::factory(11)->create();
    }
}
