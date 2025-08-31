<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('home_pages')->insert([
            'banner'=>'banner.jpg',
            'about_elevatia' => 'Find Your Dream Home Today',
            'our_vision' => 'Discover the best properties in the city with our comprehensive listings and expert agents.',
            'our_mission' => 'Discover the best properties in the city with our comprehensive listings and expert agents.',
            'active'=>1
        ]);
    }
}
