<?php

namespace App\Filament\Resources\DataTpsResource\Pages;

use App\Filament\Resources\DataTpsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDataTps extends EditRecord
{
    protected static string $resource = DataTpsResource::class;

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
