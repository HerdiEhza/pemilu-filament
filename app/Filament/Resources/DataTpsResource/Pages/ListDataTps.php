<?php

namespace App\Filament\Resources\DataTpsResource\Pages;

use App\Filament\Resources\DataTpsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDataTps extends ListRecords
{
    protected static string $resource = DataTpsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
