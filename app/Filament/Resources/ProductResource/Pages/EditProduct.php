<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;
    protected static ?string $title = 'Editar Produto';
    protected static ?string $modelLabel = 'Editar';

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
