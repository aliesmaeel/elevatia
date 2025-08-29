<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('agents')->insert([
            'name' => 'John Doe',
            'email'=>'joun@doe.com',
            'phone'=>'1234567890',
            'position'=>'Real Estate Agent',
            'description'=>'Experienced real estate agent specializing in residential properties.',
            'experience'=>5,
            'languages'=>'["en","es"]',
            'image'=>'agent1.jpg',
            'created_at' => now(),
        ]);
    }
}
