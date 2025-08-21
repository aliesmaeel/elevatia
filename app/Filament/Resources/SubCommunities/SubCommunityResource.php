<?php

namespace App\Filament\Resources\SubCommunities;

use App\Filament\Resources\SubCommunities\Pages\CreateSubCommunity;
use App\Filament\Resources\SubCommunities\Pages\EditSubCommunity;
use App\Filament\Resources\SubCommunities\Pages\ListSubCommunities;
use App\Filament\Resources\SubCommunities\Schemas\SubCommunityForm;
use App\Filament\Resources\SubCommunities\Tables\SubCommunitiesTable;
use App\Models\SubCommunity;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SubCommunityResource extends Resource
{
    protected static ?string $model = SubCommunity::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function getGloballySearchableAttributes(): array
    {
        return ['name'];
    }

    protected static ?string $recordTitleAttribute = 'subCommunity';

    public static function form(Schema $schema): Schema
    {
        return SubCommunityForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SubCommunitiesTable::configure($table);
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
            'index' => ListSubCommunities::route('/'),
            'create' => CreateSubCommunity::route('/create'),
            'edit' => EditSubCommunity::route('/{record}/edit'),
        ];
    }
}
