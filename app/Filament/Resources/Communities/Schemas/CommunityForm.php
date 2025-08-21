<?php

namespace App\Filament\Resources\Communities\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CommunityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Select::make('city_id')
                    ->label('City')
                    ->relationship('city', 'name')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->placeholder('Select a city'),
            ]);
    }
}
