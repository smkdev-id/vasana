<?php

namespace App\Filament\User\Resources\ArchitectureResource\Pages;

use App\Filament\User\Resources\ArchitectureResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArchitecture extends EditRecord
{
    protected static string $resource = ArchitectureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
