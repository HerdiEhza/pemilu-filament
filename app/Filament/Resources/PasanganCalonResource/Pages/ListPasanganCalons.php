<?php

namespace App\Filament\Resources\PasanganCalonResource\Pages;

use App\Filament\Resources\PasanganCalonResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPasanganCalons extends ListRecords
{
    protected static string $resource = PasanganCalonResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
