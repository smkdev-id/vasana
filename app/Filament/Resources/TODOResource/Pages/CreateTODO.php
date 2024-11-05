<?php

namespace App\Filament\Resources\TODOResource\Pages;

use App\Filament\Resources\TODOResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTODO extends CreateRecord
{
    protected static string $resource = TODOResource::class;
}
