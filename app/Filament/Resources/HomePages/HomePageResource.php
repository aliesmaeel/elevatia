<?php

namespace App\Filament\Resources\HomePages;

use App\Filament\Resources\HomePages\Pages\CreateHomePage;
use App\Filament\Resources\HomePages\Pages\EditHomePage;
use App\Filament\Resources\HomePages\Pages\ListHomePages;
use App\Filament\Resources\HomePages\Schemas\HomePageForm;
use App\Filament\Resources\HomePages\Tables\HomePagesTable;
use App\Models\HomePage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HomePageResource extends Resource
{
    protected static ?string $model = HomePage::class;

    public static function getGloballySearchableAttributes(): array
    {
        return ['our_vision','our_mission'];
    }

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'HomePage';

    public static function form(Schema $schema): Schema
    {
        return HomePageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HomePagesTable::configure($table);
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
            'index' => ListHomePages::route('/'),
            'create' => CreateHomePage::route('/create'),
            'edit' => EditHomePage::route('/{record}/edit'),
        ];
    }
}
