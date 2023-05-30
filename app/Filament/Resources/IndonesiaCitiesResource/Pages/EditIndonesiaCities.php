<?php

namespace App\Filament\Resources\IndonesiaCitiesResource\Pages;

use App\Filament\Resources\IndonesiaCitiesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIndonesiaCities extends EditRecord
{
    protected static string $resource = IndonesiaCitiesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
