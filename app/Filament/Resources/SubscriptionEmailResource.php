<?php

namespace App\Filament\Resources;

use App\EmailTypes;
use App\Filament\Resources\SubscriptionEmailResource\Pages;
use App\Filament\Resources\SubscriptionEmailResource\RelationManagers;
use App\Models\Email;
use App\Models\SubscriptionEmail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubscriptionEmailResource extends Resource
{
    protected static ?string $model = Email::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Emails';
    protected static ?string $label = 'Subscription Email';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('type', EmailTypes::SUBSCRIPTION);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\IconColumn::make('is_read')->boolean(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->modalHeading('Contact Email Details')
                    ->modalWidth('lg')
                    ->extraModalFooterActions(function (Model $record): array {

                        if ($record->is_read) {
                            return [
                                Tables\Actions\Action::make('mark_unread')
                                    ->label('Mark as Unread')
                                    ->color('danger')
                                    ->outlined()
                                    ->action(function (Model $record) {
                                        $record->update(['is_read' => false]);
                                    })
                                    ->close(),
                            ];
                        }else{
                            $record->update(['is_read' => true]);
                        }
                        return [];
                    })
                    ->form([
                        Forms\Components\TextInput::make('email')->disabled(),
                    ]),
            ])

            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])->filters([
                //is read filter
                Tables\Filters\SelectFilter::make('is_read')
                    ->options([
                        '1' => 'Read',
                        '0' => 'Unread',
                    ])
                    ->label('Is Read'),
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
            'index' => Pages\ListSubscriptionEmails::route('/'),
            'create' => Pages\CreateSubscriptionEmail::route('/create'),
            'edit' => Pages\EditSubscriptionEmail::route('/{record}/edit'),
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
