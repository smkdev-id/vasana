<?php

namespace App\Filament\User\Resources\MigrateResource\Pages;

use App\Filament\User\Resources\MigrateResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMigrate extends EditRecord
{
    protected static string $resource = MigrateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
