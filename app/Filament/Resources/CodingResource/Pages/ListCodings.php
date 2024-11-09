<?php

namespace App\Filament\Clusters\Platform\Resources\CodingResource\Pages;

use App\Filament\Clusters\Platform\Resources\CodingResource;
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
