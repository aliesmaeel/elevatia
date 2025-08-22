<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactPageResource\Pages;
use App\Filament\Resources\ContactPageResource\RelationManagers;
use App\Models\ContactPage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactPageResource extends Resource
{
    protected static ?string $model = ContactPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected static ?string $navigationGroup='Pages';
    protected static ?string $pluralLabel = 'Contact Page';
    protected static ?string $navigationLabel='Contact Page';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(55),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required(),
                Forms\Components\RichEditor::make('description_text')->required(),

                Forms\Components\Toggle::make('active')
                    ->required()->rules([
                        fn (): \Closure => function (string $attribute, $value, \Closure $fail) use ($form) {
                            if ($value && ContactPage::where('active', true)->where('id', '!=', $form->model->id?? '')->exists()) {

                                $fail('Only One Page Could Be active , To Active This
                                Contact Page Please Go And Deactivate Any Other Contact Page');
                            }
                        }
                    ])->default(0),
                Forms\Components\TextInput::make('email')
                    ->required()
                    ->label('Email Globally')
                    ->maxWidth(22),
                Forms\Components\TextInput::make('phone')
                    ->required()
                    ->label('Phone Globally')
                    ->maxLength(55),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\ToggleColumn::make('active'),

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
            'index' => Pages\ListContactPages::route('/'),
            'create' => Pages\CreateContactPage::route('/create'),
            'edit' => Pages\EditContactPage::route('/{record}/edit'),
        ];
    }
}
