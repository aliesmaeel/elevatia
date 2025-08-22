<?php

namespace App\Filament\Resources\AllPropertyResource\Pages;

use App\Filament\Resources\AllPropertyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAllProperties extends ListRecords
{
    protected static string $resource = AllPropertyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
