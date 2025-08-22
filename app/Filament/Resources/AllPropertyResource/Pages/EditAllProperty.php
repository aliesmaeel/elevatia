<?php

namespace App\Filament\Resources\AllPropertyResource\Pages;

use App\Filament\Resources\AllPropertyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAllProperty extends EditRecord
{
    protected static string $resource = AllPropertyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
