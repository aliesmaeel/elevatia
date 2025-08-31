<?php

namespace Database\Factories;

use App\Helpers\RealestateTypes;
use App\Models\City;
use App\Models\Community;
use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Property::class;

    public function definition(): array
    {
        $title = $this->faker->streetName().' Apartment';

        return [
            'type'              => $this->faker->randomElement(RealestateTypes::getPropertyTypes()),
            'slug'              => Str::slug($title.'-'.Str::random(6)),
            'title'             => $title,
            'price'             => $this->faker->numberBetween(50_000, 3_000_000),
            'city_id'           => 1,
            'community_id'      => 1,
            'sub_community_id'  => 1,
            'description'       => $this->faker->paragraphs(2, true),
            'size'              => $this->faker->numberBetween(35, 600), // sqm
            'status'            => $this->faker->randomElement(array_keys(RealestateTypes::getPropertyStatus())),
            'agent_id'          => 1,
            'latitude'          => $this->faker->latitude(25.0, 25.3), // Example coordinates for Dubai
            'longitude'         => $this->faker->longitude(55.0, 55.3),
            'address'           => $this->faker->address(),
            'is_premium'       => $this->faker->randomElement([true, false]),
            'active'            => true,
            'created_at'        => now(),
            'updated_at'        => now(),
        ];
    }
}
