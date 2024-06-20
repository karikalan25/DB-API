<?php

namespace Database\Seeders;

use App\Models\employe;
use App\Models\experience;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        employe::factory()->count(60)->has(experience::factory()) ->create();


    }
}
