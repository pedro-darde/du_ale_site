<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextInput\Mask;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationLabel = 'Produtos';

    protected static ?string $modelLabel = 'AAAAAAAAAAA';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(true)->type('string')->label('Nome do Produto'),
                Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->mask(fn(Mask $mask) => $mask
                        ->numeric()
                        ->decimalPlaces(2) // Set the number of digits after the decimal point.
                        ->decimalSeparator(',') // Add a separator for decimal numbers.
                        ->normalizeZeros() // Append or remove zeros at the end of the number.
                        ->thousandsSeparator('.') // Add a separator for thousands.
                    )->label('Preço'),
                Textarea::make('description')->required(true)->label('Descrição'),
                Forms\Components\Checkbox::make('in_stok')->required(false)->default(true)->label('Disponível em estoque')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
