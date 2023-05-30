<?php

namespace App\Filament\Resources\DataTpsResource\Pages;

use App\Filament\Resources\DataTpsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDataTps extends ViewRecord
{
    protected static string $resource = DataTpsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
