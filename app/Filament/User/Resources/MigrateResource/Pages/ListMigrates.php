<?php

namespace App\Filament\User\Resources\MigrateResource\Pages;

use App\Filament\User\Resources\MigrateResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMigrates extends ListRecords
{
    protected static string $resource = MigrateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
