<?php

namespace App\Filament\Resources;

use App\EmailTypes;
use App\Filament\Resources\ReviewEmailResource\Pages;
use App\Filament\Resources\ReviewEmailResource\RelationManagers;
use App\Models\Email;
use App\Models\ReviewEmail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReviewEmailResource extends Resource
{
    protected static ?string $model = Email::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil';
    protected static ?string $navigationGroup = 'Emails';

    protected static ?string $label = 'Review Email';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('type', EmailTypes::REVIEW);
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
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('time')->dateTime(),
                Tables\Columns\TextColumn::make('message')->limit(50)->wrap()->searchable(),
                Tables\Columns\TextColumn::make('date')->date(),
                Tables\Columns\TextColumn::make('property_type')->label('Property Type'),
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
                        Forms\Components\TextInput::make('name')->disabled(),
                        Forms\Components\TextInput::make('email')->disabled(),
                        Forms\Components\TextInput::make('phone')->disabled(),
                        Forms\Components\TextInput::make('time')->disabled(),
                        Forms\Components\TextInput::make('date')->disabled(),
                        Forms\Components\TextInput::make('property_type')->label('Property Type')->disabled(),
                        Forms\Components\Textarea::make('message')->disabled()->dehydrated(false)->rows(6),

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
            'index' => Pages\ListReviewEmails::route('/'),
            'create' => Pages\CreateReviewEmail::route('/create'),
            'edit' => Pages\EditReviewEmail::route('/{record}/edit'),
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
