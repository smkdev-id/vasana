<?php

namespace App\Filament\User\Resources\GraphResource\Pages;

use App\Filament\User\Resources\GraphResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGraphs extends ListRecords
{
    protected static string $resource = GraphResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
