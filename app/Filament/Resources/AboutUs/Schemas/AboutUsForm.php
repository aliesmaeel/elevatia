<?php

namespace App\Filament\Resources\AboutUs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AboutUsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('about-us')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('about-us-image')
                    ->default(null),
                Textarea::make('our-vision')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('trust-heading')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('customer-satisfaction')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('quality')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('integrity')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('innovation')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('customer-satisfaction-images')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('quality-images')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('integrity-images')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('quote')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
