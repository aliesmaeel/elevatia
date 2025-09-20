<?php

namespace App\Helpers;

use App\Models\City;
use App\Models\Community;
use App\Models\SubCommunity;

class RealestateTypes
{
    public static function getPropertyTypes(): array
    {
        return [
            'flat' => 'Flat',
            'bulk unit' => 'Bulk Unit',
            'bungalow' => 'Bungalow',
            'compound' => 'Compound',
            'duplex' => 'Duplex',
            'factory' => 'Factory',
            'farm' => 'Farm',
            'full floor' => 'Full Floor',
            'hotel apartment' => 'Hotel Apartment',
            'half floor' => 'Half Floor',
            'labor camp' => 'Labor Camp',
            'land/plot' => 'Land/Plot',
            'office space' => 'Office Space',
            'retail'=> 'Retail',
            'restaurant' => 'Restaurant',
            'staff accommodation' => 'Staff Accommodation',
            'shop' => 'Shop',
            'showroom' => 'Showroom',
            'co-working space' => 'Co-Working Space',
            'storage' => 'Storage',
            'townhouse' => 'Townhouse',
            'villa' => 'Villa',
            'whole building' => 'Whole Building',
            'warehouse' => 'Warehouse',
            'workshop' => 'Workshop',
            'studio' => 'Studio',
        ];
    }

    public static function getPropertyStatus(): array
    {
        return [
            'for_sale' => 'For Sale',
            'for_rent' => 'For Rent',
        ];
    }

    public static function getCompletionStatus(): array
    {
        return [
            'ready' => 'Ready',
            'off_plan' => 'Off Plan',
        ];
    }


    public static function getSearchable()
    {
        $searchable = array_merge(
            City::pluck('name')->toArray(),
            Community::pluck('name')->toArray(),
            SubCommunity::pluck('name')->toArray()
        );

        return $searchable;
    }

}
