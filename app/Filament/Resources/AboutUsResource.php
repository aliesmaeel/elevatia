<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutUsResource\Pages;
use App\Filament\Resources\AboutUsResource\RelationManagers;
use App\Models\AboutUs;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutUsResource extends Resource
{
    protected static ?string $model = AboutUs::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup='Pages';
    protected static ?string $pluralLabel = 'About Us';
    protected static ?string $navigationLabel='About Us';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('about-us')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('about-us-image'),
                Forms\Components\Textarea::make('our-vision')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('trust-heading')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('customer-satisfaction')
                    ->columnSpanFull(),
                Forms\Components\Repeater::make('customer-satisfaction-images')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->directory('')
                    ])
                    ->columnSpanFull()
                    ->default([]),
                Forms\Components\Textarea::make('quality')
                    ->columnSpanFull(),
                Forms\Components\Repeater::make('quality-images')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->directory('')
                    ])
                    ->columnSpanFull()
                    ->default([]),
                Forms\Components\Textarea::make('integrity')
                    ->columnSpanFull(),
                Forms\Components\Repeater::make('integrity-images')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->directory('')
                    ])
                    ->columnSpanFull()
                    ->default([]),
                Forms\Components\Textarea::make('innovation')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('quote')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('about-us-image')
                    ->label('About Us Image')
                    ->disk('public') // Ensure your filesystem is configured
                    ->height(50)
                    ->width(50),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAboutUs::route('/'),
            'create' => Pages\CreateAboutUs::route('/create'),
            'edit' => Pages\EditAboutUs::route('/{record}/edit'),
        ];
    }
}
