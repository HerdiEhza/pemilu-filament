<?php

namespace App\Filament\Resources\KategoriPemiluResource\Pages;

use App\Filament\Resources\KategoriPemiluResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKategoriPemilu extends ViewRecord
{
    protected static string $resource = KategoriPemiluResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
