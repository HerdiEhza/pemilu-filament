<?php

namespace App\Filament\Resources\IndonesiaProvincesResource\Pages;

use App\Filament\Resources\IndonesiaProvincesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIndonesiaProvinces extends ListRecords
{
    protected static string $resource = IndonesiaProvincesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
