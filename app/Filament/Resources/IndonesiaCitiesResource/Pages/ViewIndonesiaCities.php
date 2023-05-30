<?php

namespace App\Filament\Resources\IndonesiaCitiesResource\Pages;

use App\Filament\Resources\IndonesiaCitiesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewIndonesiaCities extends ViewRecord
{
    protected static string $resource = IndonesiaCitiesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
