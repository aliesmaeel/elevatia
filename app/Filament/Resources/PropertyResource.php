<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PropertyResource\Pages;
use App\Filament\Resources\PropertyResource\RelationManagers;
use App\Helpers\RealestateTypes;
use App\Models\Property;
use Cheesegrits\FilamentGoogleMaps\Fields\Map;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class PropertyResource extends Resource
{
    protected static ?string $model = Property::class;
    protected static ?string $navigationGroup='Properties';

    protected static ?string $navigationIcon = 'heroicon-o-home';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('type')
                    ->options(RealestateTypes::getPropertyTypes())
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('completion_status')
                    ->options(RealestateTypes::getCompletionStatus())
                    ->required(),
                Forms\Components\Textarea::make('title')
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
                    ->maxLength(191)->required(),

                Forms\Components\TextInput::make('price')
                    ->maxLength(191),
                Forms\Components\Select::make('city_id')
                    ->relationship('city', 'name'),

                Forms\Components\Select::make('community_id')
                    ->relationship('community', 'name')
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('subCommunity_id')
                    ->relationship('subCommunity', 'name')
                    ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('bedrooms')->numeric(),
                Forms\Components\TextInput::make('bathrooms')->numeric(),
                Forms\Components\TextInput::make('garage')->numeric(),
                Forms\Components\TextInput::make('build_year')->numeric(),
                Forms\Components\RichEditor::make('description')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('constructor'),
                Forms\Components\TextInput::make('price_starts_from'),
                Forms\Components\TextInput::make('handover_date'),
                Forms\Components\TextInput::make('size')
                    ->maxLength(191)->numeric(),
                Forms\Components\Select::make('agent_id')
                    ->relationship('agent', 'name')
                    ->required(),
                Forms\Components\TextInput::make('rating')
                    ->numeric()
                    ->maxLength(191),
                Forms\Components\TextInput::make('reviews')
                    ->numeric()
                    ->maxLength(191),
                Forms\Components\Toggle::make('active'),
                Forms\Components\MultiSelect::make('amenity_id')
                    ->relationship('amenities', 'name')
                    ->placeholder('Select Amenities'),
                Forms\Components\Toggle::make('is_premium')->label('Premium'),
                Forms\Components\Select::make('status')
                    ->options(RealestateTypes::getPropertyStatus())
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->image()->label('Main Image')->columnSpanFull(),

                Forms\Components\TextInput::make('latitude')
                    ->label('Latitude')
                    ->numeric()
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function (Forms\Set $set, $state): void {
                        $set('location.lat', $state);
                    }),

                Forms\Components\TextInput::make('longitude')
                    ->label('Longitude')
                    ->numeric()
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function (Forms\Set $set, $state): void {
                        $set('location.lng', $state);
                    }),

                \Dotswan\MapPicker\Fields\Map::make('location')
                    ->afterStateHydrated(function ($state, $record, Forms\Set $set): void {
                        $set('location', ['lat' => $record?->latitude, 'lng' => $record?->longitude]);
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
                        $set('latitude',  $state['lat']);
                        $set('longitude', $state['lng']);
                    }),

                Forms\Components\TextInput::make('address')->required()->columnSpanFull(),
                Forms\Components\Repeater::make('propertyImages')
                    ->relationship()
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->label('Image')
                            ->required(),
                    ])
                    ->columns(2)
                    ->columnSpanFull()
                    ->collapsible()
                    ->minItems(0)
                    ->maxItems(10),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city.name')
                    ->searchable(),

                Tables\Columns\TextColumn::make('size')
                    ->searchable(),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
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
                    Tables\Actions\BulkAction::make('activate')
                        ->label('Mark as Active')
                        ->icon('heroicon-o-check-circle')
                        ->action(function (Collection $records): void {
                            $recordIds = $records->pluck('id')->toArray();
                            Property::whereIn('id', $recordIds)->update(['active' => true]);

                        }),

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
            'index' => Pages\ListProperties::route('/'),
            'create' => Pages\CreateProperty::route('/create'),
            'edit' => Pages\EditProperty::route('/{record}/edit'),
        ];
    }


}
