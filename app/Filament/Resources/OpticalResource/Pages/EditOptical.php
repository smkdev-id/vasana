<?php

namespace App\Filament\Resources\OpticalResource\Pages;

use App\Filament\Resources\OpticalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOptical extends EditRecord
{
    protected static string $resource = OpticalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
