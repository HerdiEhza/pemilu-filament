<?php

namespace App\Filament\Resources\IndonesiaProvincesResource\Pages;

use App\Filament\Resources\IndonesiaProvincesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewIndonesiaProvinces extends ViewRecord
{
    protected static string $resource = IndonesiaProvincesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
