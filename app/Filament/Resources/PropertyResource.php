<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PropertyResource\Pages;
use App\Filament\Resources\PropertyResource\RelationManagers;
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

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('type')
                    ->options([
                        'Labour Camp' => 'Labour Camp',
                        'Residential Building' => 'Residential Building',
                        'Commercial Spaces' => 'Commercial Spaces',
                        'Showrooms' => 'Showrooms',
                        'Apartment/Flat' => 'Apartment/Flat',
                        'Duplex' => 'Duplex',
                        'Land/Plot' => 'Land/Plot',
                        'Penthouse' => 'Penthouse',
                        'Townhouse' => 'Townhouse',
                        'Villa' => 'Villa',
                        'Factory' => 'Factory',
                        'Full Floor' => 'Full Floor',
                        'Office Space' => 'Office Space',
                        'Shop' => 'Shop',
                        'Whole Building' => 'Whole Building',
                        'Warehouse' => 'Warehouse',
                    ])
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
                    })
                    ->columnSpanFull()
                    ->lazy(),
                Forms\Components\TextInput::make('slug')
                    ->maxLength(191)->required(),

                Forms\Components\TextInput::make('permit_number')
                    ->maxLength(191),
                Forms\Components\TextInput::make('price')
                    ->maxLength(191),
                Forms\Components\TextInput::make('city')
                    ->maxLength(191)
                    ->default('Dubai')
                    ->placeholder('Dubai')
                    ->disabled(),
                Forms\Components\Select::make('community_id')
                    ->relationship('community', 'name')
                    ->required(),
                Forms\Components\RichEditor::make('description')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('size')
                    ->maxLength(191)->numeric(),
                Forms\Components\Select::make('agent_id')
                    ->relationship('agent', 'name')
                    ->required(),
                Forms\Components\Toggle::make('featured'),
                Forms\Components\Toggle::make('furnished'),
                Forms\Components\Toggle::make('active'),
                Forms\Components\MultiSelect::make('amenity_id')
                    ->relationship('amenities', 'name')
                    ->placeholder('Select Amenities'),
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

                    ->liveLocation(true, true, 5000)
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



            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('permit_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                    ->searchable(),

                Tables\Columns\TextColumn::make('size')
                    ->searchable(),
                Tables\Columns\IconColumn::make('featured')
                    ->boolean(),
                Tables\Columns\IconColumn::make('furnished')
                    ->boolean(),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('latitude')
                    ->searchable(),
                Tables\Columns\TextColumn::make('longitude')
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
