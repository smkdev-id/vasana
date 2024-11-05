<?php

namespace App\Filament\Resources\TODOResource\Pages;

use App\Filament\Resources\TODOResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTODO extends EditRecord
{
    protected static string $resource = TODOResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
