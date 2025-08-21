<?php

namespace App\Filament\Resources\SubCommunities\Pages;

use App\Filament\Resources\SubCommunities\SubCommunityResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSubCommunity extends EditRecord
{
    protected static string $resource = SubCommunityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
