<?php

namespace App\Filament\Resources\SubscriptionEmailResource\Pages;

use App\Filament\Resources\SubscriptionEmailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSubscriptionEmails extends ListRecords
{
    protected static string $resource = SubscriptionEmailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
