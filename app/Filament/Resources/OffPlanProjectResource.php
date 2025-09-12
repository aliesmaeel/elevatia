<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OffPlanProjectResource\Pages;
use App\Filament\Resources\OffPlanProjectResource\RelationManagers;
use App\Models\OffPlanProject;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class OffPlanProjectResource extends Resource
{
    protected static ?string $model = OffPlanProject::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live()
                    ->afterStateUpdated(function (Forms\Get $get, Forms\Set $set, ?string $operation, ?string $old, ?string $state, ?Model $record) {
                        if ($operation === 'edit') {
                            return;
                        }
                        $slug = $get('slug') ?? '';
                        if ($slug !== Str::slug($state)) {
                            $set('slug', Str::slug($state));
                        }
                    })->lazy(),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignorable: fn (?OffPlanProject $record) => $record),
                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('price_starts_from')
                    ->required()
                    ->maxLength(100),
                Forms\Components\DatePicker::make('completion_date')
                    ->required(),
                Forms\Components\TextInput::make('developer')
                    ->required()
                    ->maxLength(100),
                Forms\Components\Repeater::make('images')
                    ->relationship()
                    ->schema([
                        Forms\Components\FileUpload::make('image_path')
                            ->image()
                            ->label('Image')
                            ->required(),
                    ])
                    ->columns(2)
                    ->columnSpanFull()
                    ->collapsible()
                    ->minItems(0)
                    ->maxItems(15),
                Forms\Components\TextInput::make('first_installment')
                    ->maxLength(10)
                    ->default(null),
                Forms\Components\TextInput::make('under_construction')
                    ->maxLength(10)
                    ->default(null),
                Forms\Components\TextInput::make('on_handover')
                    ->maxLength(10)
                    ->default(null),
                Forms\Components\RichEditor::make('features')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('lat')
                    ->label('Latitude')
                    ->numeric()
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function (Forms\Set $set, $state): void {
                        $set('location.lat', $state);
                    }),

                Forms\Components\TextInput::make('lng')
                    ->label('Longitude')
                    ->numeric()
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function (Forms\Set $set, $state): void {
                        $set('location.lng', $state);
                    }),

                \Dotswan\MapPicker\Fields\Map::make('location')
                    ->afterStateHydrated(function ($state, $record, Forms\Set $set): void {
                        $set('location', ['lat' => $record?->lat, 'lng' => $record?->lng]);
                    })
                    ->defaultLocation(latitude: 25.204, longitude: 55.2708)
                    ->showMarker(true)
                    ->showFullscreenControl(true)

                    ->draggable()
                    ->showZoomControl()
                    ->zoom(14)
                    ->clickable(true)
                    ->columnSpanFull()
                    ->detectRetina()
                    ->afterStateUpdated(function (Forms\Set $set, ?array $state): void {
                        $set('lat',  $state['lat']);
                        $set('lng', $state['lng']);
                    }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price_starts_from')
                    ->searchable(),
                Tables\Columns\TextColumn::make('completion_date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('developer')
                    ->searchable(),
                Tables\Columns\TextColumn::make('first_installment')
                    ->searchable(),
                Tables\Columns\TextColumn::make('under_construction')
                    ->searchable(),
                Tables\Columns\TextColumn::make('on_handover')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lng')
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
            'index' => Pages\ListOffPlanProjects::route('/'),
            'create' => Pages\CreateOffPlanProject::route('/create'),
            'edit' => Pages\EditOffPlanProject::route('/{record}/edit'),
        ];
    }
}
