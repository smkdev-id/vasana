<?php

namespace App\Filament\Clusters\Tools\Resources\GistResource\Pages;

use App\Filament\Clusters\Tools\Resources\GistResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGists extends ListRecords
{
    protected static string $resource = GistResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
