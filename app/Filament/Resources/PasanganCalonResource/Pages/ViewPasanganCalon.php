<?php

namespace App\Filament\Resources\PasanganCalonResource\Pages;

use App\Filament\Resources\PasanganCalonResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPasanganCalon extends ViewRecord
{
    protected static string $resource = PasanganCalonResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
