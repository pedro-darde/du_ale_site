<?php

namespace App\Filament\Resources\ProductResource\Widgets;

use App\Models\Product;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class ProductStats extends BaseWidget
{
    public function getCards(): array
    {
        return [
            Card::make('Produtos cadastrados', Product::count()),
            Card::make('Média de preço dos produtos', number_format(Product::avg('price'), 2)),
            Card::make('Valor dos produtos em estoque', number_format(Product::sum('price'), 2))
        ];
    }
}
