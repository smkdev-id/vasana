<?php

namespace App\Filament\Resources\TODOResource\Pages;

use App\Filament\Resources\TODOResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTODOS extends ListRecords
{
    protected static string $resource = TODOResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
