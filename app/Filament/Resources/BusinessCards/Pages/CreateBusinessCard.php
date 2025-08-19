<?php

namespace App\Filament\Resources\BusinessCards\Pages;

use App\Filament\Resources\BusinessCards\BusinessCardResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBusinessCard extends CreateRecord
{
    protected static string $resource = BusinessCardResource::class;
}
