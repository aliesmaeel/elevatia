<?php

namespace App\Filament\Resources\OffPlanProjectResource\Pages;

use App\Filament\Resources\OffPlanProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOffPlanProject extends EditRecord
{
    protected static string $resource = OffPlanProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
