<?php

namespace App\Filament\Resources\AminityResource\Pages;

use App\Filament\Resources\AminityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAminities extends ListRecords
{
    protected static string $resource = AminityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
