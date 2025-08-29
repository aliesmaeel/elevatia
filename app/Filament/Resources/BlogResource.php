<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Filament\Forms\Set;
class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;
    protected static ?string $navigationGroup='Pages';
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
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
                    ->unique(Blog::class, 'slug', ignoreRecord: true)
                ->required(),
                Forms\Components\Select::make('agent_id')
                ->relationship('agent', 'name'),
                Forms\Components\TextInput::make('quotes')
                ->columnSpanFull(),
                Forms\Components\Repeater::make('social_links')
                    ->label('Social Links')
                    ->schema([
                        Forms\Components\TextInput::make('platform')
                            ->label('Platform')
                            ->placeholder('facebook, twitter, instagram'),

                        Forms\Components\TextInput::make('url')
                            ->label('URL')
                            ->url()
                            ->required(),

                        Forms\Components\TextInput::make('icon')
                            ->label('Icon')
                            ->placeholder('fa-brands fa-facebook'),
                    ])
                    ->default([])
                    ->columns(3) // show inputs in one row
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('description')
                ->columnSpanFull(),

            ]);
    }



    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('slug')->searchable(),
                Tables\Columns\TextColumn::make('likes'),
                Tables\Columns\TextColumn::make('shares'),
            ])
            ->filters([

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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
