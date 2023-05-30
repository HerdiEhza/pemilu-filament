<?php

namespace App\Filament\Resources\DataPartaiResource\Pages;

use App\Filament\Resources\DataPartaiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDataPartai extends ViewRecord
{
    protected static string $resource = DataPartaiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
