<?php

namespace App\Filament\Resources\CodingResource\Pages;

use App\Filament\Resources\CodingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCodings extends ListRecords
{
    protected static string $resource = CodingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
