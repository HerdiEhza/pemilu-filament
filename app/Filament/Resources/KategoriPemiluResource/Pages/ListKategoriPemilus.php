<?php

namespace App\Filament\Resources\KategoriPemiluResource\Pages;

use App\Filament\Resources\KategoriPemiluResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriPemilus extends ListRecords
{
    protected static string $resource = KategoriPemiluResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
