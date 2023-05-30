<?php

namespace App\Filament\Resources\PasanganCalonResource\Pages;

use App\Filament\Resources\PasanganCalonResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPasanganCalon extends EditRecord
{
    protected static string $resource = PasanganCalonResource::class;

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
