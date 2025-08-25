<?php

namespace App\Filament\Resources\ContactEmailResource\Pages;

use App\Filament\Resources\ContactEmailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContactEmails extends ListRecords
{
    protected static string $resource = ContactEmailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
