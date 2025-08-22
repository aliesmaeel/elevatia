<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomePageResource\Pages;
use App\Filament\Resources\HomePageResource\RelationManagers;
use App\Models\HomePage;
use Closure;
use Faker\Provider\Text;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HomePageResource extends Resource
{
    protected static ?string $model = HomePage::class;
    protected static ?string $navigationIcon = 'heroicon-o-home-modern';
    protected static ?string $navigationGroup='Pages';
    protected static ?string $pluralLabel = 'Home Page';
    protected static ?string $navigationLabel='Home Page';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name'),
                Forms\Components\FileUpload::make('video_section_web'),
                Forms\Components\FileUpload::make('video_section_mobile'),

                Forms\Components\RichEditor::make('about_section_text')->required(),

                Forms\Components\Repeater::make('images')
                ->relationship('images')
                ->schema([
                    Forms\Components\FileUpload::make('url')
                    ->directory('homepage-images')
                        ->required(),
                ]),
                Forms\Components\Textarea::make('what_we_do_section_text')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('our_team_section_text')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('blogs_section_text')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('active')
                    ->required()->rules([
                        fn (): \Closure => function (string $attribute, $value, Closure $fail) use ($form) {

                            if ($value && HomePage::where('active', true)->where('id', '!=', $form->model->id?? '')->exists()) {
                                $fail('Only one page can be active at a time. To activate this HomePage, please deactivate any other active HomePage.');
                            }
                        }
                    ])->default(0),
                // spped
                Forms\Components\TextInput::make('speed')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
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
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListHomePages::route('/'),
            'create' => Pages\CreateHomePage::route('/create'),
            'edit' => Pages\EditHomePage::route('/{record}/edit'),
        ];
    }
}
