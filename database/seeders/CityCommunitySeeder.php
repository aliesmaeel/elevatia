<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Community;
use App\Models\SubCommunity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CityCommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            "Dubai" => [
                "Downtown Dubai" => ["Burj Khalifa Area", "Opera District", "Emaar Square"],
                "Dubai Marina"   => ["Marina Promenade", "Jumeirah Beach Residence (JBR)", "Marina Quays"],
            ],
            "London" => [
                "Kensington & Chelsea" => ["South Kensington", "Chelsea Riverside", "Notting Hill"],
                "Camden"               => ["Camden Town", "Hampstead", "Belsize Park"],
            ],
            "New York City" => [
                "Manhattan" => ["Upper East Side", "Harlem", "Financial District"],
                "Brooklyn"  => ["Williamsburg", "Brooklyn Heights", "DUMBO"],
            ],
        ];

        foreach ($data as $cityName => $communities) {
            $city = City::create(['name' => $cityName]);

            foreach ($communities as $communityName => $subcommunities) {
                $community = Community::create([
                    'name' => $communityName,
                    'city_id' => $city->id,
                ]);

                foreach ($subcommunities as $subName) {
                    SubCommunity::create([
                        'name' => $subName,
                        'community_id' => $community->id,
                    ]);
                }
            }
        }

    }
}
