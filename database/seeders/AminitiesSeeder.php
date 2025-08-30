<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AminitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('amenities')->insert([
            ['name' => 'Built-in kitchen appliances', 'image' => 'amenities/swimming_pool.png'],
            ['name' => 'Shared spa', 'image' => 'amenities/gym.png'],
            ['name' => 'Children\'s play area', 'image' => 'amenities/parking.png'],
            ['name' => 'Shared gym', 'image' => 'amenities/garden.png'],
            ['name' => 'Walk-in closet', 'image' => 'amenities/playground.png'],
        ]);
    }
}
