<?php

namespace App\Filament\Resources\HomePages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class HomePageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('banner')
                    ->label('Banner Image')
                    ->required()
                    ->image()
                    ->disk('public')

                    ->columnSpanFull(),
                Textarea::make('about_elevatia')
                    ->default(null),
                Textarea::make('our_vision')
                    ->default(null),
                Textarea::make('our_mission')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('active')
                    ->required()->unique(),
            ]);
    }
}
