<?php

namespace App\Filament\Resources;
use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;
use App\Filament\Resources\EmailResource\Pages;
use App\Filament\Resources\EmailResource\RelationManagers;
use App\Models\Email;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmailResource extends Resource
{
    protected static ?string $model = Email::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('message')
                    ->required()
                    ->maxLength(191),
                Forms\Components\Toggle::make('is_read')
                    ->required(),

                Forms\Components\Toggle::make('location')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),

                Tables\Columns\TextColumn::make('message')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_read')
                    ->boolean(),
                Tables\Columns\TextColumn::make('location')
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
                //is read filter
                Tables\Filters\SelectFilter::make('is_read')
                    ->options([
                        '1' => 'Read',
                        '0' => 'Unread',
                    ])
                    ->label('Is Read'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                ->form([Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(191),
                    Forms\Components\TextInput::make('email')
                        ->email()
                        ->required()
                        ->maxLength(191),
                    Forms\Components\TextInput::make('phone')
                        ->tel()
                        ->required()
                        ->maxLength(191),
                    Forms\Components\TextInput::make('message')
                        ->required()
                        ->maxLength(191),
                    Forms\Components\TextInput::make('location')
                        ->required(),]),
                Tables\Actions\Action::make('Change Read Status')
                    ->label('Change Read Status')
                    ->icon('heroicon-o-check-circle')
                    ->action(function (Model $record) {
                        $record->update(['is_read' => !$record->is_read]);
                        Notification::make()
                            ->title('Success')
                            ->success()
                            ->body('Email Status Changed Successfully')
                            ->send();
                    }),
            ])

            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    FilamentExportBulkAction::make('export')


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
            'index' => Pages\ListEmails::route('/'),
            'create' => Pages\CreateEmail::route('/create'),
            'edit' => Pages\EditEmail::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canEdit(Model $record): bool
    {
        return false;
    }

    public static function canView(Model $record): bool
    {
        return true;
    }


}
