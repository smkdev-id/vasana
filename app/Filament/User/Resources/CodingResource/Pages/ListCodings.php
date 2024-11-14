<?php

namespace App\Filament\User\Resources\CodingResource\Pages;

use App\Filament\User\Resources\CodingResource;
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
