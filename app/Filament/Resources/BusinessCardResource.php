<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BusinessCardResource\Pages;
use App\Filament\Resources\BusinessCardResource\RelationManagers;
use App\Models\BusinessCard;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BusinessCardResource extends Resource
{
    protected static ?string $model = BusinessCard::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    protected static ?string $navigationGroup='Services';



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('logo')
                    ->label('Logo')
                    ->image()
                    ->disk('public')
                    ->directory('business-cards')
                    ->visibility('public')
                    ->default(null)
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                Forms\Components\TextInput::make('job_title')
                    ->default(null),
                Forms\Components\TextInput::make('company_name')
                    ->default(null),
                Forms\Components\TextInput::make('phone')
                    ->default(null),
                Forms\Components\TextInput::make('address')
                    ->default(null),
                Forms\Components\TextInput::make('url')
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordUrl(fn (Model $record): string =>
            Pages\ViewBusinessCard::getUrl(['record' => $record])
            )
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('job_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('company_name')
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
            'index' => Pages\ListBusinessCards::route('/'),
            'create' => Pages\CreateBusinessCard::route('/create'),
            'edit' => Pages\EditBusinessCard::route('/{record}/edit'),
            'view'   => Pages\ViewBusinessCard::route('/{record}'),
        ];
    }
}
