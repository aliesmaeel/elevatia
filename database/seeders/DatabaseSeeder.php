<?php

namespace Database\Seeders;

use App\Models\Property;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            AminitiesSeeder::class,
            AgentSeeder::class,
            CityCommunitySeeder::class,
            HomePageSeeder::class,
        ]);

        Property::factory()->count(40)->create();

    }
}
