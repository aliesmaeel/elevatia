<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AllPropertyResource\Pages;
use App\Filament\Resources\AllPropertyResource\RelationManagers;
use App\Models\AllProperty;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AllPropertyResource extends Resource
{
    protected static ?string $model = AllProperty::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('type')
                    ->required()
                    /// type should be unique in his table
                    ->options([
                        'LABOR CAMPS' => 'LABOR CAMPS',
                        'RESIDENTIAL BUILDINGS' => 'RESIDENTIAL BUILDINGS',
                        'COMMERCIAL SPACES' => 'COMMERCIAL SPACES',
                        'SHOWROOMS' => 'SHOWROOMS',
                    ])->unique(AllProperty::class, 'type', ignoreRecord: true),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required(),
                Forms\Components\TextInput::make('url')
                    ->required()
                    ->maxLength(191),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('url')
                    ->searchable(),
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
            'index' => Pages\ListAllProperties::route('/'),
            'create' => Pages\CreateAllProperty::route('/create'),
            'edit' => Pages\EditAllProperty::route('/{record}/edit'),
        ];
    }
}
