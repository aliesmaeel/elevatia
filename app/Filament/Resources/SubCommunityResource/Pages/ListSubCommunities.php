<?php

namespace App\Filament\Resources\SubCommunityResource\Pages;

use App\Filament\Resources\SubCommunityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSubCommunities extends ListRecords
{
    protected static string $resource = SubCommunityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
