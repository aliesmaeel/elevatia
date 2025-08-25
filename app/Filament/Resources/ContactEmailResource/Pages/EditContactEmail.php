<?php

namespace App\Filament\Resources\ContactEmailResource\Pages;

use App\Filament\Resources\ContactEmailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContactEmail extends EditRecord
{
    protected static string $resource = ContactEmailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
