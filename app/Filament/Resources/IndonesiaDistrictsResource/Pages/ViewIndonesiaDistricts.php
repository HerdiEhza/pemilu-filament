<?php

namespace App\Filament\Resources\IndonesiaDistrictsResource\Pages;

use App\Filament\Resources\IndonesiaDistrictsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewIndonesiaDistricts extends ViewRecord
{
    protected static string $resource = IndonesiaDistrictsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
