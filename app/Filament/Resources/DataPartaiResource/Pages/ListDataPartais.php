<?php

namespace App\Filament\Resources\DataPartaiResource\Pages;

use App\Filament\Resources\DataPartaiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDataPartais extends ListRecords
{
    protected static string $resource = DataPartaiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
