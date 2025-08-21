<?php

namespace App\Filament\Resources\SubCommunities\Pages;

use App\Filament\Resources\SubCommunities\SubCommunityResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSubCommunities extends ListRecords
{
    protected static string $resource = SubCommunityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
