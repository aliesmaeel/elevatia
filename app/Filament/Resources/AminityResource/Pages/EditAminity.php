<?php

namespace App\Filament\Resources\AminityResource\Pages;

use App\Filament\Resources\AminityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAminity extends EditRecord
{
    protected static string $resource = AminityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
