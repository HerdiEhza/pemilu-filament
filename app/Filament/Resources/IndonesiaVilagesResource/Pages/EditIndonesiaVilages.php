<?php

namespace App\Filament\Resources\IndonesiaVilagesResource\Pages;

use App\Filament\Resources\IndonesiaVilagesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIndonesiaVilages extends EditRecord
{
    protected static string $resource = IndonesiaVilagesResource::class;

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
