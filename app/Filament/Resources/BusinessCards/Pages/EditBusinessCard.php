<?php

namespace App\Filament\Resources\BusinessCards\Pages;

use App\Filament\Resources\BusinessCards\BusinessCardResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditBusinessCard extends EditRecord
{
    protected static string $resource = BusinessCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
