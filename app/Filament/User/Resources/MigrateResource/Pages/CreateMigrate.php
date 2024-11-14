<?php

namespace App\Filament\User\Resources\MigrateResource\Pages;

use App\Filament\User\Resources\MigrateResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMigrate extends CreateRecord
{
    protected static string $resource = MigrateResource::class;
}
