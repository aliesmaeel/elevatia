<?php

namespace App\Filament\Resources;

use App\EmailTypes;
use App\Filament\Resources\ContactEmailResource\Pages;
use App\Filament\Resources\ContactEmailResource\RelationManagers;
use App\Models\ContactEmail;
use App\Models\Email;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactEmailResource extends Resource
{
    protected static ?string $model = Email::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Emails';

    protected static ?string $label = 'Contact Email';


    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('type', EmailTypes::CONTACT);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('time')->dateTime(),
                Tables\Columns\TextColumn::make('message')->limit(50)->wrap()->searchable(),
                Tables\Columns\IconColumn::make('is_read')->boolean(),
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
            'index' => Pages\ListContactEmails::route('/'),
            'create' => Pages\CreateContactEmail::route('/create'),
            'edit' => Pages\EditContactEmail::route('/{record}/edit'),
        ];
    }

    public static function canEdit(Model $record): bool
    {
      return false;
    }

    public static function canCreate(): bool
    {
       return false;
    }
}
