<?php

namespace App\Filament\Resources\IndonesiaCitiesResource\Pages;

use App\Filament\Resources\IndonesiaCitiesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIndonesiaCities extends ListRecords
{
    protected static string $resource = IndonesiaCitiesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
