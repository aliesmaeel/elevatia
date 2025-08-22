<?php

namespace App\Helpers;

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
        ];
    }

    public static function getPropertyStatus(): array
    {
        return [
            'for_sale' => 'For Sale',
            'for_rent' => 'For Rent',
            'sold' => 'Sold',
            'rented' => 'Rented',
        ];
    }
}
