<?php

namespace App\Filament\Resources\KategoriPemiluResource\Pages;

use App\Filament\Resources\KategoriPemiluResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriPemilu extends EditRecord
{
    protected static string $resource = KategoriPemiluResource::class;

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
