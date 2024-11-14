<?php

namespace App\Filament\User\Resources\ArchitectureResource\Pages;

use App\Filament\User\Resources\ArchitectureResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListArchitectures extends ListRecords
{
    protected static string $resource = ArchitectureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
