<?php

namespace App\Filament\Resources\BusinessCards\Pages;

use App\Filament\Resources\BusinessCards\BusinessCardResource;
use Filament\Resources\Pages\ViewRecord;

class ViewBusinessCard extends ViewRecord
{
    protected static string $resource = BusinessCardResource::class;

    protected function getViewData(): array
    {
        return [
            'record' => $this->record,
        ];
    }

    public function getView(): string
    {
        return 'filament.resources.business-cards.view-business-card';
    }
}
