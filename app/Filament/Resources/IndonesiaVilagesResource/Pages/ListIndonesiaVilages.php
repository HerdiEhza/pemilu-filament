<?php

namespace App\Filament\Resources\IndonesiaVilagesResource\Pages;

use App\Filament\Resources\IndonesiaVilagesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIndonesiaVilages extends ListRecords
{
    protected static string $resource = IndonesiaVilagesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
