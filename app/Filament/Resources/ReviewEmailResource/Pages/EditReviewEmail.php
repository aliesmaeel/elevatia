<?php

namespace App\Filament\Resources\ReviewEmailResource\Pages;

use App\Filament\Resources\ReviewEmailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReviewEmail extends EditRecord
{
    protected static string $resource = ReviewEmailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
