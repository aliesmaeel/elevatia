<?php

namespace App\Filament\Resources\BusinessCards;

use App\Filament\Resources\BusinessCards\Pages\CreateBusinessCard;
use App\Filament\Resources\BusinessCards\Pages\EditBusinessCard;
use App\Filament\Resources\BusinessCards\Pages\ListBusinessCards;
use App\Filament\Resources\BusinessCards\Pages\ViewBusinessCard;
use App\Filament\Resources\BusinessCards\Schemas\BusinessCardForm;
use App\Filament\Resources\BusinessCards\Schemas\BusinessCardInfolist;
use App\Filament\Resources\BusinessCards\Tables\BusinessCardsTable;
use App\Models\BusinessCard;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BusinessCardResource extends Resource
{
    protected static ?string $model = BusinessCard::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return BusinessCardForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return BusinessCardInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BusinessCardsTable::configure($table);
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
            'index' => ListBusinessCards::route('/'),
            'create' => CreateBusinessCard::route('/create'),
            'view' => ViewBusinessCard::route('/{record}'),
            'edit' => EditBusinessCard::route('/{record}/edit'),
        ];
    }
}
