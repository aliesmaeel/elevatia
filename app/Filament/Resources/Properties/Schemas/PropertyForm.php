<?php

namespace App\Filament\Resources\Properties\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PropertyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('type')
                    ->default(null),
                TextInput::make('slug')
                    ->default(null),
                Textarea::make('title')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('latitude')
                    ->numeric()
                    ->default(null),
                TextInput::make('longitude')
                    ->numeric()
                    ->default(null),
                TextInput::make('location')
                    ->required(),
                TextInput::make('size')
                    ->default(null),
                TextInput::make('price')
                    ->numeric()
                    ->default(null)
                    ->prefix('$'),
                Select::make('city_id')
                    ->relationship('city', 'name')
                    ->required(),
                Select::make('community_id')
                    ->relationship('community', 'name')
                    ->required(),
                Select::make('sub_community_id')
                    ->relationship('subCommunity', 'name')
                    ->required(),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('agent_id')
                    ->required()
                    ->numeric(),
                FileUpload::make('image')
                    ->image(),
                TextInput::make('rating')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('reviews')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('active'),
            ]);
    }
}
