<?php

namespace App\Filament\Resources\IndonesiaDistrictsResource\Pages;

use App\Filament\Resources\IndonesiaDistrictsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIndonesiaDistricts extends EditRecord
{
    protected static string $resource = IndonesiaDistrictsResource::class;

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
