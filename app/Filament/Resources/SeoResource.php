<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SeoResource\Pages;
use App\Filament\Resources\SeoResource\RelationManagers;
use App\Models\Seo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SeoResource extends Resource
{
    protected static ?string $model = Seo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('meta_title')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('meta_description')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TagsInput::make('meta_keywords') // Using TagsInput for array handling
                ->required()
                    ->placeholder('Add keywords...')
                    ->columnSpanFull(),
                Forms\Components\Select::make('page_name')
                    ->required()
                    ->options([
                        'home' => 'Home',
                        'about' => 'About',
                        'team' => 'Team',
                        'contact' => 'Contact',
                        'blog' => 'Blog',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('meta_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('meta_description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('page_name')
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
            'index' => Pages\ListSeos::route('/'),
            'create' => Pages\CreateSeo::route('/create'),
            'edit' => Pages\EditSeo::route('/{record}/edit'),
        ];
    }
}
