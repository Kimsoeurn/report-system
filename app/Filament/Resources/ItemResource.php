<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ItemResource\Pages;
use App\Models\Item;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ItemResource extends Resource
{
    protected static ?string $model = Item::class;

    protected static ?string $navigationIcon = 'heroicon-o-database';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(static::getFormSchema(Forms\Components\Card::class))
            ->columns([
                'sm' => 3,
                'lg' => null,
            ]);
    }

    public static function getFormSchema(string $layout = Forms\Components\Grid::class): array
    {
        return [
            Forms\Components\Group::make()
                ->schema([
                    $layout::make()
                        ->schema([
                            Forms\Components\FileUpload::make('photo')
                        ])
                        ->columns(1),
                    $layout::make()
                        ->schema([
                            Forms\Components\TextInput::make('sku')
                                ->required(),
                            Forms\Components\TextInput::make('name')
                                ->required(),
                            Forms\Components\TextInput::make('qty')
                                ->integer()
                                ->required(),
                            Forms\Components\Textarea::make('remark')
                                ->rows(2)
                                ->columnSpan([
                                    'sm' => 2,
                                ]),
                            Forms\Components\RichEditor::make('description')
                                ->columnSpan([
                                    'sm' => 2,
                                ]),
                        ])->columns([
                            'sm' => 2,
                        ]),
                ])->columnSpan([
                    'sm' => 2,
                ]),
            Forms\Components\Group::make()
                ->schema([
                    $layout::make()
                        ->schema([
                            Forms\Components\Placeholder::make('Status'),
                        ])
                        ->columns(1),
                ])
                ->columnSpan(1),
        ];
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo'),
                Tables\Columns\TextColumn::make('sku'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('qty')->label('Stock Qty'),
                Tables\Columns\TextColumn::make('remark'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListItems::route('/'),
            'create' => Pages\CreateItem::route('/create'),
            'view' => Pages\ViewItem::route('/{record}'),
            'edit' => Pages\EditItem::route('/{record}/edit'),
        ];
    }
}
