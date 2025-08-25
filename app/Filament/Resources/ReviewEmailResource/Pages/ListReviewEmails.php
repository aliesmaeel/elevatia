<?php

namespace App\Filament\Resources\ReviewEmailResource\Pages;

use App\Filament\Resources\ReviewEmailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReviewEmails extends ListRecords
{
    protected static string $resource = ReviewEmailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
