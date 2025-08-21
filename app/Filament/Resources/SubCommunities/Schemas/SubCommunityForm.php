<?php

namespace App\Filament\Resources\SubCommunities\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SubCommunityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Select::make('community_id')
                    ->label('Community')
                    ->relationship('community', 'name')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->placeholder('Select a community'),
            ]);
    }
}
