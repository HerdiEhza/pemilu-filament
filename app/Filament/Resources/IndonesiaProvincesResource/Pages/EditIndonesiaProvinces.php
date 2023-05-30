<?php

namespace App\Filament\Resources\IndonesiaProvincesResource\Pages;

use App\Filament\Resources\IndonesiaProvincesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIndonesiaProvinces extends EditRecord
{
    protected static string $resource = IndonesiaProvincesResource::class;

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
