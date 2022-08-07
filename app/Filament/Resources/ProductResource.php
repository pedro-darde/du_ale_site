<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\Widgets\ProductStats;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput\Mask;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationLabel = 'Produtos';

    protected static ?string $modelLabel = 'Produtos';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make([
                    Forms\Components\TextInput::make('name')->required(true)->lazy()->label('Nome do Produto'),
                    Forms\Components\TextInput::make('price')
                        ->numeric()
                        ->mask(
                            fn(Mask $mask) => $mask
                                ->numeric()
                                ->decimalPlaces(2) // Set the number of digits after the decimal point.
                                ->decimalSeparator(',') // Add a separator for decimal numbers.
                                ->normalizeZeros() // Append or remove zeros at the end of the number.
                                ->thousandsSeparator('.') // Add a separator for thousands.
                        )->label('Preço'),
                    Forms\Components\Checkbox::make('in_stock')->required(false)->default(true)->label('Disponível em estoque'),
                    Textarea::make('description')->required(false)->label('Descrição')->helperText('Escreva um pouco sobre o produto'),
                    Forms\Components\Section::make('Imagens')
                        ->schema([
                            SpatieMediaLibraryFileUpload::make('media')
                                ->collection('product-images')
                                ->image()
                                ->multiple()
                                ->disableLabel()
                                ->enableDownload()
                                ->enableOpen()

                        ])
                        ->collapsible()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->label('#'),
                TextColumn::make('name')->sortable()->label('Nome'),
                TextColumn::make('description')->sortable()->label('Descrição'),
                BooleanColumn::make('in_stock')->label('Em estoque'),
                SpatieMediaLibraryImageColumn::make('product-image')
                    ->label('Imagem')
                    ->collection('product-images'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Editar'),
                Tables\Actions\ViewAction::make()->label('Visualizar')->modalHeading('Visualizar Produto'),
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

    public static function getWidgets(): array
    {
        return [
            ProductStats::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }


}
