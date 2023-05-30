<?php

namespace App\Filament\Resources\DataPartaiResource\Pages;

use App\Filament\Resources\DataPartaiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDataPartai extends EditRecord
{
    protected static string $resource = DataPartaiResource::class;

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
